<?php
include('include/config.php');
?> 



<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

				<title>EDPPC | Galerie </title>	

			<meta name="keywords" content="EDPPC" />
		<meta name="description" content="Église de Dieu de Petite Place Cazeau">
		<meta name="author" content="EDPPC">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400,400i,700%7CSintony:400,700,800&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-church.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-church.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

	</head>
	<body>

		<div class="body">
		<?php
			$current_page = 'galerie.php';
			 include('header.php');?>


			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-secondary page-header-lg mb-0">
					<div class="container">
						<div class="row my-4">
							<div class="col-md-12 align-self-center text-center">
								<h1 class="text-9 text-color-light custom-secondary-font font-weight-bold my-4">Galerie</h1>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<div id="galleryAjaxBox" class="ajax-box ajax-box-init mb-4">

									<div class="bounce-loader">
										<div class="bounce1"></div>
										<div class="bounce2"></div>
										<div class="bounce3"></div>
									</div>

									<div class="ajax-box-content" id="galleryAjaxBoxContent"></div>

								</div>
							</div>
						</div>
						<div class="row" data-plugin-masonry data-plugin-options="{'itemSelector': '.col-lg-4'}">
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-1.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										
										<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Baptemes' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-1.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Baptêmes
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-2.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										
										
										<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Mariages' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-2.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Mariages
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-3.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Nos Cultes' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-3.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Nos Cultes
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-5.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Chapelle des Enfants' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									</a>
									
									
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-5.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Chapelle des Enfants
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-6.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
											<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Reveil annuel' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-6.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Reveil annuel
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-6.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
											<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='anniversaire' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-4.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Anniversaire de l'Eglise
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-7.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
										<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Presentation au temple' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-7.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Presentation au temple
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-8.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
											<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Bataillon' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-8.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Bataillon
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
							<div class="col-lg-4">
								<span class="thumb-info custom-thumb-info-4">
									<a data-href="ajax/gallery-ajax-on-page-9.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
											<?php
												$sql=mysqli_query($con," SELECT * FROM `galerie` WHERE `type`='Week end Couple' order by `id_photo` desc limit 1");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
													{
										?>
										
									<span class="thumb-info-wrapper">
											<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
										</span>
									</a>
									<?php 
										$cnt=$cnt+1;
										 }
									?>
									</a>
									<span class="thumb-info-caption custom-box-shadow">
										<span class="thumb-info-caption-text">
											<h2 class="font-weight-bold text-5 text-center">
												<a data-href="ajax/gallery-ajax-on-page-9.php" class="text-decoration-none custom-secondary-font text-color-dark" data-ajax-on-page>
													Week end Couple
												</a>
											</h2>
										</span>
									</span>
								</span>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-10">
								<span class="custom-secondary-font font-weight-bold custom-text-color-1 text-4">First time visitor</span>
								<h2 class="font-weight-bold custom-text-color-1 m-0">Find out more about the Church. <span class="font-weight-normal custom-secondary-font custom-font-italic">You belong here</span></h2>
							</div>
							<div class="col-lg-2 mt-4 mt-lg-0">
								<a href="demo-church-about-us.html" class="btn btn-primary custom-btn-style-1 text-uppercase">Visitors Guide</a>
							</div>
						</div>
					</div>
				</section>

			 <footer   >
			
				<?php include('footer.php');?>
		 
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>
		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-church.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	<!-- Google Maps -->
		<script>

			/* 
			Map Markers:
			- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
			- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
			- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
			*/
			(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
				({key: "YOUR_API_KEY", v: "weekly"});

			async function initMap() {
				const { Map, InfoWindow } = await google.maps.importLibrary("maps");
				const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
					"marker",
				);
				const map = new Map(document.getElementById("googlemaps"), {
					zoom: 14,
					center: { lat: -37.817240, lng: 144.955820 },
					mapId: "YOUR_MAP_API_ID",
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

		</script>

	</body>
</html>