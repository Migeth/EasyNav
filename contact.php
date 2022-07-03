
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>EasyNav | Contact</title>
    <?php include("header.php") ?>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
<?php include("nav.php") ?>

<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h1>Contactez-nous</h1>
				<!-- Page Description -->
				<p>Notre équipe est toujours disposée à vous assiter au besoin.</p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--=====================================
=            Address and Map            =
======================================-->
<section class="address">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 align-self-center">
				<div class="block">
					<div class="address-block text-center mb-5">
						<div class="icon">
							<i class="ti-mobile"></i>
						</div>
						<div class="details">
							<h3>(+33) 06 00 00 00 (FRANCE)</h3>
							<h3>contact@easynav.com</h3>
						</div>
					</div>
					<div class="address-block text-center">
						<div class="icon">
							<i class="ti-map-alt"></i>
						</div>
						<div class="details">
							<h3>36. St Michael’s St, Oxford OX1, UK</h3>
							<h3>123, Pennsylvania, USA</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 mt-5 mt-lg-0">
				<div class="google-map">
					<!-- Google Map -->
					<div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Address and Map  ====-->
<section class="contact-form section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5 text-center">Laissez nous un mail</h2>
			</div>
			<div class="col-12">
				<form action="">
					<div class="row">
						<!-- Name -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="text" placeholder="Nom et Prénom" required>
						</div>
						<!-- Email -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="email" placeholder="Adresse mail" required>
						</div>
						<!-- subject -->
						<div class="col-md-12 mb-2">
							<input class="form-control main" type="text" placeholder="Sujet" required>
						</div>
						<!-- Message -->
						<div class="col-md-12 mb-2">
							<textarea class="form-control main" name="message" rows="10" placeholder="Votre message"></textarea>
						</div>
						<!-- Submit Button -->
						<div class="col-12 text-right">
							<button class="btn btn-main-md">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->
<?php include "footer.php"; ?>
<?php include "footer_script.php"; ?>

</body>

</html>