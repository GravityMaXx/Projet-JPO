<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lycée Rempart</title> 
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark justify-content-center" style="box-shadow: 0 5px 5px rgba(0, 0, 0, .6) ;">
      <a class="navbar-brand text" href="#">
        <img src="../images/logo-lycée.png" width="60" height="60" class="d-inline-block align-top" alt="logo lycée Rempart">
      </a>
      <h2 class="navbar-brand text" style="color: white;">Lycée Rempart</h2>
    </nav>
  </header>
  <section class="container my-4">
    <div class="text-center mb-4">
      <h2>Laissez votre avis !</h2>
    </div>
    <form action="contact.php" method="post">
      <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" id="name" name="name" required placeholder="Exeple : Dupont">
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Exemple : email@gmail.com">
      </div>
      <div class="form-group">
        <label for="formation">Formation suivie :</label>
        <select class="form-control" id="formation" name="formation" required>
          <option value="BTS CIEL">BTS CIEL</option>
          <option value="BTS ATI">BTS ATI</option>
          <option value="BTS CCST">BTS CCST</option>
          <option value="BTS CRSA">BTS CRSA</option>
        </select>
      </div>
      <div class="form-group">
        <label for="note">Quel à été votre expérience (Orientation, Présentation, La formation)</label>
        <input type="range" class="form-control" id="note" name="note" value="5" min="0" max="10" step="1" required oninput="result.value=note.value">
        <h3 class="text-center"><output for="out" name="result"></output></h3>
        <div class="row" style="justify-content: space-between;">
          <h4>0</h4>          <h4>10</h4>
        </div>
        </fieldset>
        </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="contact" name="contact">
        <label class="form-check-label" for="contact">Je souhaite être recontacté par e-mail</label>
      </div>
      <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" id="message" name="message" placeholder="Dites nous en plus sur votre expérience (si vous voulez bien sur)"></textarea>
      </div>
      <button type="submit" name="Envoyer" class="btn btn-dark">Envoyer</button>
    </form>
  </section>
  <section>
    <br>
  <h3 class="text-center">  <?php
$serveur = "localhost";
$utilisateur = "qayvsgqu_visiteur";
$motdepasse = "VisiteBTS_2024";
$info = "Merci d'avoir donné votre avis !";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Envoyer'])) { // Vérifie si le formulaire est soumis
    
    $nomprenomm = $_POST['name']; 
    $mail = $_POST['email']; 
    $formation = $_POST['formation']; 
    $note = $_POST['note']; 
    $contact = isset($_POST['contact']) ? 1 : 0; // Si la case est cochée, la valeur est 1, sinon 0
    $message = $_POST['message']; 

    try {
        $bdd = new PDO("mysql:host=$serveur;dbname=qayvsgqu_AVIS", $utilisateur, $motdepasse);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sth = $bdd->prepare("
        INSERT INTO AVIS_SITEWEB(NOM_PRENOM,EMAIL,FORMATION,NOTE,CONTACT,MESSAGE)
        VALUES (:nomprenomm, :mail, :formation, :note, :contact, :message)
        ");

        $sth->bindValue(':nomprenomm', $nomprenomm);
        $sth->bindValue(':mail', $mail);
        $sth->bindValue(':formation', $formation);
        $sth->bindValue(':note', $note);
        $sth->bindValue(':contact', $contact);
        $sth->bindValue(':message', $message);
        $sth->execute();
        echo $info;
    } catch(PDOException $e) {
        echo "Erreur : ".$e->getMessage();
    }

}
?></h3>
<br>
  </section>
  <footer class="text-center text-lg-start text-white"  style="background-color: black; padding: 1%; flex-direction: row;">  <!-- Pied de PAGE -->
    <div class="row"> <!-- Affichage en rang -->
        <div class="col-12 col-md-6 col-lg-4" style="margin: auto;"> <!-- prend 1/3 de l'écran en plein format se range a la verticale au fromat smartphone -->
          <img src="../images/logo-ac-aixmarseille.jpg" style="max-width: 60%;" class="d-inline-block align-top" alt="">
        </div>
        <div class="col-12 col-md-6 col-lg-4" style="margin: auto;"> <!-- prend 1/3 de l'écran en plein format se range a la verticale au fromat smartphone -->
          <h5>Lycée <br> Polyvalent Rempart-Vinci <br> <br> 1 Rue de Rempart <br> 13007 Marseille <br> <a style="color: white;" href="tel:"><h5>04 91 14 32 80</h5></a><br><a style="color: white;" href="https://www.site.ac-aix-marseille.fr/lyc-rempart/spip/">Accès au site</a><br><br></h5>
        </div>
        <div class="col-12 col-md-6 col-lg-4" style="margin: auto;"> <!-- prend 1/3 de l'écran en plein format se range a la verticale au fromat smartphone -->
          <h5>© 2024 BTS SN IR <br> <br> Théo Della-Pietra <br> Mohamed Laddel</h5>
        </div>
    </div>
  </footer>
</body>
</html>