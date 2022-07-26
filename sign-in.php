
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <?php include("header.php") ?>
    <title>EasyNav | Connexion</title>
</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<?php
  include("dbinfo.inc.php");

if(!empty($_POST)){

        //le formulaire à été envoyer 
   //POST n'est pas vide, on vérifie que toutes les données sont présentes
        if( isset($_POST["Email"],$_POST["password"])

       && !empty($_POST["Email"]) && !empty($_POST["password"])
   ){


    //on recupere les donnéees en les protégeant

           $Email= $_POST["Email"];
           $password = $_POST["password"];


           //on peut les enregistrer
           //on se connecte a la base
//          include "dbinfo.inc.php";             

           // on ecrit la requete

          $sql = "SELECT `Email`, `password` FROM `USERS` WHERE `Email`= :Email AND `password`= :password ";

           //On prépare la requete
        $query= $db->prepare($sql);

           //on injecte les valeurs


       $query->bindValue(':Email', $Email,PDO::PARAM_STR);
       $query->bindValue(':password', $password,PDO::PARAM_STR);

//on éxcute la requete

        $query->execute();
        $user = $query->fetch();

        if(!$user){

        die("l'utilisateur et/ou le mot de passe est incorrect");
        }


        session_start();

                //On stocke dans $_Session les informations de l'utilisateur
        $_SESSION["user"] = [
                "id" => $user["idU"],
                "pseudo" => $user["NamePrenom"],
                "email" => $user["Email"],
                "pass" => $user["password"]

        ];

//var_dump($_SESSION);



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
                                        <div class="image align-self-center"><img class="img-fluid" src="images/Login/front-desk-sign-in.jpg"
                                                        alt="desk-image"></div>
                                        <!-- Content -->

                                        <div class="content text-center">
                                                <div class="logo">
                                                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                                                </div>
                                                <div class="title-text">
                                                        <h3>Connectez-vous à votre compte</h3>
                                                </div>
                                                <form  method ="post">
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
                                                        <button  class="btn btn-main-sm" type ="submit">SE CONNECTER</button>
                                                </form>
                                                <div class="new-acount">
                                                        <a href="contact.php">Mot de passe oublié ?</a>
                                                        <p>Don't Have an account? <a href="sign-up.php"> S'ENREGISTRER</a></p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>


<?php include "footer_script.php"; ?>
</body>

</html>



