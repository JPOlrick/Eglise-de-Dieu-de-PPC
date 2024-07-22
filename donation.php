
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
		<?php include('header.php');?>

			<div role="main" class="main">
			
			
			
<section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
					<div class="container">
						<div class="row my-4">
							<div class="col-md-12 align-self-center text-center">
								<h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">Faire un Don </h1>
								<h5 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">MERCI DE SOUTENIR NOTRE MINISTÈRE</h5>
							</div>
						</div>
					</div>
				</section>

		 
				
				
				
				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<h2 class="font-weight-bold"> </h2>
								<article class="thumb-info custom-thumb-info custom-box-shadow" style="padding:10px;">
									 
									 
										 	<form class="contact-form" action="#" method="POST"  enctype="multipart/form-data">
							 

								 

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<span style="color:red;"> <strong> <?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></strong> </span>
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Nom </label>
										<input type="text" value="" data-msg-required="Veuillez saisir votre nom." maxlength="100" class="form-control text-3 h-auto py-2" name="nom" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Prenom</label>
										<input type="text" value="" data-msg-required="Veuillez saisir votre prenom."  maxlength="100" class="form-control text-3 h-auto py-2" name="prenom" required>
									</div>
									
								 
									
								</div>
								 
								
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Adresse électronique</label>
										<input type="email" value="" data-msg-required="Veuillez saisir votre adresse électronique." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group col">
								<label for="type ">
								Type don
								 </label>
								</BR>
								<select name="type" class="form-control"  data-msg-required="Veuillez saisir le type."   required>
											<option value="">-  Sélectionner - </option>
											<option value="" name="don"> Dimes </option>
											<option value="" name="don"> Don </option>
											<option value="" name="don"> Construction du Tabernacle </option>
											<option value="" name="don"> Offrande ordinaire </option>
 											<option value="" name="don"> Offrande Necessite </option>
											
								</select>
									</div>
								</div>
								
									<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Devise</label></br>
										<span style="margin-right: 50px">US <input type="radio" value="Dollars" data-msg-required="Veuillez saisir votre devise."    name="devise" required  ></span>
										<span >Gourdes <input type="radio" value="Dollars" data-msg-required="Veuillez saisir votre devise."    name="devise" required></span>
										<span style="margin-left: 50px">Euro <input type="radio" value="Dollars" data-msg-required="Veuillez saisir votre devise."    name="devise" required></span>


									</div>
								</div>
								
								
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Montant</label></br>
										<input type="number" value="" data-msg-required="Veuillez saisir votre montant."    name="montant" required>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Veuillez saisir votre message." rows="8" class="form-control text-3 h-auto py-2" name="description" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="submit" value="Suivant" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>
											  
										 
									 
								</article>
							</div>
							<div class="col-lg-6">
								<h2 class="font-weight-bold">Faire un don</h2>
								<article class="custom-post-event">
									<p align="justify"> <b>L’église de Dieu de Petite Place Cazeau</b> tient à vous exprimer des très vifs remerciements pour votre collaboration et soutien financier. 
								   Afin de relever les défis afférents à la réalisation des projets du temple de Dieu et sa gestion quotidienne. 
								   </p>
								 
								<p align="center"> 
								Nous vous encourageons à soutenir notre ministère selon la parole de Dieu;  </br> </br>


<b><u>1 Timothée 5:18</u></b> </br> 

<span> " Car l'Ecriture dit : Tu n'emmuselleras point le boeuf quand il foule le grain. Et l'ouvrier mérite son salaire. " </span>

</br></br>

<b><u>Malachie 3:10</u></b>  </br> 
 " Apportez à la maison du trésor toutes les dîmes, Afin qu'il y ait de la nourriture dans ma maison; 
Mettez-moi de la sorte à l'épreuve, Dit l'Eternel des armées. Et vous verrez si je n'ouvre pas pour vous
 les écluses des cieux, Si je ne répands pas sur vous la bénédiction en abondance. " </br></br> 

<b><u>Galates 6 : 6 </u></b> </br>

 " Que celui à qui l'enseigne la parole fait partie de tous ses biens à celui qui l'enseigne. "
								
								
								</p>
								 
								</article>
								<hr class="solid">
								 
						</div>
					</div>
				</section>
			
                			 
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