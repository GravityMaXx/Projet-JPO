<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>La Formation : BTS CIEL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/erromessage.css" />
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$message_erreur = "";
$page_origine = "btsCIEL.php?idpage=FH1uxrm";
if (isset($_GET["idpage"])) {
    $idpage = $_GET["idpage"];
    $url = $_SERVER['REQUEST_URI'];

    $erreur = "Erreur : Vous ne pouvez pas modifier L'url";
    $controle = "/btsCIEL.php?idpage=FH1uxrm"; // Notez l'ajout du slash pour la comparaison correcte du chemin
    if ($url != $controle) {
        $message_erreur = $erreur;
    }
} else {
    $message_erreur = "Paramètre Idpage non trouvé";
}
?>
<?php if ($message_erreur): ?>
    <div class="error-dialog text-center">
        <p><?php echo $message_erreur; ?></p>
        <button onclick="window.location.href='<?php echo $page_origine; ?>'">Retour à la page d'origine</button>
    </div>
<?php else: ?>
  <header class="">
    <nav class="navbar navbar-dark bg-dark justify-content-space-between" style="box-shadow: 0 5px 5px rgba(0, 0, 0, .6) ;">
      <div class="row">
        <a href="#"><img src="images/logo-lycée.png" width="60" height="60" class="d-inline-block" alt=""><h5 class="navbar-brand text text-light" style="margin-left: 10px;">Lycée Rempart</h5></a>
      </div>
      <div>
        <a href="ADMIN/index.html" class="btn btn-dark float-right" ><img src="images/logo_connexion2.png" width="30" height="30" alt=""></a>
      </div>
    </nav>
  </header>
  <main class="container-fluid" style="margin-top: 0px;">
    <div style="margin: 0; margin-bottom: 10px;">
        <div class="text-center" style="margin: 3%;">
            <h3> La formation : </h3>
            <br>
            <h4> BTS CIEL </h4>
        </div>  
        <section class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <h4 class="text-center text-dark" style="margin-top: 5%;">Témoignage d'un étudiant : </h4>
            <div class="embed-responsive embed-responsive-16by9" style="border: 5px solid black; border-radius:5px;  background-color: black; margin-top: 2%;">
              <iframe class="embed-responsive embed-responsive-16by9" width="70%" src="https://www.youtube.com/embed/-QVFTbHZIvk" title="Témoignage d&#39;étudiants de BTS SNIR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>Vidéo de témoignage</iframe>
            </div>
          </div>
            <br>
          <div class="col-12 col-md-12 col-lg-6">
            <h4 class="text-center text-dark" style="margin-top: 5%;">Présentation de la formation : </h4>
            <div class="embed-responsive embed-responsive-16by9" style="border: 5px solid black; border-radius:5px; background-color: black; margin-top: 2%; justify-content: center;">
              <iframe class="embed-responsive embed-responsive-16by9" width="70%" src="https://www.youtube.com/embed/AeKNfcjbjxA" title="HTML - Insérer une vidéo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>Vidéo de présentation</iframe>
            </div>
          </div>
        </section>
      </div>
      <br>
        <section class="row">
          <div class="col-1 col-md-2 col-lg-3">
            <section>
              <h3></h3>
            </section>
          </div>
          <div class="col-10 col-md-8 col-lg-6">
            <a class="btn btn-dark text-white btn-lg btn-block responsive-width" href="https://www.site.ac-aix-marseille.fr/lyc-rempart/spip/spip.php?article27" style="margin: 2%; box-shadow: 0 5px 5px rgba(0, 0, 0, 0.6) ;"><h5 class="h5">En savoir d'avantage</h5></a>
            <br>
            <a class="btn btn-light text-dart btn-lg btn-block responsive-width" href="php/avis.php" style="border: 1px solid rgb(63, 63, 63); margin: 2%; box-shadow: 0 5px 5px rgba(63, 63, 63, 0.6) ;"><h5 class="h5">Je donne mon avis</h5></a>
          </div>
          <div class="col-1 col-md-2 col-lg-3">
            <section>
              <h3></h3>
            </section>
          </div>
        </section>
      <br>
      <br>
  </main>
  <footer class="text-center text-lg-start text-white col-12 col col-md-12 col-lg-12" style="background-color: black; padding: 1%; margin:0; flex-direction: row;">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4" style="margin: auto;">
          <img src="images/logo-ac-aixmarseille.jpg" style="max-width: 60%;" class="d-inline-block align-top" alt="">
        </div>
        <div class="col-12 col-md-6 col-lg-4" style="margin: auto;">
          <h6>Lycée <br> Polyvalent Rempart-Vinci <br> <br> 1 Rue de Rempart <br> 13007 Marseille <br> <a style="color: white;" href="tel:"><h6>04 91 14 32 80</h6></a><br><a style="color: white;" href="https://www.site.ac-aix-marseille.fr/lyc-rempart/spip/">Site de l'établissement</a><br><br></h6>
        </div>
        <div class="col-12 col-md-6 col-lg-4" style="margin: auto;">
          <h5>2024 BTS SN IR <br> Théo Della-Pietra <br> Mohamed Laddel</h5>
        </div>
    </div>
  </footer>
  <?php endif; ?>
</body>
</html>