
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
    <link rel="shortcut icon" href="assets/images/icon.png">
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

    <!-- START ABOUT -->
    <?php
      require "./components/Subscribe.php";
    ?>
    <!-- END ABOUT -->

    <!-- START PORTFOLIO -->
    <?php
      require "./components/Portfolio.php";
    ?>
    <!-- END PORTFOLIO -->

    <!-- START CTA -->
    <?php
      require "./components/Banner.php";
    ?>
    <!-- END CTA -->

    <!-- START PROCESO DE VENTAS -->
    <?php
      require "./components/Process.php";
    ?>
    <!-- END PROCESO DE VENTAS -->

    <!-- START CTA -->
    <?php
      require "./components/Banner2.php";
    ?>
    <!-- END CTA -->

    <!-- START Benefits -->
    <?php
      require "./components/Benefits.php";
    ?>
    <!-- END Benefits -->

    <!-- START CONTACT -->
    <?php
      require "./components/Contact.php";
    ?>
    <!-- END CONTACT -->

    <!-- PARTNER -->
    <?php
      require "./components/Partner.php";
    ?>
    <!-- END PARTNER -->

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
    <!-- counter
    <script src="assets/js/counter.init.js"></script> -->

    <!-- contact -->
    <script src="assets/js/contact.init.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
