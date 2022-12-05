<?php
	$siteurl='http://localhost/natanpublishing/';
	$sitetitle='NATAN Publishing';
	$sitedescription='Partner Anda di Agensi Kreatif Digital';
?>

<!DOCTYPE html>

<html lang="id">
	<head>

		<meta charset="utf-8">

		<!-- Title -->
		<title>Portofolio | <?php echo $sitetitle ?></title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Meta Tag -->
		<meta name="title" content="Portofolio | <?php echo $sitetitle ?>">
		<meta name="description" content="Portofolio <?php echo $sitetitle ?>, <?php echo $sitedescription ?>.">
		<meta name="robots" content="index, nofollow">
		<meta name="author" content="<?php echo $sitetitle ?>">
		
		<!-- Meta Share -->
		<meta property="og:title" content="Portofolio | <?php echo $sitetitle ?>">
		<meta property="og:image" content="<?php echo $siteurl ?>assets/img/thumb.jpg">
		<meta property="og:description" content="Portofolio <?php echo $sitetitle ?>, <?php echo $sitedescription ?>.">
		<meta property="og:url" content="<?php echo $siteurl ?>service/">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="<?php echo $siteurl ?>assets/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo $siteurl ?>assets/favicon.ico" type="image/x-icon">

		<!-- Google fonts (https://www.google.com/fonts) -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> <!-- Body font -->
		<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet"> <!-- Secondary/Alter font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="<?php echo $siteurl ?>assets/vendor/normalize/normalize.min.css"> <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
		<link rel="stylesheet" href="<?php echo $siteurl ?>assets/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="<?php echo $siteurl ?>assets/vendor/swiper/css/swiper-bundle.min.css"> <!-- Swiper CSS (https://swiperjs.com/) -->
		<link rel="stylesheet" href="<?php echo $siteurl ?>assets/vendor/lightgallery/css/lightgallery.min.css"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->

		<!-- Template master CSS -->
		<link rel="stylesheet" href="<?php echo $siteurl ?>assets/css/helper.css">
		<link rel="stylesheet" href="<?php echo $siteurl ?>assets/css/theme.css">

	</head>

	<!-- ===========
	///// Body /////
	================
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	* Use class "tt-smooth-scroll" to enable page smooth scrolling.
	* Use class "tt-transition" to enable page transitions.
	* Use class "tt-magic-cursor" to enable magic cursor.
	* Note: there may be classes that are specific to this page only!
	-->
	<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">


		<!-- *************************************
		*********** Begin body inner ************* 
		************************************** -->
		<main id="body-inner">

			<!-- Begin page transition (do not remove!!!) 
			=========================== -->
			<div id="page-transition">
				<div class="ptr-overlay"></div>
				<div class="ptr-preloader">
					<div class="ptr-prel-content">
						<!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
						<img src="<?php echo $siteurl ?>assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
					</div> <!-- /.ptr-prel-content -->
				</div> <!-- /.ptr-preloader -->
			</div>
			<!-- End page transition -->

			<!-- Begin magic cursor 
			======================== -->
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<!-- End magic cursor --> 


			<!-- *****************************************
			*********** Begin scroll container *********** 
			****************************************** -->
			<div id="scroll-container"> 
				
				<!-- ===================
				///// Begin header /////
				========================
				* Use class "tt-header-fixed" to set header to fixed position.
				-->
				<header id="tt-header" class="tt-header-fixed">
					<div class="tt-header-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

						<div class="tt-header-col">

							<!-- Begin logo 
							================ -->
							<div class="tt-logo"> 
								<a href="<?php echo $siteurl ?>">
									<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
									<img src="<?php echo $siteurl ?>assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
									<img src="<?php echo $siteurl ?>assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo"> <!-- logo dark -->
								</a>
							</div>
							<!-- End logo -->

						</div> <!-- /.tt-header-col -->

						<div class="tt-header-col">

							<!-- Begin overlay menu toggle button -->
							<div id="tt-ol-menu-toggle-btn-wrap">
								<div class="tt-ol-menu-toggle-btn-text-wrap hide-cursor">
									<div class="tt-ol-menu-toggle-btn-text">
										<span class="text-menu" data-hover="Buka">Menu</span>
										<span class="text-close">Tutup</span>
									</div> <!-- /.tt-ol-menu-toggle-btn-text -->
								</div> <!-- /.tt-ol-menu-toggle-btn-text-wrap -->
								<div class="tt-ol-menu-toggle-btn-holder">
									<a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
								</div> <!-- /.tt-ol-menu-toggle-btn-holder -->
							</div>
							<!-- End overlay menu toggle button -->

							<!-- Begin overlay menu 
							======================== 
							* Use class "tt-ol-menu-count" to enable menu counter.
							-->
							<nav class="tt-overlay-menu tt-ol-menu-count">
								<div class="tt-ol-menu-ghost">Menu</div>
								<div class="tt-ol-menu-holder">
									<div class="tt-ol-menu-inner tt-wrap">
										<div class="tt-ol-menu-content">

											<!-- Begin menu list -->
											<ul class="tt-ol-menu-list">

												<li><a href="<?php echo $siteurl ?>">Beranda</a></li>
												<li><a href="<?php echo $siteurl ?>about/">Tentang</a></li>
												<li><a href="<?php echo $siteurl ?>service/">Layanan</a></li>
												<li class="active"><a href="<?php echo $siteurl ?>portfolio/">Portofolio</a></li>
												<li><a href="<?php echo $siteurl ?>contact/">Kontak</a></li>

											</ul>
											<!-- End menu list -->

											<!-- Begin overlay menu social links 
											===================================== -->
											<ul class="tt-ol-menu-social">
												<li><h6 class="tt-ol-menu-social-heading">Ikuti Kami :</h6></li>
												<li><a href="https://tiktok.com/@natanpublishing/" target="_blank" rel="noopener">TikTok</a></li>
												<li><a href="https://facebook.com/natanpublishing/" target="_blank" rel="noopener">Facebook</a></li>
												<li><a href="https://youtube.com/@natanpublishing/" target="_blank" rel="noopener">YouTube</a></li>
												<li><a href="https://instagram.com/natanpublishing/" target="_blank" rel="noopener">Instagram</a></li>
											</ul>
											<!-- End overlay menu social links -->

										</div> <!-- /.tt-ol-menu-content -->
									</div> <!-- /.tt-ol-menu-inner -->
								</div> <!-- /.tt-ol-menu-holder -->
							</nav> 
							<!-- End overlay menu -->

						</div> <!-- /.header-col -->
					</div> <!-- /.header-inner -->
				</header>
				<!-- End header -->

				
				<!-- *************************************
				*********** Begin content wrap *********** 
				************************************** -->
				<div id="content-wrap">

					
					<!-- ========================
					///// Begin page header /////
					============================= 
					* Use class "ph-full" to enable fullscreen size (no effect on smaller screens!).
					* Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).
					* Use class "ph-center" to enable content center position.
					* Use class "ph-image-cropped" to crop image (if image is used). It uses fixed image dimensions (no effect with class "ph-bg-image"!).
					* Use class "ph-bg-image" to enable page header background image. Note: "ph-caption-title-ghost" will be disabled if you enable this option!
					* Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light background image (effect only with class "ph-bg-image").
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
					* Use class "ph-content-parallax" to enable content parallax.
					* Use class "ph-stroke" to enable caption title stroke style.
					* Use class "ph-ghost-scroll" to enable the scroll effect to caption title ghost (no effect with class "ph-center"!).
					-->
					<div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-caption-subtitle">
									<div class="ph-appear">Portofolio Kami</div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Portofolio</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Portofolio</div>
								</div>
							</div>
							<!-- End page header caption -->

						</div> <!-- /.page-header-inner -->

						<!-- Begin scroll down (you can change "data-offset" to set scroll top offset) 
						======================= -->
						<div class="tt-scroll-down">
							<a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
								<div class="tt-sd-arrow">
									<div class="tt-sd-arrow-inner"></div>
								</div>
								<div class="tt-sd-text">Scroll</div>
							</a>
						</div>
						<!-- End scroll down -->

					</div>
					<!-- End page header -->


					<!-- *************************************
					*********** Begin page content *********** 
					************************************** -->
					<div id="page-content">

						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- Begin portfolio grid (works combined with tt-Ggrid!)
								========================== 
								* Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
								* Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
								* Use class "pgi-cap-center" to position portfolio grid item caption to center.
								* Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
								--> 
								<div id="portfolio-grid" class="pgi-cap-inside pgi-cap-hover">

									<!-- Begin tt-Grid
									=================== 
									* Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
									* Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
									* Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
									* Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
									* Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
									* Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									* Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									-->
									<div class="tt-grid ttgr-layout-2-1 ttgr-gap-3">

										<!-- Begin tt-Ggrid top content 
										================================ -->
										<div class="tt-grid-top">

											<!-- Begin tt-Ggrid categories/filter
											====================================== -->
											<div class="tt-grid-categories">

												<!-- Begin tt-Ggrid categories trigger 
												======================================= 
												* Use class "ttgr-cat-fixed" to enable categories trigger fixed position.
												-->
												<div class="ttgr-cat-trigger-wrap ttgr-cat-fixed">
													<a href="#portfolio-grid" class="ttgr-cat-trigger not-hide-cursor" data-offset="150">
														<div class="ttgr-cat-text hide-cursor">
															<span data-hover="Open">Filter</span>
														</div>
														<div class="ttgr-cat-icon">
															<span class="magnetic-item"><i class="fas fa-layer-group"></i></span>
														</div>
													</a>
												</div>
												<!-- End tt-Ggrid categories trigger -->

												<!-- Begin tt-Ggrid categories nav 
												=================================== -->
												<div class="ttgr-cat-nav">
													<div class="ttgr-cat-list-holder cursor-close">
														<div class="ttgr-cat-list-inner">
															<div class="ttgr-cat-list-content">
																<ul class="ttgr-cat-list">
																	<li class="ttgr-cat-close">Close <i class="fas fa-times"></i></li> <!-- For mobile devices! -->
																	<li class="ttgr-cat-item"><a href="#" class="active">Show All</a></li>
																	<li class="ttgr-cat-item"><a href="#" data-filter=".branding">Branding</a></li>
																	<li class="ttgr-cat-item"><a href="#" data-filter=".people">People</a></li>
																	<li class="ttgr-cat-item"><a href="#" data-filter=".nature">Nature</a></li>
																	<li class="ttgr-cat-item"><a href="#" data-filter=".creative">Creative</a></li>
																</ul>
															</div> <!-- /.ttgr-cat-links-content -->
														</div> <!-- /.ttgr-cat-links-inner -->
													</div> <!-- /.ttgr-cat-links-holder -->
												</div>
												<!-- End tt-Ggrid categories nav -->

											</div>
											<!-- End tt-Ggrid categories/filter-->

										</div>
										<!-- End tt-Grid top content -->


										<!-- Begin tt-Grid items wrap 
										============================== -->
										<div class="tt-grid-items-wrap isotope-items-wrap">

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item people">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-1.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-1.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-1.html">Elegant Women</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">People</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item creative">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-2.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-2.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-2.html">The Chase</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Creative</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item people">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-3.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-video-wrap ttgr-height">
																		<video class="pgi-video" loop muted preload="metadata" poster="assets/vids/fashion-shoot.jpg">
																			<source src="assets/vids/fashion-shoot.mp4" type="video/mp4">
																			<source src="assets/vids/fashion-shoot.webm" type="video/webm">
																		</video>
																	</figure> <!-- /.pgi-video-wrap -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-3.html">Fashion Shoot</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">People</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item nature">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-4.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-3.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-4.html">Enchanting Nature</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Nature</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item branding">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-5.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-4.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-5.html">Leyla Stanley</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Branding</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item people">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-6.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-5.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-6.html">Passion</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">People</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item nature">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-7.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-6.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-7.html">Mystical Glacier</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Nature</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item branding">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item pgi-image-is-light">
														<a href="single-project-8.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-7.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-8.html">Display Stand</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Branding</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item creative">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="single-project-9.html" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="https://demo.themetorium.net/html/nui/assets/img/portfolio/1920/portfolio-8.jpg" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="single-project-9.html">Modern Interior</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Creative</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

										</div>
										<!-- End tt-Grid items wrap  -->

									</div>
									<!-- End tt-Grid -->

								</div>
								<!-- End portfolio grid -->


								<!-- Begin tt-pagination (uncomment below code if you want to use pagination)
								========================= 
								* Use class "tt-pagin-center" to align center.
								-->
								<!-- <div class="tt-pagination tt-pagin-center anim-fadeinup">
									<div class="tt-pagin-prev">
										<a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
									</div>
									<div class="tt-pagin-numbers">
										<a href="#" class="tt-pagin-item magnetic-item active">1</a>
										<a href="" class="tt-pagin-item magnetic-item">2</a>
										<a href="" class="tt-pagin-item magnetic-item">3</a>
										<a href="" class="tt-pagin-item magnetic-item">4</a>
									</div>
									<div class="tt-pagin-next">
										<a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div> -->
								<!-- End tt-pagination -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin page nav 
								==================== 
								* Use class "tt-pn-center" to align page nav to center.
								* Use class "tt-pn-stroke" to enable title stroke style.
								-->
								<div class="tt-page-nav tt-pn-stroke tt-pn-center">
									<a href="<?php echo $siteurl ?>contact/" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
										<div class="tt-pn-title">Kontak</div>
										<div class="tt-pn-hover-title">Kontak</div>
									</a> <!-- /.tt-pn-link -->
									<div class="tt-pn-subtitle anim-fadeinup">Lihat Kontak</div>
								</div>
								<!-- End page nav -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->
					

					<!-- ======================
					///// Begin tt-footer /////
					=========================== -->
					<footer id="tt-footer">
						<div class="tt-footer-inner">

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-left">
								<div class="footer-col-inner">

									<a href="#" class="tt-btn tt-btn-link scroll-to-top">
										<span class="tt-btn-icon"><i class="fas fa-arrow-up"></i></span>
										<div data-hover="Kembali">Kembali</div>
									</a>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center order-m-last">
								<div class="footer-col-inner">

									<div class="tt-copyright text-gray">
										<a href="https://natanpublishing.com" target="_blank" rel="noopener" class="tt-btn tt-btn-link">
											<span class="tt-btn-icon"><i class="far fa-copyright"></i></span>
											<div data-hover="2022 NATAN Publishing">2022 NATAN Publishing</div>
										</a>
									</div>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-right">
								<div class="footer-col-inner">
									<div class="footer-social">
										<div class="footer-social-text"><span>Ikuti</span><i class="fas fa-share-alt"></i></div>
										<div class="social-buttons">
											<ul>
												<li><a href="https://tiktok.com/@natanpublishing/" class="magnetic-item" target="_blank" rel="noopener"><i class="fab fa-tiktok"></i></a></li>
												<li><a href="https://facebook.com/natanpublishing/" class="magnetic-item" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="https://youtube.com/@natanpublishing/" class="magnetic-item" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a></li>
												<li><a href="https://instagram.com/natanpublishing/" class="magnetic-item" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</div> <!-- /.social-buttons -->
									</div> <!-- /.footer-social -->

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

						</div> <!-- /.tt-section-inner -->
					</footer>
					<!-- End tt-footer -->


				</div>
				<!-- End content wrap -->

			</div>
			<!-- End scroll container -->


		</main>
		<!-- End body inner -->

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="<?php echo $siteurl ?>assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->

		<!-- Libs and Plugins JS -->
		<script src="<?php echo $siteurl ?>assets/vendor/gsap/gsap.min.js"></script> <!-- GSAP JS (https://greensock.com/gsap/) -->
		<script src="<?php echo $siteurl ?>assets/vendor/gsap/ScrollToPlugin.min.js"></script> <!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
		<script src="<?php echo $siteurl ?>assets/vendor/gsap/ScrollTrigger.min.js"></script> <!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

		<script src="<?php echo $siteurl ?>assets/vendor/smooth-scrollbar.js"></script> <!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
		<script src="<?php echo $siteurl ?>assets/vendor/swiper/js/swiper-bundle.min.js"></script> <!-- Swiper JS (https://swiperjs.com/) -->
		<script src="<?php echo $siteurl ?>assets/vendor/isotope/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
		<script src="<?php echo $siteurl ?>assets/vendor/isotope/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="<?php echo $siteurl ?>assets/vendor/isotope/packery-mode.pkgd.min.js"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
		<script src="<?php echo $siteurl ?>assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="<?php echo $siteurl ?>assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

		<!-- Template master JS -->
		<script src="<?php echo $siteurl ?>assets/js/theme.js"></script>

	</body>

</html>