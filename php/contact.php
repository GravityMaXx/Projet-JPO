<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'avis.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 $nomprenomm = $_POST['name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    

    $serveur = "localhost";
    $utilisateur = "qayvsgqu_ADMIN";
    $mdp_bdd = "Laddel-DP_SNIR24"; 
    $bdd = "qayvsgqu_AVIS";

    $connexion = new mysqli($serveur, $utilisateur, $mdp_bdd, $bdd);

    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }

    $query = "SELECT DISTINCT EMAIL FROM AVIS_SITEWEB WHERE contact = 1 AND envoye = 0";
    $result = $connexion->query($query);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $email_destinataire = $row["EMAIL"];
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host       = '';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'bornerempart13008@gmail.com';
                $mail->Password   = 'qeoryeecysoltesp';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->CharSet    = 'UTF-8';
                $mail->Port       = 465;
                $mail->setFrom('from@example.com', 'BorneRempart');
                $mail->addAddress($email_destinataire);
                $mail->isHTML(true);
                $mail->Subject = 'Merci d\'avoir laissé votre avis !';
                $mail->Body    = '
                <html>
                <head>
                    <meta charset="UTF-8">
                </head>
                <body>
                    <p>Bonjour  ' . $nomprenomm . ',</p>
                    <p>Nous tenons à vous exprimer notre profonde gratitude pour avoir pris le temps de laisser un avis sur notre établissement, le Lycée Technologique et Général du Rempart.</p>
                    <p>Votre avis est très précieux pour nous et contribue à l’amélioration continue de nos services. Nous attachons une grande importance à vos retours et nous nous efforçons constamment de répondre à vos attentes.</p>
                    <p>Pour rester informé de nos actualités et événements, n\'hésitez pas à consulter les liens suivants :</p>
                    <ul>
                        <li><a href="https://www.site.ac-aix-marseille.fr/lyc-rempart/spip/">Site officiel du Lycée</a></li>
                        <li><a href="https://youtu.be/Hvd6h5tX5S4">Vidéo présentation du Lycée Rempart</a></li>
                        <li><a href="https://www.site.ac-aix-marseille.fr/lyc-rempart/spip/spip.php?rubrique21">Les formations</a></li>
                    </ul>
                    <p>Encore une fois, merci pour votre contribution et votre soutien.</p>
                    <p>Bien cordialement,</p>
                    <p><strong>L\'équipe du Lycée Technologique et Général du Rempart</strong></p>
                </body>
                </html>';
                
                $mail->send();

                $maj_bas = "UPDATE AVIS_SITEWEB SET envoye = 1 WHERE EMAIL = ?";
                $maj = $connexion->prepare($maj_bas);
                $maj->bind_param("s", $email_destinataire);
                $maj->execute();
            } catch (Exception $e) {
                // Gestion des erreurs
            }
        }
    } else {
        // Gestion des erreurs de requête
    }

    $connexion->close();

    header('Location: merci.php');
    exit;
} else {
    echo "Aucune donnée POST reçue.";
}
ob_end_flush();
?>
