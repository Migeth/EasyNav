const http= require('http');

const port = 3000;

const server = http.createServer((req,res) =>{
  res.statusCode =200;
  res.setHeader('Content-Type' ,'text/plain');
  res.end(<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>EasyNav | Homepage</title>
<?php include("header.php") ?>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
<?php include("nav.php") ?>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">EasyNav : La solution pour une navigation rapide et intelligente.</h1>
				<p class="text-white mb-5"></p>
				<a href="FAQ.php" class="btn btn-main-md">COMMENCER</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="images/navigation.png" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-user text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Profil</h3>
					<p class="regular text-muted">Créez votre profil et gérez votre espace .</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-location-pin text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Itineraire</h3>
					<p class="regular text-muted">Faites vos recherches, gardez vos historiques sur votre profil et la
						sélection sur vos favoris </p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-layout-grid4-alt text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Service IA</h3>
					<p class="regular text-muted">Notre IA s'occupe d'analyser vos recherches et utilise les données du
						traffic en temps réel.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid" src="images/problematique.png" alt="ipad">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>La Problématique</h2>
					<!-- Testimonial Quote -->
					<div class="testimonial">
						<p>
							Comment me rendre à une adresse avec un temps de trajet optimisé ? <br>
							Comment organiser mon trajet sachant que j’ai deux stops à faire pour certaines raisons ?
						</p>
					</div>
					<!-- Feature Description -->
					<p>En voulant organiser nos trajets, nous avons des questions qui nous viennent sur la durée de ces
						derniers car nous avons pas dans l’immédiat des infos sur le trafic. Nous savons pas comment
						organiser nos trajets car nous avons des fois plusieurs destinations.</p>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>La solution qu'apporte
						<a style="color: #2e7eed" href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">EasyNav</a>
					</h2>
					<!-- Feature Description -->

					<p class="desc"><b>EasyNav</b> nous aide à résoudre nos problèmes de timing et/ou d’organisation de nos trajets.</p>
					<p class="desc">Nous implémentons des modules nous permettant proposer à l’utilisateur d’avoir un itinéraire
						rapide basée sur des infos du trafic et sur toutes les adresses souhaitées</p>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="images/solution.png" alt="iphone">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<section class="service section bg-gray">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Une interface de navigation simple à utiliser</h2>
					<p>EasyNav nous aide avec quelques cliques à faire nos recherches.</p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 align-self-center">
				<!-- Feature Image -->
				<div class="service-thumb left" data-aos="fade-right">
					<img class="img-fluid" src="images/feature/iphone-ipad.jpg" alt="iphone-ipad">
				</div>
			</div>
			<div class="col-lg-5 mr-auto align-self-center">
				<div class="service-box">
					<div class="row align-items-center">
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-home"></i>
								<!-- Heading -->
								<h3>Acceuil</h3>
								<!-- Description -->
								<p>La page vous permettant de visualiser votre profil et vos récentes recherches.</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-map-alt"></i>
								<!-- Heading -->
								<h3>Itinéraire</h3>
								<!-- Description -->
								<p>La page qui vous permet de faire vos recherches d'itinéraires en affichant votre résultat sur une carte.</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-star"></i>
								<!-- Heading -->
								<h3>Favoris</h3>
								<!-- Description -->
								<p>Besoin d'avoir un oeil sur vos adresses favoris ? Cette page vous montre tous vos adresses favoris.</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-layout-list-post"></i>
								<!-- Heading -->
								<h3>Historique</h3>
								<!-- Description -->
								<p>Quelles ont été vos récentes recherches ? Voici la page qui vous permet de les visualiser.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
<!--<section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					&lt;!&ndash; Heading &ndash;&gt;
					<h2>Watch Our Promo Video</h2>
					&lt;!&ndash; Promotional Speech &ndash;&gt;
					<p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et,
						porttitor at sem. Vivamus </p>
					&lt;!&ndash; Popup Video &ndash;&gt;
					<a data-fancybox href="https://www.youtube.com/watch?v=jrkvirglgaQ">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>-->
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->
<!--
<section class="section testimonial" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				&lt;!&ndash; Testimonial Slider &ndash;&gt;
				<div class="testimonial-slider owl-carousel owl-theme">
					&lt;!&ndash; Testimonial 01 &ndash;&gt;
					<div class="item">
						<div class="block shadow">
							&lt;!&ndash; Speech &ndash;&gt;
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							&lt;!&ndash; Person Thumb &ndash;&gt;
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							&lt;!&ndash; Name and Company &ndash;&gt;
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					&lt;!&ndash; Testimonial 01 &ndash;&gt;
					<div class="item">
						<div class="block shadow">
							&lt;!&ndash; Speech &ndash;&gt;
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							&lt;!&ndash; Person Thumb &ndash;&gt;
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							&lt;!&ndash; Name and Company &ndash;&gt;
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					&lt;!&ndash; Testimonial 01 &ndash;&gt;
					<div class="item">
						<div class="block shadow">
							&lt;!&ndash; Speech &ndash;&gt;
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							&lt;!&ndash; Person Thumb &ndash;&gt;
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							&lt;!&ndash; Name and Company &ndash;&gt;
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					&lt;!&ndash; Testimonial 01 &ndash;&gt;
					<div class="item">
						<div class="block shadow">
							&lt;!&ndash; Speech &ndash;&gt;
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							&lt;!&ndash; Person Thumb &ndash;&gt;
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							&lt;!&ndash; Name and Company &ndash;&gt;
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->
<!--====  End of Testimonial  ====-->

<section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Il est temps de commencer par naviguer avec simplicité</h2>
				<p>Tout commence simplement avec un enregistrement.
					<br>Allons-y.</p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="sign-in.php" class="btn btn-rounded-icon">
							<i class="ti-mouse-alt"></i>
							Cliquez ICI
						</a>
					</li>
				</ul>
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

</html>);
});

server.listen(port, () => {
  console.log('Server running at http://localhost:${port}:');
});
