<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avis Lycée du Rempart</title>
    <link rel="stylesheet" href="avis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>
<body>
    <header class="header">
        <img src="img/logo-lycée.png" alt="Logo du Lycée du Rempart" class="logo">
        <h1>Lycée du Rempart</h1>
    </header>
    <main>
        <h1>Bienvenue</h1>
        <div id="avis-container" class="avis-container">
            <?php
            $serveur = "localhost";
            $utilisateur = "qayvsgqu_ADMIN";
            $mdp_bdd = "Laddel-DP_SNIR24"; 
            $bdd = "qayvsgqu_AVIS";

            $connexion = new mysqli($serveur, $utilisateur, $mdp_bdd, $bdd);

            if ($connexion->connect_error) {
                die("Connexion échouée : " . $connexion->connect_error);
            }

            $requete = "SELECT * FROM AVIS_SITEWEB";

            $resultat = $connexion->query($requete);

            if ($resultat !== false && $resultat->num_rows > 0) {
                while ($ligne = $resultat->fetch_assoc()) {
                    echo "<div class='avis'>";
                    echo "<h2>" . $ligne['NOM_PRENOM'] . "</h2>";
                    echo "<p><i class='fas fa-envelope'></i> Email : " . $ligne['EMAIL'] . "</p>";
                    echo "<p><i class='fas fa-book'></i> Formation suivie : " . $ligne['FORMATION'] . "</p>";
                    echo "<p><i class='fas fa-star'></i> Note : " . $ligne['NOTE'] . "/10</p>";
                    echo "<p><i class='fas fa-at'></i> Contact par mail : " . $ligne['CONTACT'] . "</p>";
                    echo "<p><i class='fas fa-comment'></i> Message : " . $ligne['MESSAGE'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Aucun avis trouvé.</p>";
            }

            $connexion->close();
            ?>
        </div>
    </main>
    <footer>
        <button class="return-button" onclick="window.location.href='http://btsrempart.go.yj.fr/Borne/borne.php'">Retour à la borne</button>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const avisElements = document.querySelectorAll('.avis');
            avisElements.forEach((avis, index) => {
                avis.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>
