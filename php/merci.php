<!DOCTYPE html>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Envoyer'])) {
        $contact = isset($_POST['contact']) ? 1 : 0;
        echo $contact;
}
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lycée Rempart - Merci pour votre avis</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header> <!-- Entête de page -->
        <nav class="navbar navbar-dark bg-dark justify-content-center" style="box-shadow: 0 5px 5px rgba(0, 0, 0, .6) ;">
            <a class="navbar-brand text" href="#">
                <img src="../images/logo-lycée.png" width="60" height="60" class="d-inline-block align-top" alt="logo lycée Rempart">
            </a>
            <h2 class="navbar-brand text" style="color: white;">Lycée Rempart</h2>
        </nav>
    </header>
    <section class="container">
        <div class="content-box">
            <img src="../images/logo-lycée.png" alt="Logo du lycée Rempart">
            <div>
                <h2>Merci pour votre avis !</h2>
                <p>
                    Merci d'avoir laissé votre avis. Si Vous avez demandé d'être contacté par mail Vous serez bientôt re-contacté.
                </p>
                <a href="https://www.site.ac-aix-marseille.fr/lyc-rempart/spip/" class="btn">Aller vers le site du lycée Rempart</a>
            </div>
        </div>
    </section>
    <footer class="text-center text-lg-start text-white" style="background-color: black; padding: 1%; flex-direction: row;">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4" style="margin: auto;">
                <img src="../images/logo-ac-aixmarseille.jpg" style="max-width: 60%;" class="d-inline-block align-top" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-4" style="margin: auto;">
                <h5>Lycée <br> Polyvalent Rempart-Vinci <br> <br> 1 Rue de Rempart <br> 13007 Marseille <br> <a style="color: white;" href="tel:"><h5>04 91 14 32 80</h5></a><br><a style="color: white;" href="https://www.site.ac-aix-marseille.fr/lyc-rempart/spip/">Accès au site</a><br><br></h5>
            </div>
            <div class="col-12 col-md-6 col-lg-4" style="margin: auto;">
                <h5>© 2024 BTS SN IR <br> <br> Théo Della-Pietra <br> Mohamed Laddel</h5>
            </div>
        </div>
    </footer>
</body>
</html>
