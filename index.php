
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

    <!-- START BLOG -->
    <section class="section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2">News</p>
                        <h2 class="text-uppercase">Our Blog</h2>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">Porttitor dolor donec pulvinar tortor nisi quis dapibus tortor commodo sed Pellentesque hendrerit pellentesque libero nec sollicitudin.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-2">
                <div class="col-lg-4">
                    <div class="blog-box box-shadow rounded p-3 mt-4">
                        <div class="blog-img">
                            <img src="images/blog/img-1.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="media mt-4">
                            <div class="blog-date rounded">
                                <h5 class="text-white f-14 font-weight-normal p-2 mb-0">25</h5>
                                <h5 class="bg-dark f-12 font-weight-normal rounded text-white p-2 mb-0 text-uppercase">Jan</h5>
                            </div>
                            <div class="media-body ml-3 mt-2">
                                <a href=""><h5 class="f-18 mb-1">Printer took galley book.</h5></a>
                                <p class="text-muted">Business, Corporate</p>
                            </div>
                        </div>

                        <p class="text-muted mt-2">Pellensque pharetra diamt tricies pharetra tortor in tha starc amet semper smart dapibus tortor in maximus.</p>
                        <div class="mt-3">
                            <a href="" class="read-more">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box box-shadow rounded p-3 mt-4">
                        <div class="blog-img">
                            <img src="images/blog/img-2.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="media mt-4">
                            <div class="blog-date rounded">
                                <h5 class="text-white f-14 font-weight-normal p-2 mb-0">12</h5>
                                <h5 class="bg-dark f-12 font-weight-normal rounded text-white p-2 mb-0 text-uppercase">Feb</h5>
                            </div>
                            <div class="media-body ml-3 mt-2">
                                <a href=""><h5 class="f-18 mb-1">Enjoy pleasure aying cones.</h5></a>
                                <p class="text-muted">Design, Designer</p>
                            </div>
                        </div>

                        <p class="text-muted mt-2">Semper felis pharetr ultricies justo ornare eget consectetur venenatis they at pharetra metus eleifend rutrum pulvinar</p>
                        <div class="mt-3">
                            <a href="" class="read-more">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box box-shadow rounded p-3 mt-4">
                        <div class="blog-img">
                            <img src="images/blog/img-3.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="media mt-4">
                            <div class="blog-date rounded">
                                <h5 class="text-white f-14 font-weight-normal p-2 mb-0">31</h5>
                                <h5 class="bg-dark f-12 font-weight-normal rounded text-white p-2 mb-0 text-uppercase">Jun</h5>
                            </div>
                            <div class="media-body ml-3 mt-2">
                                <a href=""><h5 class="f-18 mb-1">Welmed every pain avoided.</h5></a>
                                <p class="text-muted">Business, Corporate</p>
                            </div>
                        </div>

                        <p class="text-muted mt-2">Curabitur labore pharetra quis lacia dolor convais honcus nulla porta stiyo vitae a eros felis iaculis in imperdiet.</p>
                        <div class="mt-3">
                            <a href="" class="read-more">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END BLOG -->

    <!-- START CTA -->
    <section class="section bg-cta">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-cebter">
                        <h2 class="text-white text-center">Become a part of Xeril bussiness community today</h2>
                        <p class=" text-white text-center mt-3">Molestias excepturi sint occaecati cupiditate non provident</p>
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-primary mt-2">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2">Contact</p>
                        <h2 class="text-uppercase">Get In Touch</h2>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">Porttitor dolor donec pulvinar tortor nisi quis dapibus tortor commodo sed Pellentesque hendrerit pellentesque libero nec sollicitudin.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-2">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div style="background-image: url('images/features/map.png'); background-repeat: no-repeat">

                            <div class="media">
                                <i class="mdi mdi-map-marker text-primary h4"></i>
                                <div class="media-body ml-4">
                                    <p class="text-muted">2276 Lynn Ogden Lane Beaumont
                                        <br>Lodgeville Road TX 77701</p>
                                </div>
                            </div>

                            <div class="media mt-4">
                                <i class="mdi mdi-phone text-primary h4"></i>
                                <div class="media-body ml-4">
                                    <p class="text-muted">Phone: +71 612-234-4023
                                        <br>Fax: +954-627-9727</p>
                                </div>
                            </div>

                            <div class="media mt-4">
                                <i class="mdi mdi-calendar-clock text-primary h4"></i>
                                <div class="media-body ml-4">
                                    <p class="text-muted">Monday-friday: 9.00-19.00
                                        <br>Saturday-Sunday: Holiday</p>
                                </div>
                            </div>

                            <div class="media mt-4">
                                <i class="mdi mdi-email text-primary h4"></i>
                                <div class="media-body ml-4">
                                    <p class="text-muted">Email: FredVWeaver@rhyta.com</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="custom-form">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input name="number" id="number" type="number" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <textarea name="comments" id="comments" rows="5" class="form-control" placeholder="Your message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-3">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <footer class="bg-footer">
        <div class="container">
            <div class="footer-subscribe py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <dov class="mt-3">
                            <h5 class="text-white mt-2 pt-1">Be in the know with the letest and greatest from <span class="text-primary text-uppercase">Xeril</span></h5>
                        </dov>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-subcribe text-right">
                            <form action="#">
                                <input placeholder="Your Email Address" type="text">
                                <button type="submit" class="btn btn-primary"><i class="mdi mdi-bell-ring"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-lg-3">
                    <div class="mt-2">
                        <h6 class="text-white text-uppercase f-16">Xeril</h6>
                        <p class="text-white-50 mt-3 pt-2 mb-0 ">Semper nibh a dignissim Integer cursus tempsed quis justo molis starm the consectetur.</p>
                        <div class="mt-4">
                            <ul class="list-inline footer-social mb-0">

                                <li class="list-inline-item">
                                    <a href="#" class="rounded">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#" class="rounded">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#" class="rounded">
                                        <i class="mdi mdi-pinterest"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#" class="rounded">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mt-2 pl-0 pl-lg-5">
                        <h6 class="text-white text-uppercase f-16">Resources</h6>
                        <ul class="list-unstyled footer-link mt-3 mb-0">
                            <li><a href="">Monitoring Grader </a></li>
                            <li><a href="">Video Tutorial</a></li>
                            <li><a href="">Term &amp; Service</a></li>
                            <li><a href="">Tulsy API</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="mt-2">
                        <h6 class="text-white text-uppercase f-16">Help</h6>
                        <ul class="list-unstyled footer-link mt-3 mb-0">
                            <li><a href="">Sign Up </a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Terms of Services</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mt-2">
                        <h6 class="text-white text-uppercase f-16">Latest news</h6>
                        <div class="mt-3 mb-0">
                            <div class="">
                                <div class="media">
                                    <i class="mdi mdi-twitter text-white-50 float-left"></i>
                                    <div class="media-body">
                                        <p class="text-white-50 pl-3">Pleasures have to repudiated annoyances accepted therefore always holds chooses enjoy a pleasure consequences.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="media">
                                    <i class="mdi mdi-twitter text-white-50 float-left"></i>
                                    <div class="media-body">
                                        <p class="text-white-50 pl-3">Greater pleasures el esndures pains avoid welcomed avoided pariatu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- FOOTER-ALT -->
    <div class="footer-alt pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="text-white-50 mb-0">© 2020 Xeril. Design by Themesdesign</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
