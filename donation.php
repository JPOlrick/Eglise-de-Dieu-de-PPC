
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
			 include('header.php');?>

			<div role="main" class="main">
                			 
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