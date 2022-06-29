<!DOCTYPE html>
<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=primo_pres;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&family=Noto+Sans:wght@800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">



</head>
  <body style="background-color:#363636;">
    <!--header-->
    <?php include 'header.php'; ?>
    <!--header-->
      <div class="container">
      <div class="Proposition">
        <h4>Proposition de Projet</h4>
        <h1>Demande de Devis </h1>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
             <div class="card-body">
               <i class="icon fas fa-envelope-open-text fa-3x" ></i>
                  <h5 class="card-title">Adresse Mail</h5>
               <p class="card-text">azery@primopres.com.<br>azery@primopres.com.</p>
             </div>
           </div>
             <div class="card">
                <div class="card-body">
                  <i class="icon fas fa-phone fa-3x" ></i>
                    <h5 class="card-title">Telephone  </h5>
                    <p class="card-text">+221 77 000 00 00.<br>+221 33 957 00 00.</p>
                </div>
              </div>

        </div>
        <div class="col-lg-8">
          <form action="mail.php" method="POST" >
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="https://diattara1.github.io/primo/index.php">
            <input type="text" class="formulaire" placeholder="Prenom*" name="prenom" required>
          <input type="text" class="formulaire" placeholder="Nom*" name="nom" required>
          <br>
          <input type="number" class="formulaire" placeholder="Numero*" name="numero" required>
          <input type="email" id="email" class="formulaire" placeholder="adresse Mail*" name="email" required>

          <textarea id="msg"name="message" class="formulaire" placeholder="Message" rows="5" cols="100" required></textarea>
          <button type="submit" name="submit" value="submit" >Envoyer</button>
  </form>
  <?php
  if(isset($_POST['submit'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $numero = htmlspecialchars($_POST['numero']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
              $ins = $db->prepare("INSERT INTO users (prenom,nom,numero,email,message) VALUES (:prenom,:nom,:numero,:email,:message)");
              $ins->execute([
								'prenom'=>$prenom,
								'nom'=>$nom,
								'numero'=>$numero,
								'email'=>$email,
								'message'=>$message
							]);
           }

  ?>

</div>


         <!--footer-->
<?php include"footer.php" ?>
  <!--footer-->

      </div>
    </div>


  </body>

</html>
