<?php
$pagina = 3;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/logo2.png" rel="icon">
    <!--Title-->
    <title>Seguridad Bosch</title>
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap Icons -->
    <link rel="stylesheet" href="css/bootstrap-icons.css">
	<!-- Owl Slider -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Color Panel -->
    <link href="css/color_panel.css" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" href="css/color-schemes/red.css" id="changeable-colors"> 
	<!-- Main Style -->
    <link rel="stylesheet" href="css/style.css" class="main-style">
</head>
<!--Body Start-->
<body data-res-from="1025">
	<div id="page">
	<!--Page Loader-->
	<div class="page-loader"></div>
    <!--Zmm Wrapper-->
    <div class="zmm-wrapper">
        <a href="#" class="zmm-close close"></a>
        <div class="zmm-inner bg-white typo-dark">
            <div class="text-center mobile-logo-part margin-bottom-30">
                 <a href="index.html" class="img-before"><img src="images/logo-dark.png" class="img-fluid changeable-dark" width="115" height="50" alt="Logo"></a>
            </div>
            <div class="zmm-main-nav">
            </div>            
			<div class="search-form-wrapper margin-top-30">
			    <form class="search-form" role="search">
			        <div class="input-group add-on">
			            <input class="form-control" placeholder="Search for.." name="srch-term" type="text">
			            <div class="input-group-btn">
			                <button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
			            </div>
			        </div>
			    </form>
			</div>
        </div>
    </div>
    <!-- Overlay Search -->
    <div class="overlay-search text-center hide">
		<a href="#" class="close close-light overlay-search-close"></a>
		<div class="search-form-wrapper">
			<form class="navbar-form search-form sliding-search-form" role="search">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
    <!-- Main wrapper-->
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            <!-- header -->	
			<?php
            include ('header.php');
			?>


            <!-- page-header -->
            <div class="page-title-wrap typo-white">
                <div class="page-title-wrap-inner section-bg-img" data-bg="images/bg/page-title-bg.jpg">
					<span class="black-overlay"></span>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="page-title-inner">
									<div id="breadcrumb" class="breadcrumb mb-1 mb-lg-2">
                                        <a href="index.html" class="theme-color">Quienes Somos</a>
                                      
                                    </div>
                                    <h1 class="page-title mb-0">La Empresa</h1>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-header -->
            <!-- Page Content -->
            <div class="content-wrapper pad-none">
                <div class="content-inner">					
					<!-- Portfolio Section -->
					<!-- Team Section -->
					<section id="title-section" class="tilte-section pad-top-95 full-dark">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
								<div class="offset-md-2 col-md-8">
								    <div class="title-wrap  mb-4">
								        <div class="section-title text-center">								            
                                            <h2 class="section-title margin-top-5 mb-0">Seguridad <span class="theme-color">Bosch</span> </h2>
								        </div>
										<p>En Seguridad Bosch, nos dedicamos a proporcionar soluciones de seguridad empresarial de alta calidad para proteger a nuestros clientes y sus activos más valiosos. Desde nuestra fundación, hemos sido líderes en la industria gracias a nuestra experiencia, conocimientos y compromiso con la excelencia.<br>

                                        Nos enorgullece ofrecer una amplia gama de productos y servicios, desde Seguridad contra incendios hasta indumentaria y protección.<br>

                                        En Seguridad Bosch, entendemos que cada empresa tiene necesidades únicas en cuanto a seguridad y por eso nos esforzamos por garantizar la satisfacción de cada uno de nuestros clientes.<br>

                                        Gracias por elegir Seguridad Bosch para sus necesidades de seguridad empresarial. Esperamos poder ayudarlo a proteger su negocio y mantenerlo seguro en todo momento.</p>
								    </div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<!-- about wrap -->
									<div class="about-wrap relative">
										<div class="about-wrap-inner">
											<!-- about details -->
											<div class="about-wrap-details">
												<!-- about button -->
												<div class="text-center">
													<div class="about-img">
														<img src="images/about-us/tab-screen.png" class="" alt="about-img">
													</div>
													<!-- .col -->
												</div>
											</div>
											<!-- about details End-->
										</div>
									</div>
									<!-- about wrap end -->
								</div>
							</div>
						</div>
					</section>
					<!-- Team Section End -->
					<!-- Portfolio Section End -->
					
                </div>
            </div>
        </div>
    <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->

    <!-- Footer -->
    <?php
	include('footer.php');
	?>
    <!-- Footer -->
	</div>
    

    <!-- jQuery Lib -->
    <script src="js/jquery.min.js"></script>
	<!-- Popper Js Support for Bootstrap -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Easing Js -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Carousel Js Code -->
    <script src="js/owl.carousel.min.js"></script> 
    <!-- Paroller Js -->
    <script src="js/jquery.paroller.min.js"></script>
    <!-- Isotope Js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup Js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Validator Js -->
    <script src="js/validator.min.js"></script>
    <!-- Smart Resize Js -->
    <script src="js/smartresize.min.js"></script>
    <!-- Appear Js -->
    <script src="js/jquery.appear.min.js"></script>
    <!-- Theme Custom Js -->
    <script src="js/custom.js"></script>
	<!-- Google Map Js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtkY02zM_XV3XtSzJbNwJdiA2iuNmP_bI"></script>
    <script src="js/color-panel.js"></script>	
	<!-- Scripts -->	
</body>
<!-- Body End -->
<!-- Body End -->
</html>