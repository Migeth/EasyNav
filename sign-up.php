<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Basic Page Needs
      ================================================== -->
   <meta charset="utf-8">
    <title>EasyNav | Enregitrement </title>
  
    <?php include("header.php") ?>


<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

<!--=============================
=            Sign Up            =
==============================-->

<?php

include("dbinfo.inc.php");

if (!empty($_POST)){


        //le formulaire à été envoyer 
   //POST n'est pas vide, on vérifie que toutes les données sont présentes
        if( isset($_POST["NamePrenom"],$_POST["Email"],$_POST["password"])

       && !empty($_POST["NamePrenom"]) && !empty($_POST["Email"]) && !empty($_POST["password"])
   ){
        //on recupere les donnéees en les protégeant
           $NamePrenom = $_POST["NamePrenom"];
           $Email= $_POST["Email"];
           $password = $_POST["password"];

           if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){
                die("adresse email est incorrecte");
           }

           //on peut les enregistrer
           //on se connecte a la base
//          include "dbinfo.inc.php";             

           // on ecrit la requete

          $sql = "INSERT INTO `USERS`(`NamePrenom`, `Email`, `password`) VALUES (:NamePrenom,:Email,:password)";

           //On prépare la requete
        $query= $db->prepare($sql);

//on injecte les valeurs

       $query->bindValue(':NamePrenom', $NamePrenom,PDO::PARAM_STR );
       $query->bindValue(':Email', $Email,PDO::PARAM_STR);
       $query->bindValue(':password', $password,PDO::PARAM_STR);

           //on éxcute la requete
       $query->execute();


     //      if(!$query->execute()){
       //        die("une erreur est survenue");
         //  }
           //    die("utilisateur ajouté");

   }else{
           die("Le formulaire est incomplet");

                //on récupere l'id
         $id = $db->lastInsertId();

        session_start();

                //On stocke dans $_Session les informations de l'utilisateur
        $_SESSION["user"] = [
                "id" => $id,
                "pseudo" => $NamePrenom,
                "email" => $Email,
                "pass" => $password

        ];

        //on redige vers la page index.php

        header("Location: app/dist/index.php");



   }



}

?>
	
	<section class="user-login section">
        <div class="container">
                <div class="row">
                        <div class="col-12">
                                <div class="block">
                                        <!-- Image -->
                                        <div class="image align-self-center"><img class="img-fluid" src="images/Login/sign-up.jpg" alt="desk-image">
                                        </div>
                                        <!-- Content -->
                                        <div class="content text-center">
                                                <div class="logo">
                                                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                                                </div>
                                                <div class="title-text">
                                                        <h3>S'enregistrer pour un nouveau compte</h3>
                                                </div>
                                                <form action ="sign-up.php" method= "POST">

<div>

<label for="NamePrenom">Pseudo</label>                                                  <!-- Username -->
                                                <input class="form-control main" type="text" name="NamePrenom" id="NamePrenom">
</div>
<div>
<label for="Email">Email</label>

                                                        <!-- Email -->
                                                        <input class="form-control main" type="email" name="Email" id="Email">
</div>
<div>
<label for="password">Mot de passe </label>
	
	 <!-- Password -->
                                                        <input class="form-control main" type="password" name="password" id="password">
</div>
                                                        <!-- Submit Button -->
                                                        <button type="submit">S'ENREGISTRER</button>
                                                </form>
                                                <div class="new-acount">
                                                        <p>En cliqauant sur “S'ENREGISTRER” j'accepte les <a href="privacy-policy.php">Conditions d'utilisation.</a></p>
                                                        <p>Déjà membre? <a href="sign-in.php">SE CONNECTER</a></p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!--====  End of Sign Up  ====-->


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>

<?php include "footer_script.php"; ?>
</body>

</html>


	
	
	
