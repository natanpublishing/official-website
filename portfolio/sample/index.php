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
						<img src="assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
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
								<a href="index.html">
									<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
									<img src="assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
									<img src="assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo"> <!-- logo dark -->
								</a>
							</div>
							<!-- End logo -->

						</div> <!-- /.tt-header-col -->

						<div class="tt-header-col">

							<!-- Begin overlay menu toggle button -->
							<div id="tt-ol-menu-toggle-btn-wrap">
								<div class="tt-ol-menu-toggle-btn-text-wrap hide-cursor">
									<div class="tt-ol-menu-toggle-btn-text">
										<span class="text-menu" data-hover="Open">Menu</span>
										<span class="text-close">Close</span>
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
								<div class="tt-ol-menu-ghost">Explore</div>
								<div class="tt-ol-menu-holder">
									<div class="tt-ol-menu-inner tt-wrap">
										<div class="tt-ol-menu-content">

											<!-- Begin menu list -->
											<ul class="tt-ol-menu-list">

												<li><a href="landing-page.html">Home</a></li>

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap active">
													<div class="tt-ol-submenu-trigger">
														<a href="#">Portfolio</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Portfolio List</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="portfolio-list.html">Portfolio List v.1</a></li>
																		<li><a href="portfolio-list-alter.html">Portfolio List v.2</a></li>
																		
																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Portfolio Grid</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="portfolio-grid-creative.html">Grid Creative</a></li>
																		<li><a href="portfolio-grid-modern.html">Grid Modern</a></li>
																		<li><a href="portfolio-grid-portrait-mode.html">Grid Portrait Mode</a></li>
																		<li><a href="portfolio-grid-classic.html">Grid Classic</a></li>
																		
																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Portfolio Interactive</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="portfolio-interactive.html">Interactive Classic</a></li>
																		<li><a href="portfolio-interactive-center.html">Interactive Senter</a></li>
																		<li><a href="portfolio-interactive-inline.html">Interactive Inline</a></li>
																		
																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Slider &amp; Carousel</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="portfolio-fullscreen-slider.html">Fullscreen Slider</a></li>
																		<li><a href="portfolio-fullscreen-carousel.html">Fullscreen Carousel</a></li>
																		
																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<li><a href="portfolio-one-column.html">One Column</a></li>
															<li><a href="elements-classic-menu.html">Classic Menu</a></li>

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<div class="tt-ol-submenu-trigger">
														<a href="#">About</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<li><a href="about-us.html">About Us</a></li>
															<li><a href="about-me.html">About Me</a></li>

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<div class="tt-ol-submenu-trigger">
														<a href="#">Blog</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Blog List</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="blog-classic.html">Blog Classic</a></li>
																		<li><a href="blog-classic-sidebar.html">Classic Sidebar</a></li>
																		<li><a href="blog-compact.html">Compact List</a></li>
																		<li><a href="blog-archive.html">Blog Archive</a></li>
																		
																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Blog Post</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="blog-post.html">Single Post</a></li>
																		<li><a href="blog-post-classic-sidebar.html">Classic Sidebar</a></li>
																		<li><a href="blog-post-no-featured-image.html">No Featured Image</a></li>
																		
																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<div class="tt-ol-submenu-trigger">
														<a href="#">Contact</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<li><a href="contact.html">Contact Form</a></li>
															<li><a href="contact-simple.html">Contact Simple</a></li>

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

											</ul>
											<!-- End menu list -->

											<!-- Begin overlay menu social links 
											===================================== -->
											<ul class="tt-ol-menu-social">
												<li><h6 class="tt-ol-menu-social-heading">Social Links:</h6></li>
												<li><a href="https://www.facebook.com/themetorium" target="_blank" rel="noopener">Facebook</a></li>
												<li><a href="https://twitter.com/Themetorium" target="_blank" rel="noopener">Twitter</a></li>
												<li><a href="https://www.youtube.com/" target="_blank" rel="noopener">Youtube</a></li>
												<li><a href="https://dribbble.com/Themetorium" target="_blank" rel="noopener">Dribbble</a></li>
												<li><a href="https://www.behance.net/Themetorium" target="_blank" rel="noopener">Behance</a></li>
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
					<div id="page-header" class="ph-full ph-bg-image ph-image-cover-3 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<img src="assets/img/page-header/project-ph/project-ph-1.jpg" alt="Image">
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption">
								<div class="ph-categories">
									<div class="ph-categories-inner ph-appear">
										<div class="ph-category">People</div>
										<!-- <div class="ph-category">Varia</div> -->
									</div>
								</div> <!-- /.ph-categories -->
								<h1 class="ph-caption-title">
									<div class="ph-appear">Elegant<br> Women</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Elegant Women</div>
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

						<!-- Begin page header share (share buttons are for design purposes only!) 
						============================= -->
						<div class="ph-share ph-appear">
							<div class="ph-share-inner">
								<div class="ph-share-trigger">
									<div class="ph-share-text">Share</div>
									<div class="ph-share-icon"><i class="fas fa-share"></i></div>
								</div> <!-- /.ph-share-trigger -->

								<div class="social-buttons">
									<ul>
										<li><a href="#" class="magnetic-item" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
									</ul>
								</div> <!-- /.social-buttons -->
							</div> <!-- /.ph-share-inner -->
						</div>
						<!-- End page header share -->
						
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
						<div class="tt-section padding-top-xlg-180 padding-left-sm-3-p padding-right-sm-3-p">
							<div class="tt-section-inner tt-wrap">

								<div class="tt-row">
									<div class="tt-col-lg-4 padding-right-md-5-p">

										<!-- Begin tt-Heading 
										====================== 
										* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
										* Use class "tt-heading-stroke" to enable stroke style.
										* Use class "tt-heading-center" to align tt-Heading to center.
										* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
										-->
										<div class="tt-heading tt-heading-xsmm margin-bottom-30 anim-fadeinup">
											<h2 class="tt-heading-title">About the<br class="hide-from-lg"> Project</h2> <!-- You can use <br> to break a text line if needed -->
											<!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
										</div>
										<!-- End tt-Heading -->

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-8">

										<div class="anim-fadeinup">
											<p>Whole every miles as tiled at seven or. Wished he entire esteem mr oh by. Possible bed you pleasure civility boy elegance ham. He prevent request by if in pleased. Picture too and concern has was comfort. Ten difficult resembled eagerness nor. Same park bore on be. Warmth his law design say are person. Welcomed humoured rejoiced.</p>
										</div>

										<!-- Begin project info list
										============================= -->
										<div class="project-info-list anim-fadeinup margin-top-40">
											<ul>
												<li>
													<div class="pi-list-heading">Client</div>
													<div class="pi-list-cont">Themetorium</div>
												</li>
												<li>
													<div class="pi-list-heading">Year</div>
													<div class="pi-list-cont">2022</div>
												</li>
												<li>
													<div class="pi-list-heading">Role</div>
													<div class="pi-list-cont">Photographer</div> <!-- Describe in a few words -->
												</li>
												<li>
													<div class="pi-list-heading">Website</div>
													<div class="pi-list-cont"><a href="https://themetorium.net" target="_blank" rel="noopener">Visit site<span class="pi-list-icon"><i class="fas fa-arrow-right"></i></span></a></div>
												</li>
											</ul>
										</div>
										<!-- End project info list -->

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
						<div class="tt-section no-padding-bottom">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin tt-Gallery (works combined with tt-Ggrid!)
								======================
								* Use class "ttga-hover" to enable gallery item hover effect (behavior depends on "ttgr-gap-*" classes below).
								--> 
								<div class="tt-gallery ttga-hover">

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
									<div class="tt-grid ttgr-gap-6 ttgr-not-cropped ttgr-shifted">

										<!-- Begin tt-Grid items wrap 
										============================== -->
										<div class="tt-grid-items-wrap isotope-items-wrap lightgallery">

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item">
												<div class="ttgr-item-inner">

													<!-- Begin tt-Gallery item
													=========================== -->
													<a href="assets/img/portfolio/single-project/project-1/project-1-1.jpg" class="tt-gallery-item lg-trigger" data-cursor="View">
														<div class="tt-gallery-item-inner">
															<div class="tt-gallery-image-wrap">
																<figure class="tt-gallery-image ttgr-height">
																	<img class="anim-image-parallax" src="assets/img/portfolio/single-project/project-1/project-1-1.jpg" alt="image">
																</figure> <!-- /.tt-gallery-image -->
															</div> <!-- /.tt-gallery-image-wrap -->
														</div> <!-- /.tt-gallery-item-inner -->
													</a>
													<!-- End tt-Gallery item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item">
												<div class="ttgr-item-inner">

													<!-- Begin tt-Gallery item 
													=========================== -->
													<a href="assets/img/portfolio/single-project/project-1/project-1-2.jpg" class="tt-gallery-item lg-trigger" data-cursor="View" data-sub-html="Yes, you can use image captions. :)">
														<div class="tt-gallery-item-inner">
															<div class="tt-gallery-image-wrap">
																<figure class="tt-gallery-image ttgr-height">
																	<img class="anim-image-parallax" src="assets/img/portfolio/single-project/project-1/project-1-2.jpg" alt="image">
																</figure> <!-- /.tt-gallery-image -->
															</div> <!-- /.tt-gallery-image-wrap -->
														</div> <!-- /.tt-gallery-item-inner -->
													</a>
													<!-- End tt-Gallery item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item">
												<div class="ttgr-item-inner">

													<!-- Begin tt-Gallery item 
													=========================== -->
													<a href="assets/img/portfolio/single-project/project-1/project-1-3.jpg" class="tt-gallery-item lg-trigger" data-cursor="View">
														<div class="tt-gallery-item-inner">
															<div class="tt-gallery-image-wrap">
																<figure class="tt-gallery-image ttgr-height">
																	<img class="anim-image-parallax" src="assets/img/portfolio/single-project/project-1/project-1-3.jpg" alt="image">
																</figure> <!-- /.tt-gallery-image -->
															</div> <!-- /.tt-gallery-image-wrap -->
														</div> <!-- /.tt-gallery-item-inner -->
													</a>
													<!-- End tt-Gallery item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

										</div>
										<!-- End tt-Grid items wrap  -->

									</div>
									<!-- End tt-Grid -->

								</div>
								<!-- End tt-Gallery -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-bottom-xlg-180">
							<div class="tt-section-inner tt-wrap max-width-900 text-center">

								<div class="anim-fadeinup text-xlg">
									<p>Wise busy past both park when an ye no. Nay likely her length sooner thrown sex lively income. The expense windows adapted sir. Wrong widen drawn ample eat off doors money.</p>
								</div>

								<a href="https://themetorium.net" class="tt-btn tt-btn-primary margin-top-20 anim-fadeinup" target="_blank" rel="noopener">
									<div data-hover="Read More">Read More</div>
									<span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
								</a>

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section no-padding">
							<div class="tt-section-inner">

								<!-- Begin next project 
								======================== 
								* Use class "tt-np-stroke" to enable caption title stroke style. 
								* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). No effect with class "tt-np-image-is-light"!
								* Use class "tt-np-image-is-light" if needed, it makes the elements dark and more visible if you use a very light image.
								-->
								<div class="tt-next-project pn-image-cover-3">
									
									<!-- Use if destination page contains page header image -->
									<div class="tt-np-image"> 
										<img src="assets/img/portfolio/1920/portfolio-2.jpg" alt="image">
									</div>

									<div class="tt-np-caption">
										<div class="tt-np-subtitle">Next Project</div>
										<h2 class="tt-np-title">
											<a href="single-project-2.html" data-cursor="View<br> Project">The Chase</a> <!-- You can use <br> to break a text line if needed -->
										</h2>
									</div> <!-- /.tt-np-caption -->

									<div class="tt-np-ghost">Next</div>
								</div>
								<!-- End next project -->

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