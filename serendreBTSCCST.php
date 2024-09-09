<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Se rendre au BTS CCST</title> <!-- Titre de page -->
    <link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- Lien vers la feuille de style BOOTSTRAP -->
    <link rel="stylesheet" href="css/index_slide.css" /> <!-- Lien vers la feuille de style du site -->
    <link rel="stylesheet" href="css/erromessage.css" />
</head>
<body>
  <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$message_erreur = "";
$page_origine = "serendreBTSCCST.php?idpage=FH1uaC9";
if (isset($_GET["idpage"])) {
    $idpage = $_GET["idpage"];
    $url = $_SERVER['REQUEST_URI'];
    $erreur = "Erreur : Vous ne pouvez pas modifier L'url";
    $controle = "/serendreBTSCCST.php?idpage=FH1uaC9"; // Notez l'ajout du slash pour la comparaison correcte du chemin
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
        <a href="../PG_ADMIN/index.html" class="btn btn-dark float-right" ><img src="../images/logo_connexion2.png" width="30" height="30" alt=""></a> 
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid" style="margin-top: 20px;">
      <div class="text-center">
        <br>
        <h3>Comment se rendre a la formation :</h3>
        <br>
        <h4> BTS CCST </h4>
      </div>
      <br>
      <br>
      <section class="row"> <!-- les trois éléments suivant seront répartis en rang [ELEM 1; ELEM 2; ELEM 3;]  -->
        <div class="col-0 col-md-0 col-lg-1"> <!--ELEM 1 PREND 1 Colone lors ce que le ratio écran est 16/9, sinon rien  -->
          <section>

          </section>
        </div>
        <div class="slider col-12 col-md-12 col-lg-10" id="slider"> <!--ELEM 2 PREND 10 Colones lors ce que le ratio écran est 16/9, sinon toute la largeur dispo | SLIDER D'IMAGES -->
          <section class="d-flex justify-content-center"> <!-- Aligner les éléments suivant au centre -->
            <img src="images/Orientation/GIFS/ORIENTATION_DEBUT_COMMUN.gif" class="active img-fluid slider-image" id="images" alt="responsive-image"> <!--class active permet l'affichage -->
            <img src="images/Orientation/GIFS/Orientation_CCST_1.gif" class="img-fluid slider-image" id="image" alt="responsive-image">
            <img src="images/Orientation/GIFS/Orientation_CCST_2.gif" class="img-fluid slider-image" id="image" alt="responsive-image">
            <img src="images/Orientation/GIFS/Orientation_CCST_3.gif" class="img-fluid slider-image" id="image" alt="responsive-image">
            <img src="images/Orientation/GIFS/Orientation_CCST_4.gif" class="img-fluid slider-image" id="image" alt="responsive-image">
            <img src="images/Orientation/GIFS/Orientation_CCST_5.gif" class="img-fluid slider-image" id="image" alt="responsive-image">
            <img src="images/Orientation/GIFS/Orientation_CCST_6.gif" class="img-fluid slider-image" id="image" alt="responsive-image">
            <img src="images/Orientation/GIFS/Orientation_CCST_7.gif" class="img-fluid slider-image" id="image" alt="responsive-image">
            <button type="button" class="btn btn-light hidden w-100 btn-custom" id="arrived" style="border: 2px solid black; border-radius: 10px; margin-bottom: 10px;">
            <a class="h3 text-dark d-block" href="btsCCST.php?idpage=FH1uaC9">Cliquez ici pour confirmer votre présence</a>
            </button> <!-- Bouton en fin de slider -->
          </section>
        </div>
        <div class="col-0 col-md-0 col-lg-1"> <!-- !--ELEM 3 PREND 1 Colone lors ce que le ratio écran est 16/9, sinon rien  -->
          <section>

          </section>
        </div>
      </div>
      <section class="row"> <!-- les trois éléments suivant seront répartis en rang [ELEM 1; ELEM 2; ELEM 3;]  -->
        <div class="col-0 col-md-0 col-lg-1">   <!--ELEM 1 PREND 1 Colone lors ce que le ratio écran est 16/9, sinon rien  -->
          <section>

          </section>
        </div>
        <div class="col-12 col-md-12 col-lg-10">  <!--ELEM 2 PREND 10 Colones lors ce que le ratio écran est 16/9, sinon toute la largeur dispo  -->
          <section class="container">
            <div class="cont-btn" style="margin: 0 10px;"> <!-- Touches de navigations pour le slider -->
              <div class="btn-nav left nav-image"><img src="images/slider_lefbutton.png" class="img-fluid "></div> 
              <div class="btn-nav right nav-image"><img src="images/slider_Rightbutton.png" class="img-fluid"></div>
            </div>
          </section>
        </div>
        <div class="col-0 col-md-0 col-lg-1">  <!--ELEM 3 PREND 1 Colone lors ce que le ratio écran est 16/9, sinon rien  -->
          <section>

          </section>
        </div>
      </section>
      <br>
      <div class="text-center" style="margin: auto;"> <!--- Création d'une section pour le bouton je suis perdu  -->
        <div class="d-flex justify-content-center">
          <br>
          <button 
          type="button" 
          class="btn btn-dark" 
          id="loosed" style="border: 2px solid black; margin-top: 2%; margin-bottom: 5%;  border-radius: 10px; max-width: 80%;">
            <a class="text-light" href="tel: 04 91 14 32 80">
              <h5>Je suis perdu</h5>
            </a>
          </button> <!-- BOUTON JE SUIS PERDU -->
        </div>
      </div>
    </div> 
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
  <script src="js/slide.js"></script> <!-- Lien vers le fichier JS permettant le fonctionement du slider  -->
  <?php endif; ?>
</body>
</html>