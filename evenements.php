<?php
include('include/config.php');
?> 


<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': false, 'showBackgroundColor': false, 'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#da7940', 'colorSecondary': '#312227', 'colorTertiary': '#efece8', 'colorQuaternary': '#101019'}">
	<head>
		
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>EDPPC | Évenement </title>	

			<meta name="keywords" content="EDPPC" />
		<meta name="description" content="Église de Dieu de Petite Place Cazeau">
		<meta name="author" content="EDPPC">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/icon_edppc.ico" type="" />
	 
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
			  padding-bottom: 30%; /* 16:9 aspect ratio */
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

	</head>
	<body>

		<div class="body">
		<?php
			$current_page = 'evenements.php';
			 include('header.php');?>

			<div role="main" class="main">
			
			

				<section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
					<div class="container">
						<div class="row my-4">
							<div class="col-md-12 align-self-center text-center">
								<h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">Événements</h1>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<h2 class="text-color-dark font-weight-bold">Prochain événement</h2>
								
								
								
								
											<?php
											$ret=mysqli_query($con," select `evenement_ID`, `evenement`, `Description`, image,
																		 lieu, `heure_evenemen`,  day(date_evenement) as jour ,
																			year(date_evenement) as anne ,
																			MONTH(`date_evenement`)  ,
																		CASE
																				 WHEN  MONTH(`date_evenement`) = 1 THEN 'Jan'
																				 WHEN  MONTH(`date_evenement`) =2 THEN 'Fév '
																				 WHEN  MONTH(`date_evenement`) = 3 THEN 'Mars'
																				 WHEN  MONTH(`date_evenement`) = 4 THEN 'Avril'
																		  
																				 WHEN  MONTH(`date_evenement`) = 5 THEN 'Mai'
																				 WHEN  MONTH(`date_evenement`) =6 THEN 'Juin'
																				 WHEN  MONTH(`date_evenement`) = 7 THEN 'Juillet'
																				 WHEN  MONTH(`date_evenement`) = 8 THEN 'Aout'
																				 
																				 WHEN  MONTH(`date_evenement`) = 9 THEN 'Sep'
																				 WHEN  MONTH(`date_evenement`) =10 THEN 'Oct'
																				 WHEN  MONTH(`date_evenement`) = 11 THEN 'Nov'
																				
																				 ELSE 'Déc '
																		END AS 'mois'
																FROM `evenement` WHERE  date_evenement > date(now()) order by evenement_ID asc limit 1");
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
										  ?>
												
								
								
								
								
								
								
								
								
								<article class="thumb-info custom-thumb-info custom-box-shadow">
									<span class="thumb-info-wrapper">
										<a href="#">
											<img src="image/<?php echo $row['image'];?>" alt class="img-fluid"  style="width:628px; height:257px;"/>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="custom-thumb-info-wrapper-box text-center justify-content-center d-flex mb-4">
										
										
										
										
										
										
										
												<div class="countdown custom-newcomers-class custom-secondary-font custom-box-shadow font-weight-bold 
														text-color-dark clock-one-events" data-plugin-countdown data-plugin-options="{'textDay': 'JOURS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 'SEC', 
														'date': '2024/08/17  1:00:00', 'numberClass': 
														'font-weight-bold text-color-primary', 'wrapperClass': 'text-color-dark', 'textDay': 'JOURS', 'textHour': 'Hrs', 'textMin': 'Min', 
														'textSec': 'Sec', 'uppercase': false}">   
												</div>
										</span>
										 
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													<?php echo $row['heure_evenemen'];?>
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
														<?php echo $row['lieu'];?>
												</li>
											</ul>
										</span>
										<span class="thumb-info-caption-text">
											<h4 class="font-weight-bold mb-2">
												<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
													<?php echo $row['evenement'];?>
												</a>
											</h4>
											<p align="justify"><?php echo $row['Description'];?></p>
										</span>
									</span>
								</article>
								<?php 
											$cnt=$cnt+1;
										}?>
							</div>
							<div class="col-lg-6">
								<h2 class="text-color-dark font-weight-bold">Evénement à venir</h2>
								
							<table>
							  <tbody>
									<tr>
										<td style="border-bottom:double;">
													
														<?php
											$ret=mysqli_query($con," select `evenement_ID`, `evenement`, `Description`,
																		 lieu, `heure_evenemen`,  day(date_evenement) as jour ,
																			year(date_evenement) as anne ,
																			MONTH(`date_evenement`)  ,
																		CASE
																				 WHEN  MONTH(`date_evenement`) = 1 THEN 'Jan'
																				 WHEN  MONTH(`date_evenement`) =2 THEN 'Fév '
																				 WHEN  MONTH(`date_evenement`) = 3 THEN 'Mars'
																				 WHEN  MONTH(`date_evenement`) = 4 THEN 'Avril'
																		  
																				 WHEN  MONTH(`date_evenement`) = 5 THEN 'Mai'
																				 WHEN  MONTH(`date_evenement`) =6 THEN 'Juin'
																				 WHEN  MONTH(`date_evenement`) = 7 THEN 'Juillet'
																				 WHEN  MONTH(`date_evenement`) = 8 THEN 'Aout'
																				 
																				 WHEN  MONTH(`date_evenement`) = 9 THEN 'Sep'
																				 WHEN  MONTH(`date_evenement`) =10 THEN 'Oct'
																				 WHEN  MONTH(`date_evenement`) = 11 THEN 'Nov'
																				
																				 ELSE 'Déc '
																		END AS 'mois'
																FROM `evenement` WHERE  date_evenement > date(now()) order by evenement_ID asc limit 2");
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
										  ?>
													
													
													<article class="custom-post-event" >
													<hr class="solid">
												<div class="post-event-date bg-color-primary text-center" >
 										<span class="month text-uppercase custom-secondary-font text-color-light"><?php echo $row['mois'];?></span>
										<span class="day font-weight-bold text-color-light"><?php echo $row['jour'];?></span>
										<span class="year text-color-light"><?php echo $row['anne'];?></span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													<?php echo $row['heure_evenemen'];?>
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													<?php echo $row['lieu'];?>
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold">
											<a href="#" class="text-decoration-none custom-secondary-font text-color-dark"><?php echo $row['evenement'];?></a>
										</h4>
										<p align="justify"> <?php echo $row['Description'];?></p>
									</div>
										<?php 
											$cnt=$cnt+1;
										}?>
										
											</article>
										</td>
									</tr>
								</tbody>
							</table>
 							</div>
						</div>
					</div>
				</section>

			<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-bold text-color-dark mb-3">Événements passés</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
							
							
										<?php
											$ret=mysqli_query($con," select `evenement_ID`, `evenement`, `Description`,
																		 lieu, `heure_evenemen`,  day(date_evenement) as jour ,
																			year(date_evenement) as anne ,
																			MONTH(`date_evenement`)  ,
																		CASE
																				 WHEN  MONTH(`date_evenement`) = 1 THEN 'Jan'
																				 WHEN  MONTH(`date_evenement`) =2 THEN 'Fév '
																				 WHEN  MONTH(`date_evenement`) = 3 THEN 'Mars'
																				 WHEN  MONTH(`date_evenement`) = 4 THEN 'Avril'
																		  
																				 WHEN  MONTH(`date_evenement`) = 5 THEN 'Mai'
																				 WHEN  MONTH(`date_evenement`) =6 THEN 'Juin'
																				 WHEN  MONTH(`date_evenement`) = 7 THEN 'Juillet'
																				 WHEN  MONTH(`date_evenement`) = 8 THEN 'Aout'
																				 
																				 WHEN  MONTH(`date_evenement`) = 9 THEN 'Sep'
																				 WHEN  MONTH(`date_evenement`) =10 THEN 'Oct'
																				 WHEN  MONTH(`date_evenement`) = 11 THEN 'Nov'
																				
																				 ELSE 'Déc '
																		END AS 'mois'
																FROM `evenement` WHERE  date_evenement < date(now()) order by evenement_ID asc limit 1");
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
										  ?>
							  
								<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
								<hr class="solid">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light"><?php echo $row['mois'];?></span>
										<span class="day font-weight-bold text-color-light"><?php echo $row['jour'];?></span>
										<span class="year text-color-light"><?php echo $row['anne'];?></span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													<?php echo $row['heure_evenemen'];?>
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													<?php echo $row['lieu'];?>
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
												<?php echo $row['evenement'];?>
											</a>
										</h4>
										<p align="justify"><?php echo $row['Description'];?></p>
									</div>
									
								</article>
								<?php 
											$cnt=$cnt+1;
										}?>
							</div>
							
							<div class="col-lg-6">
							 
										<?php
											$ret=mysqli_query($con," select `evenement_ID`, `evenement`, `Description`,
																		 lieu, `heure_evenemen`,  day(date_evenement) as jour ,
																			year(date_evenement) as anne ,
																			MONTH(`date_evenement`)  ,
																		CASE
																				 WHEN  MONTH(`date_evenement`) = 1 THEN 'Jan'
																				 WHEN  MONTH(`date_evenement`) =2 THEN 'Fév '
																				 WHEN  MONTH(`date_evenement`) = 3 THEN 'Mars'
																				 WHEN  MONTH(`date_evenement`) = 4 THEN 'Avril'
																		  
																				 WHEN  MONTH(`date_evenement`) = 5 THEN 'Mai'
																				 WHEN  MONTH(`date_evenement`) =6 THEN 'Juin'
																				 WHEN  MONTH(`date_evenement`) = 7 THEN 'Juillet'
																				 WHEN  MONTH(`date_evenement`) = 8 THEN 'Aout'
																				 
																				 WHEN  MONTH(`date_evenement`) = 9 THEN 'Sep'
																				 WHEN  MONTH(`date_evenement`) =10 THEN 'Oct'
																				 WHEN  MONTH(`date_evenement`) = 11 THEN 'Nov'
																				
																				 ELSE 'Déc '
																		END AS 'mois'
																FROM `evenement` WHERE  date_evenement < date(now()) order by evenement_ID asc limit 1");
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
										  ?>
							
							<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
								<hr class="solid">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light"><?php echo $row['mois'];?></span>
										<span class="day font-weight-bold text-color-light"><?php echo $row['jour'];?></span>
										<span class="year text-color-light"><?php echo $row['anne'];?></span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													<?php echo $row['heure_evenemen'];?>
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													<?php echo $row['lieu'];?>
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
												<?php echo $row['evenement'];?>
											</a>
										</h4>
										<p align="justify"><?php echo $row['Description'];?></p>
									</div>
									
								</article>
								<?php 
											$cnt=$cnt+1;
										}?>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-lg-6">
							
										<?php
											$ret=mysqli_query($con," select `evenement_ID`, `evenement`, `Description`,
																		 lieu, `heure_evenemen`,  day(date_evenement) as jour ,
																			year(date_evenement) as anne ,
																			MONTH(`date_evenement`)  ,
																		CASE
																				 WHEN  MONTH(`date_evenement`) = 1 THEN 'Jan'
																				 WHEN  MONTH(`date_evenement`) =2 THEN 'Fév '
																				 WHEN  MONTH(`date_evenement`) = 3 THEN 'Mars'
																				 WHEN  MONTH(`date_evenement`) = 4 THEN 'Avril'
																		  
																				 WHEN  MONTH(`date_evenement`) = 5 THEN 'Mai'
																				 WHEN  MONTH(`date_evenement`) =6 THEN 'Juin'
																				 WHEN  MONTH(`date_evenement`) = 7 THEN 'Juillet'
																				 WHEN  MONTH(`date_evenement`) = 8 THEN 'Aout'
																				 
																				 WHEN  MONTH(`date_evenement`) = 9 THEN 'Sep'
																				 WHEN  MONTH(`date_evenement`) =10 THEN 'Oct'
																				 WHEN  MONTH(`date_evenement`) = 11 THEN 'Nov'
																				
																				 ELSE 'Déc '
																		END AS 'mois'
																FROM `evenement` WHERE  date_evenement < date(now()) order by evenement_ID asc limit 1");
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
										  ?>
										  
							<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
								<hr class="solid">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light"><?php echo $row['mois'];?></span>
										<span class="day font-weight-bold text-color-light"><?php echo $row['jour'];?></span>
										<span class="year text-color-light"><?php echo $row['anne'];?></span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													<?php echo $row['heure_evenemen'];?>
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													<?php echo $row['lieu'];?>
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
												<?php echo $row['evenement'];?>
											</a>
										</h4>
										<p align="justify"><?php echo $row['Description'];?></p>
									</div>
									
								</article>
								<?php 
											$cnt=$cnt+1;
										}?>
							</div>
							
							<div class="col-lg-6">
							
										<?php
											$ret=mysqli_query($con," select `evenement_ID`, `evenement`, `Description`,
																		 lieu, `heure_evenemen`,  day(date_evenement) as jour ,
																			year(date_evenement) as anne ,
																			MONTH(`date_evenement`)  ,
																		CASE
																				 WHEN  MONTH(`date_evenement`) = 1 THEN 'Jan'
																				 WHEN  MONTH(`date_evenement`) =2 THEN 'Fév '
																				 WHEN  MONTH(`date_evenement`) = 3 THEN 'Mars'
																				 WHEN  MONTH(`date_evenement`) = 4 THEN 'Avril'
																		  
																				 WHEN  MONTH(`date_evenement`) = 5 THEN 'Mai'
																				 WHEN  MONTH(`date_evenement`) =6 THEN 'Juin'
																				 WHEN  MONTH(`date_evenement`) = 7 THEN 'Juillet'
																				 WHEN  MONTH(`date_evenement`) = 8 THEN 'Aout'
																				 
																				 WHEN  MONTH(`date_evenement`) = 9 THEN 'Sep'
																				 WHEN  MONTH(`date_evenement`) =10 THEN 'Oct'
																				 WHEN  MONTH(`date_evenement`) = 11 THEN 'Nov'
																				
																				 ELSE 'Déc'
																		END AS 'mois'
																FROM `evenement` WHERE  date_evenement < date(now()) order by evenement_ID asc limit 1");
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
										  ?>
								<article class="custom-post-event bg-color-light mb-4 mb-lg-0">
								<hr class="solid">
									<div class="post-event-date bg-color-primary text-center">
										<span class="month text-uppercase custom-secondary-font text-color-light"><?php echo $row['mois'];?></span>
										<span class="day font-weight-bold text-color-light"><?php echo $row['jour'];?></span>
										<span class="year text-color-light"><?php echo $row['anne'];?></span>
									</div>
									<div class="post-event-content custom-margin-1">
										<span class="custom-event-infos">
											<ul>
												<li>
													<i class="far fa-clock"></i>
													<?php echo $row['heure_evenemen'];?>
												</li>
												<li class="text-uppercase">
													<i class="fas fa-map-marker-alt"></i>
													<?php echo $row['lieu'];?>
												</li>
											</ul>
										</span>
										<h4 class="font-weight-bold text-color-dark">
											<a href="#" class="text-decoration-none custom-secondary-font text-color-dark">
												<?php echo $row['evenement'];?>
											</a>
										</h4>
										<p align="justify"><?php echo $row['Description'];?></p>
									</div>
									
								</article>
								<?php 
											$cnt=$cnt+1;
										}?>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-10">
								<span class="custom-secondary-font font-weight-bold custom-text-color-1 text-4">Première visite</span>
								<h2 class="font-weight-bold custom-text-color-1 m-0">En savoir plus sur l'Église. <span class="font-weight-normal custom-secondary-font custom-font-italic">Votre place est ici</span></h2>
							</div>
							<div class="col-lg-2 mt-4 mt-lg-0">
								<a href="aproposdenous.php" class="btn btn-primary custom-btn-style-1 text-uppercase">Guide des visiteurs</a>
							</div>
						</div>
					</div>
				</section>

			<footer   >
			
				<?php include('footer.php');?>
		 
			</footer>
		</div>

		<a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="master/less/skin-church.less" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher" aria-label="Style Switcher"><i class="fas fa-cogs"></i><div class="style-switcher-tooltip"><strong>Style Switcher</strong><p>Check out different color options and styles.</p></div></a>
		
		<a class="envato-buy-redirect" href="https://themeforest.net/checkout/from_item/4106987?license=regular&support=bundle_6month&ref=Okler" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Buy Porto"><i class="fas fa-shopping-cart"></i></a>
		<a class="demos-redirect" href="index.html#demos" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Demos"><img alt="Demos" src="img/icons/demos-redirect.png" class="img-fluid" /></a>
		

		<!-- Vendor -->		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/plugins/js/plugins.min.js"></script>		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-church.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	<!-- Google Maps
		<script>

			/* 
			Map Markers:
			- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
			- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
			- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
			*/
			(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
				({key: "AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg", v: "weekly"});

			async function initMap() {
				const { Map, InfoWindow } = await google.maps.importLibrary("maps");
				const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
					"marker",
				);
				const map = new Map(document.getElementById("googlemaps"), {
					zoom: 14,
					center: { lat: -37.817240, lng: 144.955820 },
					mapId: "bacc27c8c034b32e",
				});
				const markers = [
					{
						position: { lat: -37.817240, lng: 144.955820 },
						title: "Office 1<br>Melbourne, 121 King St, Australia<br>Phone: 123-456-1234",
					}
				];

				const infoWindow = new InfoWindow();

				markers.forEach(({ position, title }, i) => {
					const pin = new PinElement({
						background: "#e36159",
						borderColor: "#e36159",
						glyphColor: "#FFF",
					});
					const marker = new AdvancedMarkerElement({
						position,
						map,
						title: `${title}`,
						content: pin.element,
					});

					marker.addListener("click", ({ domEvent, latLng }) => {
						const { target } = domEvent;

						infoWindow.close();
						infoWindow.setContent(marker.title);
						infoWindow.open(marker.map, marker);
					});
				});	

			}

			initMap();	

		</script> -->

	</body>
</html>