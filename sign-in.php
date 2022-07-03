<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <?php include("header.php") ?>
    <title>EasyNav | Connexion</title>
</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


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
						<form action="#">
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Nom d'utilisateur" required>
							<!-- Password -->
							<input class="form-control main" type="password" placeholder="Mot de passe" required>
							<!-- Submit Button -->
							<a href="app/dist/index.php" class="btn btn-main-sm">SE CONNECTER</a>
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
