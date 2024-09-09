<?php
  $idpageCIEl="FH1uxrm";
  $idpageATI="FH1uZr4k";
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formations</title>
    <link rel="stylesheet" href="Borne.css" />
  </head>
  <body>
    <header style="display: block;">
      <nav class="" style="box-shadow: 0 5px 5px rgba(0, 0, 0, .6) ; display: flex; flex-direction: row; justify-content:end;">
        <div>
          <h5 style="margin-right: 10px; color: white;" >Accés administrateur</h5>
        </div>
        <div>
          <a href="../PG_ADMIN/index.html" class="btn btn-dark float-right" style="display: flex; flex-direction: row;"><img src="../images/logo_connexion2.png" width="30" height="30" alt=""></a>
        </div>
      </nav>
    </header>
    <div class="container">
        <div class="form-container">
          <h3 id="text_QRCODE"><big>Sélectionnez la formation de votre choix :</big></h3>
          <div class="content-container">
            <div id="qr-image-container">
              <img src="" alt="" id="qrImage" />
            </div>
            <div class="buttons-container">
                <button style="background-image: url(BTSCIEL.png);" ><a class="BTN_BTS_CIEL" href="serendreBTSCIEL.php?idpage=<?= urlencode($idpageCIEl);?>" style="color: white;"><input type="hidden" name="btn">BTS CIEL</a></button>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
