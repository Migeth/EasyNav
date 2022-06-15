
<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Basic Page Needs
      ================================================== -->
	<meta charset="utf-8">
	<title>EasyNav | A propos</title>
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
				<h1>À propos de EasyNav</h1>
				<!-- Page Description -->
                <p><b>EasyNav</b> nous aide à résoudre nos problèmes de timing et/ou d’organisation de nos trajets.<br>
                    Nous implémentons des modules nous permettant proposer à l’utilisateur d’avoir un itinéraire rapide basée sur des infos du trafic et sur toutes les adresses souhaitées.
                </p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--===============================
=            Our Story            =
================================-->
<section class="section about p-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="content text-center text-lg-left">
					<!-- Headline -->
					<h2>Notre histoire.</h2>
					<!-- Story -->
					<p>Afin de mettre en valeur nos compétences acquises lors de notre formation, le module Projet Annuel nous fait face à une thématique sur le transport.
                        Dans les prochains slides, vous découvrirez ce que notre équipe composée de trois membres a décidé de mettre en place.
                    </p>
				</div>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<!-- Story Image Slider -->
				<div class="about-slider">
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Our Story  ====-->

<!--================================
=            Behind Story          =
=================================-->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title mb-0">
					<h2>Pourquoi avions nous développé EasyNav ?</h2>
					<p>Comment me rendre à une adresse avec un temps de trajet optimisé ? Comment organiser mon trajet sachant que j’ai deux stops à faire pour certaines raisons ?<br>
                        En voulant organiser nos trajets, nous avons des questions qui nous viennent sur la durée de ces derniers car nous avons pas dans l’immédiat des infos sur le trafic. Nous savons pas comment organiser nos trajets car nous avons des fois plusieurs destinations.
                    </p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--=====================================
=            Quotes Slider              =
======================================-->
<section class="section quotes pt-0">
	<div class="container">
		<div class="row">
			<div class="col-10 m-auto text-center">
				<div class="quote-slider">
					<div class="item mb-4">
						<!-- Quote -->
						<h2>Behind every great product, there is a great mind.</h2>
						<!-- Company -->
						<cite class="ml-0">-TechCrunch</cite>
					</div>
					<div class="item mb-4">
						<!-- Quote -->
						<h2>Behind every great product, there is a great mind.</h2>
						<!-- Company -->
						<cite class="ml-0">-TechCrunch</cite>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Quotes Slider  ====-->


<!--==============================
=              Team              =
===============================-->
<section class="section investors">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Notre équipe</h2>
					<p>Etudiants en 4ième année de Big Data et d'Intelligence Artificielle, nous sommes prêts à vous proposer une solution de navigation basée notre algorithme. </p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-sm-4">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/marketing-team-01.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Ryad BELKACEMI</h3>
					<!--  -->
					<p>4IABD</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/marketing-team-02.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Sarah NAIT ABDALLAH</h3>
					<!--  -->
					<p>4IABD</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/marketing-team-03.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Seth MIGAN</h3>
					<!--  -->
					<p>4IABD</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--=====================================
=            Section comment            =
======================================-->

<section class="section cta-hire bg-gary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- Hire Title -->
				<h2>Nous serons ravis de vous voir utiliser notre application</h2>
				<!-- Job Description -->
				<h4>Commencez par vous connecter ;)</h4>
				<!-- Action Button -->
				<a href="sign-in.php" class="mt-3 btn btn-main-md">Se connecter</a>
			</div>
		</div>
	</div>
</section>

<!--====  End of Section comment  ====-->


<!--============================
=            Footer            =
=============================-->

<?php include "footer.php"; ?>
<?php include "footer_script.php"; ?>
</body>

</html>