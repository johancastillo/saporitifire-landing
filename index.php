
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Saporitifire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/icon.ico">
    <!-- css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https: //fonts.googleapis.com/css2? family = Raleway: wght @ 500 & display = swap "rel =" stylesheet ">

    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!--Navbar Start-->
    <?php
      require "./components/Navigation.php";
    ?>
    <!-- Navbar End -->

    <!-- END HOME -->
    <?php
      require "./components/Slider.php";
    ?>
    <!-- END HOME -->

    <!-- START ABOUT -->
    <?php
      require "./components/About.php";
    ?>
    <!-- END ABOUT -->

    <!-- START PORTFOLIO -->
    <?php
      require "./components/Portfolio.php";
    ?>
    <!-- END PORTFOLIO -->

    <!-- START COUNTER -->
    <section class="section bg-light">
        <div class="container">
            <div class="row vertical-content">
                <div class="col-lg-6">
                    <div class="counter-box">
                        <div class="col-lg-12">
                            <h4>Our Achivements</h4>
                            <p class="text-muted mt-2">Porttitor dolor donec pulvinar tortor nisi quis dapibus tortor commodo Pellentesque hendrerit pellentesque libero nec sollicitudin.</p>

                            <div class="mt-4">
                                <div class="row" id="counter">

                                    <div class="col-lg-6">
                                        <div class="counter-box mt-4">
                                            <div class="media">
                                                <div class="counter-icon">
                                                    <i class="mdi mdi-heart"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h4 class="counter-value" data-count="485">0</h4>
                                                    <p class="text-muted">Happy Clients</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="counter-box mt-4">
                                            <div class="media">
                                                <div class="counter-icon">
                                                    <i class="mdi mdi-layers"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h4 class="counter-value" data-count="536">0</h4>
                                                    <p class="text-muted">Projects Compleated</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="counter-box mt-4">
                                            <div class="media">
                                                <div class="counter-icon">
                                                    <i class="mdi mdi-cloud-download"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h4 class="counter-value" data-count="1652">0</h4>
                                                    <p class="text-muted mb-0">Files Downloaded</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="counter-box mt-4">
                                            <div class="media">
                                                <div class="counter-icon">
                                                    <i class="mdi mdi-code-not-equal-variant"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h4 class="counter-value" data-count="14652">0</h4>
                                                    <p class="text-muted mb-0">Liens Of Code</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="images/features/img-2.jpg" class="img-fluid box-shadow-lg rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COUNTER -->


    <!-- START PRICING -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2">Offers</p>
                        <h2 class="text-uppercase">Our Pricing</h2>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">Porttitor dolor donec pulvinar tortor nisi quis dapibus tortor commodo sed Pellentesque hendrerit pellentesque libero nec sollicitudin.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-2">
                <div class="col-lg-4">
                    <div class="pricing-box bg-white box-shadow text-center p-5 mt-4 rounded">
                        <h5 class="text-uppercase">Classic</h5>
                        <h1 class="mt-4 pt-2"><sup class="h3">$</sup> 27 <span class="text-primary f-16">/Week</span></h1>
                        <div class="pricing-features mt-4 pt-3">
                            <p>Customizad Plans</p>
                            <p>Billing Report</p>
                            <p>Access to Asana</p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-primary w-100">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box bg-white box-shadow text-center p-5 mt-4 rounded">
                        <div class="pricing-label">
                            <h5 class="text-white f-16">New</h5>
                        </div>

                        <h5 class="text-uppercase">Popular</h5>
                        <h1 class="mt-4 pt-2"><sup class="h3">$</sup> 79 <span class="text-primary f-16">/Month</span></h1>
                        <div class="pricing-features mt-4 pt-3">
                            <p>Customizad Plans</p>
                            <p>Billing Report</p>
                            <p>Access to Asana</p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-primary w-100">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box bg-white box-shadow text-center p-5 mt-4 rounded">
                        <h5 class="text-uppercase">Ultimate</h5>
                        <h1 class="mt-4 pt-2"><sup class="h3">$</sup> 99 <span class="text-primary f-16">/Years</span></h1>
                        <div class="pricing-features mt-4 pt-3">
                            <p>Customizad Plans</p>
                            <p>Billing Report</p>
                            <p>Access to Asana</p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-primary w-100">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRICING -->


    <!-- START CTA -->
    <?php
      require "./components/Banner.php";
    ?>
    <!-- END CTA -->

    <!-- START CONTACT -->
    <?php
      require "./components/Contact.php";
    ?>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <?php
      require "./components/Footer.php";
    ?>
    <!-- END FOOTER -->

    <!-- FOOTER-ALT -->
    <?php
      require "./components/FooterAlt.php";
    ?>
    <!-- END FOOTER-ALT -->

    <!-- javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrollspy.min.js"></script>
    <!-- Portfolio -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <!-- counter -->
    <script src="assets/js/counter.init.js"></script>
    <!-- contact -->
    <script src="assets/js/contact.init.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
