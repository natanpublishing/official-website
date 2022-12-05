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
		<title>Tentang | <?php echo $sitetitle ?></title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Meta Tag -->
		<meta name="title" content="Tentang | <?php echo $sitetitle ?>">
		<meta name="description" content="Tentang <?php echo $sitetitle ?>, <?php echo $sitedescription ?>.">
		<meta name="robots" content="index, nofollow">
		<meta name="author" content="<?php echo $sitetitle ?>">
		
		<!-- Meta Share -->
		<meta property="og:title" content="Tentang | <?php echo $sitetitle ?>">
		<meta property="og:image" content="<?php echo $siteurl ?>assets/img/thumb.jpg">
		<meta property="og:description" content="Tentang <?php echo $sitetitle ?>, <?php echo $sitedescription ?>.">
		<meta property="og:url" content="<?php echo $siteurl ?>about/">

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
												<li class="active"><a href="<?php echo $siteurl ?>about/">Tentang</a></li>
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
					<div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-caption-subtitle">
									<div class="ph-appear">Tentang Kami</div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Tentang</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Tentang</div>
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
							<div class="tt-section-inner tt-wrap">

								<div class="tt-row">
									<div class="tt-col-lg-9">

										<div class="text-xlg anim-fadeinup">

											<!-- Begin tt-Heading 
											====================== 
											* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
											* Use class "tt-heading-stroke" to enable stroke style.
											* Use class "tt-heading-center" to align tt-Heading to center.
											* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
											-->
											<div class="tt-heading tt-heading-lg margin-bottom-60">
												<!-- <h3 class="tt-heading-subtitle">Subtitle</h3> -->
												<h2 class="tt-heading-title">Yo! Halo!</h2> <!-- You can use <br> to break a text line if needed -->
											</div>
											<!-- End tt-Heading -->

											<p>Kami adalah agensi kreatif digital yang berada di Jakarta, Indonesia. Didirikan pada tahun 2020, kami telah menangani berbagai proyek pada perusahaan yang baru merintis maupun pemerintah.</p>
											<p>Layanan yang kami berikan mencakup berbagai hal dalam industri kreatif digital, seperti branding, design & video, situs web, aplikasi, manajemen sosial media, SEO, dan masih banyak lagi.</p>
											<p>Tertarik bekerjasama dengan kami?<br>Hubungi kami segera!</p>
										</div>

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-3">
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
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- =============================
								///// Begin content carousel /////
								==================================
								* Use class "cc-shifted" to enable shifted style (no effect on small screens!).
								* Use class "cursor-drag" to enable cursor drag on carousel hover ("data-simulate-touch" attribute must be enabled!).
								* Use class "cc-scale-down" to enable scale down animation on carousel click.
								* Use class "cc-pagination-outside" to bring pagination outside.
								* Use class "cc-hide-pagination" to hide pagination (for desktop only!).
								* Use class "cc-hide-navigation" to hide navigation arrows.
								* Available data attributes:
										data-speed="900"......................(milliseconds)
										data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
										data-simulate-touch="true"............(true/false)
										data-loop="true"......................(true/false)
										data-pagination-type="bullets"........(bullets/fraction/progressbar)
								-->
								<div class="tt-content-carousel cursor-drag cc-scale-down cc-hide-pagination cc-pagination-outside cc-hide-navigation" data-loop="true" data-simulate-touch="true" data-speed="900">

									<!-- Begin swiper container -->
									<div class="swiper">

										<!-- Begin swiper wrapper (required) -->
										<div class="swiper-wrapper">

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
														<img class="tt-cc-image swiper-lazy" src="<?php echo $siteurl ?>assets/img/about1.jpg" data-src="<?php echo $siteurl ?>assets/img/about1.jpg" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
														<img class="tt-cc-image swiper-lazy" src="<?php echo $siteurl ?>assets/img/about2.jpg" data-src="<?php echo $siteurl ?>assets/img/about2.jpg" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
														<img class="tt-cc-image swiper-lazy" src="<?php echo $siteurl ?>assets/img/about3.jpg" data-src="<?php echo $siteurl ?>assets/img/about3.jpg" alt="Image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

										</div>
										<!-- End swiper wrapper -->

									</div>
									<!-- End swiper container -->


									<!-- Begin content carousel navigation (arrows) 
									=================================================== -->
									<div class="tt-cc-nav-prev">
										<div class="tt-cc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
									</div>
									<div class="tt-cc-nav-next">
										<div class="tt-cc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
									</div>
									<!-- End content carousel navigation -->

									<!-- Content carousel pagination -->
									<div class="tt-cc-pagination hide-cursor"></div>

								</div>
								<!-- End content carousel -->

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

								<!-- Begin page nav 
								==================== 
								* Use class "tt-pn-center" to align page nav to center.
								* Use class "tt-pn-stroke" to enable title stroke style.
								-->
								<div class="tt-page-nav tt-pn-stroke tt-pn-center">
									<a href="<?php echo $siteurl ?>service/" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
										<div class="tt-pn-title">Layanan</div>
										<div class="tt-pn-hover-title">Layanan</div>
									</a> <!-- /.tt-pn-link -->
									<div class="tt-pn-subtitle anim-fadeinup">Lihat Layanan</div>
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