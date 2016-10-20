<?php require_once __DIR__ .'/../vendor/autoload.php';?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <!-- meta data -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- title and favicon -->

    <title>SB Custom :: Boutique Guitar and Bass Pickups - Custom Guitars and Basses</title>
    <link rel="icon" href="/assets/img/icon/fav_icon.gif">

    <!--necessary stylesheets -->

    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/popup.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/owl.theme.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/sbcustom.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/pickups.css">

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

 <div class="row">

        <div class="content-container col-md-12 col-sm-12">

            <!--( A ) Portfolio -->

            <div class="portfolio clearfix full-height">
                <h2 class="small-heading-silver">Gallery</h2>

                <div class="row">
                    <div class="col-md-7 col-md-offset-1 col-xs-7 col-xs-offset-1">
                        <div class="project-container">
                            <div class="row">
                                <!-- Portfolio Control Buttons [ END ] -->
                                <div id="projects" class="projet-items clearfix">
                                    <?php
                                    $proj = new SBCustom\Porfolio();
                                    $proj->setImageFolder('/assets/images/gallery/');
                                    $proj->setId("duarte");
                                    $proj->setCaption("Duarte Figueira 70<sup>th</sup> Anniversary");
                                    $proj->setProjectType("guitar");
                                    $proj->setImageFront("duarte.png");
                                    $proj->setImageBack("duarteback.png");
                                    $proj->setProjectText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed finibus ex. Cras ac sollicitudin quam, sed finibus ipsum. Maecenas sed dolor ut dolor maximus facilisis. Donec dapibus purus orci, congue sodales leo volutpat ultricies. Aenean semper sodales orci et cursus. Donec elementum nisl at facilisis eleifend. Ut fermentum, sapien ac fringilla efficitur, urna odio auctor mauris, eu pretium massa orci non ligula. Curabitur id lectus sit amet libero efficitur pretium. Vestibulum nec mattis dolor, rutrum vehicula ipsum. Phasellus quis lorem vitae erat venenatis placerat. Vivamus eget velit venenatis, placerat odio nec, pellentesque magna. Fusce vitae dui mi. In tincidunt orci ullamcorper erat elementum, eu facilisis erat facilisis. Sed nec dolor ante. Morbi sed finibus ex. Quisque vestibulum orci at placerat efficitur.");
                                    echo $proj->render();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "../partials/footer.phtml" ?>
            </div>
        </div>
    </div>
<script type="text/javascript" src="../assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/modernizr.js"></script>
<script type="text/javascript" src="../assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.popup.min.js"></script>
<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../assets/js/contact.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script type="text/javascript" src="../assets/js/sbcustom.js"></script>

</body>
</html>