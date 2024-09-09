<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    $serveur = "localhost";
    $utilisateur = "qayvsgqu_ADMIN";
    $mdp_bdd = "Laddel-DP_SNIR24"; 
    $bdd = "qayvsgqu_AVIS";

    $connexion = new mysqli($serveur, $utilisateur, $mdp_bdd, $bdd);

    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }

    $requete = "SELECT id FROM utilisateurs WHERE email = ? AND mot_de_passe = ?";
    $requete_preparee = $connexion->prepare($requete);
    $requete_preparee->bind_param("ss", $email, $mot_de_passe);

    $requete_preparee->execute();

    $resultat = $requete_preparee->get_result();

    if ($resultat->num_rows > 0) {
       
        $_SESSION['email'] = $email;
       
        header("Location: information.php");
        exit();
    } else {
        echo "Identifiants incorrects. Veuillez réessayer.";
    }

    $connexion->close();
}
?>
