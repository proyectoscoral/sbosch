<header>
                <!--Mobile Header-->
                <div class="mobile-header bg-white typo-dark">
                    <div class="mobile-header-inner">
                        <div class="sticky-outer">
                            <div class="sticky-head">
                                <div class="basic-container clearfix">
                                    <ul class="nav mobile-header-items pull-left">
                                        <li class="nav-item"><a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a></li>
                                    </ul>
                                    <ul class="nav mobile-header-items pull-center">
                                        <li>
                                            <a href="index.html" class="img-before"><img src="images/logo1.svg" class="img-fluid changeable-dark" width="103" height="45" alt="Logo"></a>
                                        </li>
                                    </ul>
                                    <ul class="nav mobile-header-items pull-right">
                                        <li class="nav-item"><a href="#" class="img-before overlay-search-switch"><i class="icon-magnifier icons"></i></a></li>
                                    </ul>
                                </div>
                                <!-- .basic-container -->
                            </div>
                            <!-- .sticky-head -->
                        </div>
                        <!-- .sticky-outer -->
                    </div>
                    <!-- .mobile-header-inner -->
                </div>
                <!-- .mobile-header -->
                <!--Header-->
                <div class="header-inner header-1">
                    <!--Topbar-->
                    <div class="topbar full-view-switch semi-dark">
                        <div class="basic-container clearfix typo-dark">
                            <ul class="nav topbar-items pull-left">
                                <li class="nav-item">
                                    <ul class="nav header-info">
                                        <div class="header-address"><span class="ti-headphone-alt theme-color"></span> <a href="tel:+(123) 456-7890">+(0911) 4756-7890</a><span class="ti-email theme-color ms-3"></span> <a href="mailto:info@example.com">info@seguridadbosch.com.ar</a></div>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav topbar-items pull-right">
                                <li class="nav-item">
                                    <div class="social-icons typo-white">
                                        <!-- <a href="#" class="social-fb"><span class="ti-facebook"></span></a>
                                        <a href="#" class="social-twitter"><span class="ti-twitter"></span></a> -->
                                        <a href="#" class="social-instagram"><span class="ti-instagram"></span></a>
                                        <!-- <a href="#" class="social-pinterest"><span class="ti-pinterest"></span></a>
                                        <a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
										<a href="#" class="social-dribble"><span class="ti-dribbble"></span></a> -->
                                    </div>
                                </li>								
                            </ul>
                        </div>
                    </div>
                    <!--Topbar-->
					<!--Sticky part-->
                    <div class="sticky-outer full-dark">
                        <div class="sticky-head">
                            <!--Navbar-->
                            <nav class="navbar">
                                <div class="basic-container clearfix">
                                    <div class="navbar-inner">
										<!--Overlay Menu Switch-->
                                        <ul class="nav navbar-items pull-left">
                                            <li class="list-item">
                                                <a href="index.php" class="logo-general"><img src="images/logo2.svg" class="img-fluid changeable-dark" width="130" height="57" alt="Logo" /></a>
												<a href="index.php" class="logo-sticky"><img src="images/logo2.svg" class="img-fluid changeable-dark" width="133" height="35" alt="Logo" /></a>
                                            </li>
                                        </ul>
										<!-- Menu -->
                                        <ul class="nav navbar-items pull-right">
											<!--List Item-->
                                            <li class="list-item">
                                                <ul class="nav navbar-main theme-main-menu">
                                                    <?php
                                                        switch ($pagina){
                                                            case 1:
                                                                $active1 = 'active';
                                                            break;
                                                            case 2:
                                                                $active2 = 'active';
                                                            break;
                                                            case 3:
                                                                $active3 = 'active';
                                                            break;
                                                            case 4:
                                                                $active4 = 'active';
                                                            break;

                                                        }
                                                      
                                                    ?>
                                                    <li class="<?= $active1 ?> dropdown cus-img-menu dropdown-sub"><a href="index.php">Home</a>
													</li>
                                                    <li class="<?= $active2 ?> dropdown menu-item dropdown-sub"><a href="productos.php">Productos</a>
                                                        <!-- <ul class="dropdown-menu">
															<li><a href="about-us.html">Prot de manos</a></li>
															<li><a href="about-us-2.html">Prot Facial y Craneana</a></li>
															<li><a href="about-us-3.html">Proteccion respiratoria</a></li>
                                                            <li><a href="about-us-3.html">Protec Auditiva</a></li>
                                                            <li><a href="about-us-3.html">Indumentaria</a></li>
                                                            <li><a href="about-us-3.html">Señalizacion</a></li>
                                                            <li><a href="about-us-3.html">Seguridad contra incendio</a></li>
                                                            <li><a href="about-us-3.html">Primeros Auxilios</a></li>
                                                            <li><a href="about-us-3.html">Altura y sujecion</a></li>
                                                            <li><a href="about-us-3.html">Ferreteria</a></li>
														</ul> -->
													</li>
													<li class="<?= $active3 ?> dropdown dropdown-sub pos-static icon-hide-1024"><a href="quienessomos.php">Quienes somos</a>	
													</li>
													
													<li class="<?= $active4 ?> dropdown menu-item dropdown-sub"><a href="contacto.php">Contacto</a>
													</li>				
                                                </ul>
                                            </li>
																					
                                        </ul>
										<!-- Menu -->
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <!--sticky-head-->
                    </div>
                    <!--sticky-outer-->
                </div>
            </header>