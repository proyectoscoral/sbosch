<?php
$pagina = 4;
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/favicon.png" rel="icon" />
    <!--Title-->
    <title>Metal - Contact</title>
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
            <!-- header -->	
            <!-- page-header -->
            <div class="page-title-wrap typo-white">
                <div class="page-title-wrap-inner section-bg-img" data-bg="images/bg/page-title-bg.jpg">
					<span class="black-overlay"></span>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="page-title-inner">
									<div id="breadcrumb" class="breadcrumb mb-1 mb-lg-2">
                                        <a href="index.html" class="theme-color">Contacto</a>
                                        
                                    </div>
                                    <h1 class="page-title mb-0">Formulario de contacto</h1>                                    
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
					<!-- Contact Section -->
                    <section id="contact-section" class="contact-section pad-bottom-none">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <!-- Col -->
                                <div class="col-lg-4 mb-lg-0 mb-4">
									<div class="div-bg-img b-radius-20" data-bg="images/bg/bg-2.jpg">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-location-pin"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">Localización</h5>
												</div>
												<p class="mb-0">num calle, provincia,<br>pais</p>
											</div>											
										</div>
									</div>
                                </div>
                                <!-- Col -->
                                <div class="col-lg-4 mb-lg-0 mb-4">
                                    <div class="div-bg-img b-radius-20" data-bg="images/bg/bg-3.jpg">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-headphone-alt"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">Telefono</h5>
												</div>
												<a href="tel:+(556)545-5418">4745-5418</a>
												<br>
												<a href="tel:+(556)654-5451">4754-5451</a>
											</div>											
										</div>
									</div>
                                </div>
                                <!-- Col -->
                                <div class="col-lg-4">
                                    <div class="div-bg-img b-radius-20" data-bg="images/bg/bg-4.jpg">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-email"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">Dirección de Email</h5>
												</div>
												<a href="mailto:info@example.com">info@seguridadbosch.com.ar</a>
												<br>
												<a href="mailto:info@metal.com">ventas@seguridadbosch.com.ar</a>
											</div>											
										</div>
									</div>
                                </div>
                            </div>
                            <!-- Row -->
                        </div>
						<!-- Container -->
                    </section>
                    <!-- Contact Section End -->
					<!-- Contact Section -->
                    <section class="contact-form-section form-with-img">
                        <div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-12">                                    
                                    <!-- Contact Form -->
                                    <div class="contact-form-4">
                                        <!-- Form -->
                                        <div class="contact-form-wrap">
                                            <!-- form inputs -->
                                            <form id="contact-form" class="contact-form" action="inc/function.php" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <input id="name" class="form-control" name="name" placeholder="Nombre" data-bv-field="name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <input id="email" class="form-control" name="email" placeholder="Email" data-bv-field="email" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">                                                            
															<input id="phone" class="form-control" name="phone" placeholder="teléfono" data-bv-field="phone" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="contact-message">
                                                            <!-- form group -->
                                                            <div class="form-group">
                                                                <textarea id="message" class="form-control textarea" rows="5" name="mensaje" placeholder="Su mensaje" data-bv-field="message"></textarea>
                                                            </div>
                                                        </div> 
														<!-- form group -->
                                                        <div class="form-group height-zero mb-0">
                                                            <input class="height-zero" type="text" id="hidden-grecaptcha" name="hidden-grecaptcha" value=""/>
                                                        </div>
                                                        <!-- form button -->
                                                        <button type="submit" id="contact-submit" class="btn btn-default mt-0 theme-btn">Enviar ahora</button>
                                                    </div>
                                                </div>
                                                <span class="clearfix"></span>
                                            </form>
											<div class="captcha-parent">
												<div class="g-recaptcha" data-sitekey="6LcuIvEcAAAAAFnQUTIoRRn6Gvc54vbWAf0GSEdP" data-callback="verifyRecaptchaCallback"></div>
											</div>
                                            <!-- form inputs end -->
                                            <p id="contact-status-msg" class="hide"></p>
                                        </div>
                                        <!-- Form End-->
                                    </div>
                                    <!-- contact-form-1 -->
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    <!-- Contact Form Section End -->					
					<!-- Contact Map -->
					<section class="contact-map pad-top-none">
						<div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12"> 
									<!-- Screan Reader Text -->
									<h2 class="screen-reader-text">Map</h2>
									<!-- Container Fluid -->
									<div class="container-fluid pad-none">
										<!-- Map -->
										<div class="map mt-0">
											<div id="site-google-map" class="b-radius-0" style="width:100%;height:400px;" data-map-style="Silver"></div>
										</div>
										<!-- Map -->
									</div>
									<!-- Container Fluid -->
								</div>
								<!-- col -->
							</div>
						</div>	
					</section>
					<!-- Contact Map End -->									
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
    

    <!-- jQuery Lib -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper Js Support for Bootstrap -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Easing Js -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Paroller Js -->
    <script src="js/jquery.paroller.min.js"></script>     
	<!-- Validator Js -->
    <script src="js/validator.min.js"></script>
	<!-- Appear Js -->
	<script src="js/jquery.appear.min.js"></script>
    <!-- Appear Js -->
    <script src="js/smartresize.min.js"></script>
    <!-- Theme Custom Js -->
    <script src="js/custom.js"></script>
    <!-- Google Map Js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtkY02zM_XV3XtSzJbNwJdiA2iuNmP_bI"></script>
    <!-- Google Recaptcha Js-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Google Recaptcha Callback-->
	<script>
		(function( $ ) {	
			"use strict";			
			window.verifyRecaptchaCallback = function (response) {
				$("#hidden-grecaptcha").val(response);
				$(document).find("#hidden-grecaptcha").trigger('input');				
			};
			window.expiredRecaptchaCallback = function () {
				$(document).find("#hidden-grecaptcha").val("").trigger('input')
			}
		})(jQuery);
	</script>
	<script src="js/color-panel.js"></script>
</body>
<!-- Body End -->
<!-- Body End -->
</html>