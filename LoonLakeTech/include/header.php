<?php
session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        <?php 
            //Check if the object has actually been used. 
            try {
                echo $header->title; 
            }
            catch(Exception $e)
            {
                echo "<br/><br/>Sorry an error has occured :(";
            }
        ?>
    </title>
    <!--
    Conquer Template
    http://www.templatemo.com/tm-476-conquer
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $header->pageDescription;?>" />
    <meta name="keywords" content="Thunder, Bay, dentist, endo, endodontics, dr, doctor" />
    <meta name="author" content="Steven Chorkawy" />


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    

    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <!--reCaptCha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        function initialize() {
            var myCenter = new google.maps.LatLng(48.421340, -89.273275);

          var mapProp = {
            center:myCenter,
            zoom:17,
            mapTypeId:google.maps.MapTypeId.HYBRID
          };
          var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

          var marker = new google.maps.Marker({
              position: myCenter
          });

          marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!---->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/my-colors.css" />
    <link rel="stylesheet" href="css/style-email.css" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="single-page-nav sticky-wrapper" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <?php 
                            if($header->homePage) {
                                $home_link = "#section1";
                            }
                            else {
                                $home_link = "./index.php";
                            }
                        ?>
                        <li><a href="<?php echo $home_link; ?>">Homepage</a></li>
                        <?php if($header->homePage): ?>
                            <li><a href="#section2">About Us</a></li>
                            <li><a href="#section3">Services</a></li>
                            <li><a href="#find-us-area">Find Us</a></li>
                            <li><a href="#section4">Contact</a></li>
                        <?php endif; ?>
                        <li><a href="./medical-form.php">Medical Form</a></li>


                        <!--<li><a href="http://www.facebook.com/templatemo" class="external" target="_blank">External</a></li>-->
                    </ul>
                </div>

            </div>
        </nav>
    </div>
