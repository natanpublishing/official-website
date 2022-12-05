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
		<title><?php echo $sitetitle ?> - <?php echo $sitedescription ?></title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Meta Tag -->
		<meta name="title" content="<?php echo $sitetitle ?> - <?php echo $sitedescription ?>">
		<meta name="description" content="Agensi kreatif digital di Jakarta yang memberikan layanan untuk branding, website development, apps development, social media management, dan lainnya.">
		<meta name="robots" content="index, nofollow">
		<meta name="author" content="<?php echo $sitetitle ?>">
		
		<!-- Meta Share -->
		<meta property="og:title" content="<?php echo $sitetitle ?> - <?php echo $sitedescription ?>">
		<meta property="og:image" content="<?php echo $siteurl ?>assets/img/thumb.jpg">
		<meta property="og:description" content="Agensi kreatif digital di Jakarta yang memberikan layanan untuk branding, website development, apps development, social media management, dan lainnya.">
		<meta property="og:url" content="<?php echo $siteurl ?>">

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

												<li class="active"><a href="<?php echo $siteurl ?>">Beranda</a></li>
												<li><a href="<?php echo $siteurl ?>about/">Tentang</a></li>
												<li><a href="<?php echo $siteurl ?>service/">Layanan</a></li>
												<li><a href="<?php echo $siteurl ?>portfolio/">Portofolio</a></li>
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
					<div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<!-- <div class="ph-image">
								<div class="ph-image-inner">
									<img src="assets/img/page-header/ph-1.jpg" alt="Image">
								</div>
							</div> -->
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption">
								<!-- <div class="ph-caption-subtitle">
									<div class="ph-appear">Subtitle</div>
								</div> -->
								<h1 class="ph-caption-title">
									<div class="ph-appear">
                                        Kami adalah<br>agensi <span class="hide-from-sm">→</span> <em class="text-stroke-light">kreatif digital</em> di Jakarta</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Creative</div>
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
								<div id="portfolio-grid" class="pgi-hover">

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
									<div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">

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
																		<img src="assets/img/portfolio/1200/portfolio-1.jpg" alt="image">
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
																		<img src="assets/img/portfolio/1200/portfolio-2.jpg" alt="image">
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
																		<img src="assets/img/portfolio/1200/portfolio-3.jpg" alt="image">
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

										</div>
										<!-- End tt-Grid items wrap  -->

									</div>
									<!-- End tt-Grid -->

								</div>
								<!-- End portfolio grid -->


								<div class="text-center anim-fadeinup">

									<!-- Begin scrolling button (See all works)
									============================ -->
									<a href="portfolio-grid-creative.html" class="tt-scrolling-btn all-works-btn" data-cursor="All<br>Works">
										<div class="scr-btn-inner ph-appear">
											<div class="scr-btn-icon"><i class="fas fa-arrow-right"></i></div>
											<div class="scr-btn-spinner">
												<svg viewBox="0 0 500 500">
													<defs>
														<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
													</defs>
													<!-- If you change the text, you probably need to adjust the CSS so that it fits correctly. Find ".scr-btn-text" in file "theme.css" and adjust it for your needs. -->
													<text dy="30" class="scr-btn-text">
														<textPath xlink:href="#textcircle">See All Works - See All Works -</textPath>
													</text>
												</svg>
											</div>
										</div> <!-- /.sdc-inner -->
									</a>
									<!-- End scrolling button -->

								</div> <!-- /.text-center -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap max-width-1700">

								<div class="tt-row margin-left-lg-3-p margin-right-lg-3-p">
									<div class="tt-col-xl-4">

										<!-- Begin tt-Heading 
										====================== 
										* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
										* Use class "tt-heading-stroke" to enable stroke style.
										* Use class "tt-heading-center" to align tt-Heading to center.
										* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
										-->
										<div class="tt-heading tt-heading-xlg anim-fadeinup">
											<h3 class="tt-heading-subtitle">Our Services</h3>
											<h2 class="tt-heading-title">Digital Innovation</h2> <!-- You can use <br> to break a text line if needed -->
										</div>
										<!-- End tt-Heading -->

										<div class="max-width-600 margin-bottom-60 anim-fadeinup">
											<h5>When passion, courage, and craftsmanship are put into something, positive things will happen.</h5>
										</div>

									</div> <!-- /.tt-col -->

									<div class="tt-col-xl-1">
									</div> <!-- /.tt-col -->

									<div class="tt-col-xl-7">

										<!-- Begin accordion 
										===================== 
										* Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size.
										* Use class "tt-ac-borders" to enable borders.
										* Note: Add class "is-open" to the "tt-accordion-content" to make this content open by default.
										-->
										<div class="tt-accordion tt-ac-borders">
											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">UX / Research</h3>
														<!-- <div class="tt-accordion-subtext">Mauris mauris ante</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him <a href="">newspaper assurance</a>. Prepare garrets it expense windows shewing do an. She projection advantages resolution son indulgence. Part sure on no long life am at ever. In songs above he as drawn.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Digital Strategy</h3>
														<!-- <div class="tt-accordion-subtext">Vivamus nisi</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Allow miles wound place the leave had. To sitting subject no improve studied limited. Ye indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Branding & Identity</h3>
														<!-- <div class="tt-accordion-subtext">Nam min proin eget</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Content Production</h3>
														<!-- <div class="tt-accordion-subtext">Condimentum sit amet</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>To sure calm much most long me mean. Able rent long in do we. Uncommonly no it announcing melancholy an in. Mirth learn it he given. Secure shy favour length all twenty denote. He felicity no an at packages answered opinions juvenile.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

										</div>
										<!-- End accordion -->

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 bg-white-accent-3">
							<div class="tt-section-inner">

								<!-- Begin scrolling text
								========================== 
								Change data-scroll-speed="*" to adjust scrolling speed.
								Use class "scr-text-reverse" to reverse scrolling direction. 
								Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!). 
								-->
								<div class="tt-scrolling-text" data-scroll-speed="10">
									<div class="tt-scrolling-text-inner" data-text="We are trusted by over 18,000 clients →">
										We are trusted by over 18,000 clients →
									</div> <!-- /.tt-scrolling-text-inner -->
								</div>
								<!-- End scrolling text -->

								<!-- Begin scrolling text
								========================== 
								Change data-scroll-speed="*" to adjust scrolling speed.
								Use class "scr-text-reverse" to reverse scrolling direction. 
								Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!). 
								-->
								<div class="tt-scrolling-text scr-text-stroke scr-text-reverse" data-scroll-speed="10">
									<div class="tt-scrolling-text-inner" data-text="More than 15 year experience →">
										More than 15 year experience →
									</div> <!-- /.tt-scrolling-text-inner -->
								</div>
								<!-- End scrolling text -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin logo wall 
								=====================
								* Use class "cl-col-2", "cl-col-3" or "cl-col-4" to change columns.
								* Hint: for better results make sure all your images are in the same dimensions!
								-->
								<ul class="tt-logo-wall anim-fadeinup">
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-1-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-1-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-2-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-2-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-3-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-3-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-4-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-4-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-5-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-5-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-6-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-6-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-7-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-7-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-8-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-8-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-9-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-9-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="assets/img/clients/client-10-light.png" class="lv-client-light" alt="Client">
											<img src="assets/img/clients/client-10-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>

									<!-- Use the below example if you want a list without links -->
									<!-- <li><img src="assets/img/clients/client-1.png" alt="Client"></li> -->
								</ul>
								<!-- End logo wall -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-3">
							<div class="tt-section-inner tt-wrap max-width-1600">

								<!-- Begin tt-Heading 
								====================== 
								* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
								* Use class "tt-heading-stroke" to enable stroke style.
								* Use class "tt-heading-center" to align tt-Heading to center.
								* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1250 margin-auto">
									<h3 class="tt-heading-subtitle">Latest News</h3>
									<h2 class="tt-heading-title">From the Blog</h2> <!-- You can use <br> to break a text line if needed -->
									<a href="blog-classic.html" class="tt-btn tt-btn-link">
										<div data-hover="Browse All News">Browse All News</div>
										<span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
									</a>
								</div>
								<!-- End tt-Heading -->

								<!-- ==========================
								///// Begin blog carousel /////
								===============================
								* Use class "tt-blc-shifted" to enable shifted style (no effect on smaller screens!).
								* Use class "tt-blc-hide-navigation" to hide navigation.
								* Available data attributes:
										data-speed="800"......................(milliseconds)
										data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
										data-simulate-touch="true"............(true/false)
										data-pagination-type="bullets"........(bullets/fraction/progressbar)
								-->
								<div class="tt-blog-carousel anim-fadeinup" data-speed="800" data-simulate-touch="true" data-pagination-type="bullets">

									<!-- Begin swiper container -->
									<div class="swiper">

										<!-- Begin swiper wrapper (required) -->
										<div class="swiper-wrapper">

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
															<img class="swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/blog/carousel/blog-carousel-1.jpg" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="blog-archive.html">Lifestyle</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="blog-post.html">5 Surprising Techniques to Improve Your Creativity</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 26, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by John Doe">John Doe</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
															<img class="swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/blog/carousel/blog-carousel-2.jpg" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="blog-archive.html">Tutorials</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="blog-post.html">Avoid the Top 10 Mistakes Made by Beginners</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 24, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by John Doe">John Doe</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
															<img class="swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/blog/carousel/blog-carousel-3.jpg" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="blog-archive.html">Lifestyle</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="blog-post.html">Why Some People Save Money With This Method</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 23, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by John Doe">John Doe</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
															<img class="swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/blog/carousel/blog-carousel-4.jpg" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="blog-archive.html">Inspiration</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="blog-post.html">Want to Step Up Your Skills? You Need to Read This First</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 21, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by John Doe">John Doe</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
															<img class="swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/blog/carousel/blog-carousel-5.jpg" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="blog-archive.html">Tutorials</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="blog-post.html">Secrets to Getting Your Project to Complete Quickly</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 19, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by John Doe">John Doe</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

										</div>
										<!-- End swiper wrapper -->

									</div>
									<!-- End swiper container -->


									<!-- Begin blog carousel navigation (arrows) 
									============================================= -->
									<div class="tt-blc-nav-prev">
										<div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
									</div>
									<div class="tt-blc-nav-next">
										<div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
									</div>
									<!-- End blog carousel navigation -->

									<!-- Blog carousel pagination -->
									<div class="tt-blc-pagination hide-cursor"></div>

								</div>
								<!-- End blog carousel -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150">
							<div class="tt-section-inner tt-wrap max-width-700">

								<!-- Begin tt-Heading 
								====================== 
								* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
								* Use class "tt-heading-stroke" to enable stroke style.
								* Use class "tt-heading-center" to align tt-Heading to center.
								* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-heading tt-heading-xxlg margin-bottom-8-p anim-fadeinup">
									<h3 class="tt-heading-subtitle">Get in Touch</h3>
									<h2 class="tt-heading-title">Let's Work<br> Together!</h2> <!-- You can use <br> to break a text line if needed -->
								</div>
								<!-- End tt-Heading -->

								<!-- Begin form 
								================ 
								* Use class "tt-form-filled" or "tt-form-minimal" to change form style.
								* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
								-->
								<form id="tt-contact-form" class="tt-form-filled anim-fadeinup">

									<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
									<input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
									<input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your valid email address (where a message will be sent) -->
									<input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
									<!-- End Hidden Required Fields -->

									<div class="tt-row">
										<div class="tt-col-md-6">

											<div class="tt-form-group">
												<label>Your Name <span class="required">*</span></label>
												<input class="tt-form-control" type="text" name="Name" placeholder="" required>
											</div>

										</div> <!-- /.tt-col -->

										<div class="tt-col-md-6">

											<div class="tt-form-group">
												<label>Email address <span class="required">*</span></label>
												<input class="tt-form-control" type="email" name="Email" placeholder="" required>
											</div>

										</div> <!-- /.tt-col -->
									</div> <!-- /.tt-row -->

									<div class="tt-form-group">
										<label>Subject <span class="required">*</span></label>
										<input class="tt-form-control" type="text" name="Subject" placeholder="" required>
									</div>

									<!-- <div class="tt-form-group">
										<label>Select an option <span class="required">*</span></label>
										<select class="tt-form-control" name="option" required>
											<option value="" disabled selected>Please choose an option</option>
											<option value="Say Hello">Say hello</option>
											<option value="New Project">New project</option>
											<option value="Feedback">Feedback</option>
											<option value="Other">Other</option>
										</select>
									</div> -->

									<div class="tt-form-group">
										<label>Your Message <span class="required">*</span></label>
										<textarea class="tt-form-control" rows="5" name="Message" placeholder="" required></textarea>
									</div>

									<small class="tt-form-text"><em>Fields marked with an asterisk (*) are required!</em></small>

									<button type="submit" class="tt-btn tt-btn-primary margin-top-30">
										<div data-hover="Send Message">Send Message</div>
										<span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
									</button>
								</form>
								<!-- End form -->

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