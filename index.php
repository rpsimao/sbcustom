<?php require_once __DIR__ . '/vendor/autoload.php';?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <!-- meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="SB Custom Site">
    <meta name="author" content="Ricardo Simão">
    <!-- title and favicon -->
    <title>SB Custom :: Boutique Guitar and Bass Pickups - Custom Guitars and Basses</title>
    <link rel="icon" href="assets/img/icon/fav_icon.gif">
    <!--necessary stylesheets -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/popup.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.theme.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/sbcustom.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/pickups.min.css">
    <link type="text/css" rel="stylesheet" href="assets/sbcustom-icons/sbcustom-icons.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]>
		<style>
		    .flip-container:hover .back,
			.flip-container.hover .back {
			    backface-visibility: visible !important;
			}
		</style>
	<![endif]-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-85357785-1', 'auto');ga('send', 'pageview');
    </script>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- home-page -->
    <?php include_once ("partials/home.phtml"); ?>
    <div class="close-btn"></div>
    <?php include_once ("partials/guitarpickups.phtml") ?>
    <?php include_once ("partials/basspickups.phtml") ?>
    <?php include_once("partials/customguitarbass.phtml") ?>
    <?php include_once ("partials/premium.phtml") ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.popup.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/contact.min.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>
    <script type="text/javascript" src="assets/js/sbcustom.min.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5808dcd535bea28e"></script>


</body>
</html>