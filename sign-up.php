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
						<form action="#">
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Nom et Prénom" required>
							<!-- Email -->
							<input class="form-control main" type="email" placeholder="Adresse Email" required>
							<!-- Password -->
							<input class="form-control main" type="password" placeholder="Mot de passe" required>
							<!-- Submit Button -->
							<button class="btn btn-main-md">S'ENREGISTRER</button>
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
