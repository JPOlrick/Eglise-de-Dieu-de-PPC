
<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': false, 'showBackgroundColor': false, 'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#da7940', 'colorSecondary': '#312227', 'colorTertiary': '#efece8', 'colorQuaternary': '#101019'}">
	<head>
		
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>EDPPC | Église de Dieu de Petite Place Cazeau</title>	

		<meta name="keywords" content="EDPPC" />
		<meta name="description" content="Église de Dieu de Petite Place Cazeau">
		<meta name="author" content="EDPPC">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/icon_edppc.ico" type="" />
		<!-- <link rel="apple-touch-icon" href="img/apple-touch-icon.png"> -->

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400,400i,700%7CSintony:400,700,800&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">		<link rel="stylesheet" href="vendor/animate/animate.compat.css">		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Demo CSS -->		<link rel="stylesheet" href="css/demos/demo-church.css">

		<!-- Skin CSS -->		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-church.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-11"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-42715764-11');
		</script>
        <style>
			.map-container {
			  position: relative;
			  width: 100%;
			  height: 0;
			  padding-bottom: 36%; /* 16:9 aspect ratio */
			}
			.map-container iframe {
			  position: absolute;
			  top: 0;
			  left: 0;
			  width: 100%;
			  height: 100%;
			  border: 0;
			}
		  </style>
            <script>
                function initMap() {
                const location = { lat: 18.5392, lng: -72.3364 }; // Coordonnées pour "1 angle rue Saint Pierre et camep, petite place cazeau HT 6124 Delmas, Haiti"
                const map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: location
                });
                const marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                }
            </script>

	</head>
	<body>

		<div class="body">
		<?php
			$current_page ='contacteznous.php';
			 include('header.php');?>

			<div role="main" class="main">
                <section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
					<div class="container">
						<div class="row my-4">
							<div class="col-md-12 align-self-center text-center">
								<h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">Contactez-nous</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row py-4">
						<div class="col-lg-6">

							<h2 class="font-weight-bold text-8 mt-2 mb-0">Écrivez-nous</h2>
							<p class="mb-4">Nous serions ravis d'entendre vos commentaires, questions ou suggestions.</br>Veuillez remplir le formulaire ci-dessous pour nous envoyer un message.</p>

							<form class="contact-form" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Succès !</strong> Votre message nous a été envoyé.
								</div> 

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Erreur !</strong> Une erreur s'est produite lors de l'envoi de votre message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Nom complet</label>
										<input type="text" value="" data-msg-required="Veuillez saisir votre nom." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Adresse électronique</label>
										<input type="email" value="" data-msg-required="Veuillez saisir votre adresse électronique." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Sujet</label>
										<input type="text" value="" data-msg-required="Veuillez saisir le sujet." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Veuillez saisir votre message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="submit" value="Envoyer le message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-6">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Notre <strong>Église</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Adresse :</strong> 1, rue Saint Pierre, Petite Place Cazeau, Delmas 33, Haiti</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Téléphone:</strong> <a href="tel:+50942132953"> +509 42 13 2953</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
								</ul>
							</div>
                            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                            <div id="map" class="google-map mt-2" style="height: 195px;">
                            <div class="map-container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.3494147603546!2d-72.28215942309667!3d18.558279382542732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e6526c49da91%3A0xcd1b8d57a709a801!2sEglise%20De%20Dieu%20De%20Petite%20Place%20Cazeau!5e0!3m2!1sen!2sus!4v1720633197075!5m2!1sen!2sus" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
                            </div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-1">Heures <strong>de bureau</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
									<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
								</ul>
							</div>

						</div>

					</div>

				</div>
			 
		</div>

		 <?php include('footer.php');?>

		<!-- Vendor -->		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/plugins/js/plugins.min.js"></script>		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-church.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

>

	</body>
</html>