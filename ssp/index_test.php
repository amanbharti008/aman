<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>


    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <!-- Media Agency Demo Specific Stylesheet -->

    <link rel="stylesheet" href="css/media-agency.css" type="text/css" />
    <link rel="stylesheet" href="css/modal.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <style type="text/css">
        footer {
            margin-top: 10px!important;
        }
        .mobile_div{
            width:337%;
        }

        .side_bar{
            font-size: 2px;
        }
        @media only screen and (max-width: 700px) {

            .str {
                text-align: center;
            }
            .str2 {
                text-align: center;
                font-size: 15px;
                padding: 15px;

            }
            .str2 span{
                font-size: 20px;
            }
            .mobile_view {
                margin-right:-30px;
            }
            #content{
                margin-top: -2px;
                margin-left: 0%;
                margin-right:0%;
                text-align: left;
               
            }
            .mobile_section{
                /* margin-left: -14%; */
            }
            .mobile_vision{
                width: 116%;
                margin-left: -14px;
            }
            .mobile_div{
                width:100%;
            }
            .sidenav{
                width: 0px !important;
            }
            .mf
            {
                margin-left:100%;
            }
            .container-fluid
            {
                padding-left:53%;
                padding-right: 2%;
                /* margin-left:11%; */

            }
            .green-button{
                left:-27px;
            }
            .device-xxs

            {
                padding-left:53%;
                padding-right: 2%;
                margin-left:11%;

            }
            .border-fb
            {
                height:728px !important;
            }
            .border-gif{
                height: 490px !important;
            }
            .footer-margin{
                margin-left:-40%;
            }
            .body-margin{
                margin-left: -34px !important;
            }
            .text-footer-mobile
            {
                padding-left: 31% !important;
            }
        }

        }
        }
        /* @media only screen and (max-width: 650px) {.sidenav{width: 0px !important;}}*/
        p{
            font-family: 'Source Serif Pro', serif;
            text-align: justify;
            text-justify: inter-word;
        }


        .sidenav {
            height: 100%;
            width: 210px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 21px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 160px; /* Same as the width of the sidenav */
            font-size: 28px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /*@media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }*/


    </style>



    <link rel="stylesheet" href="css/fonts.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>SSP | E-Cell IIT Bombay</title>


</head>

<body  data-loader="14"></body>



<!-- Document Wrapper
============================================= -->


<?php include "header.php" ?>

<div class="clear"></div>
<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap content-wrap-margin" style="padding: 0;">

        <div id="section-about" class="container-fluid page-section clearfix" style="padding-left: 0px; padding-right: 0";>



            <div style="    background-image: url('images/back_img.jpg');background-repeat: no-repeat;background-position: top;background-size: 100% 100%;">
            <div class="hero-headline bottommargin">
                <div class="row">
                    <div class="col-lg-8 col-xs-12">
                        <h1 class="str">StartUp<br>Services<br>Platform</h1>
                    </div>
                    <div class="col-lg-4 col-xs-12">
                        <h3 class="str2"><span style="font-size: 1.75vw">Startup Clinic</span></h3>
                    </div>
                </div>


                <!-- Logo
                ============================================= -->
                <!-- <div id="logo">
                    <a href="https://ecell.in/ssp/"><img src="images/logo2.png" style="height:200px" alt="Canvas Logo">
                    </a>
                </div> -->
                <!-- #logo end-->

                <span style="width:200%"><p style="color: #000;">Startup Services Platform is an initiative of E-Cell, IITB which aims to provide some of the most necessary services availed by startups at very concessional rates compared to the market rates. The predominant problem faced by startups is that they fail to find a reliable and cheap vendor and end up paying manifold rates for the same. Here in this platform, the vendors are reliable and at the same time have subsidized rates only for startups connected with E-Cell IIT Bombay. In case you want to avail any of the services, just click on the service tab and fill-up the form after which you will be shortly connected with the service provider.</p></span>
            </div>



            <br>

            <div class="col-md-7 mobile_vision">

                <div class="accordion accordion-border clearfix">

                    <div class="acctitle"><i class="acc-open fa fa-check-circle-o"></i><i class="acc-closed fa fa-dot-circle-o"></i>Our Vision</div>
                    <div class="acc_content clearfix"><p>As a non-profit student body aimed at promoting a healthy entrepreneurial ecosystem, E-Cell strives to bridge the gap between the student start-ups and the capital intensive services and consultancies that a start-up needs in the early stage.</p></div>

                    <div class="acctitle"><i class="acc-open fa fa-check-circle-o"></i><i class="acc-closed fa fa-dot-circle-o"></i>Our Mission</div>
                    <div class="acc_content clearfix"><p>To facilitate this vision we have initiated the Startup Services Platform(SSP) wherein we aim to help such budding start-ups in accessing the full benefit of start-up needs and essential services at discounted rates.</p></div>

                    <div class="acctitle"><i class="acc-open fa fa-check-circle-o"></i><i class="acc-closed fa fa-dot-circle-o"></i>What We Do?</div>
                    <div class="acc_content clearfix"><p>We have initiated the Startup Services Platform(SSP) for start-ups in our network wherein we partner with firms that provide basic services required by startups to provide services at discounted rates.</p></div>

                </div>

            </div>

            <div class="col-md-5">

                <h4>People Say</h4>

                <div class="fslider testimonial nopadding noborder noshadow" data-animation="slide" data-arrows="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Great Session conducted by the Team, good to see such an enthusiast crowd at IIT Bombay, India will soon have a great startup culture</p>
                                    <div class="testi-meta">
                                        Travis Kalanick
                                        <span>CEO, Uber</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Thanks for inviting me, and letting me a part of E-Summit. Best Wishes for a successful summit, and may you all be inspired to do big big thinhgs in life</p>
                                    <div class="testi-meta">
                                        Ajit Ranade
                                        <span>Chief Economist, Aditya Birla Group</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>I thoroughly enjoyed the session @E-Summit’16, cause in many ways IITB is where we started our journey.All the best E-Cell team, keep starting up</p>
                                    <div class="testi-meta">
                                        Arunabh Kumar
                                        <span>Founder & CEO, TVF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Very good event conducted by E-cell, awesome session with Rahul Yadav</p>
                                    <div class="testi-meta">
                                        Sachin Bansal
                                        <span>CEO, Flipkart</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Made me feel very young, very challenging questions from a very dynamic group</p>
                                    <div class="testi-meta">
                                        Ronnie Screwvala
                                        <span>Founder, UTV Group</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Excellent programme, very important to nation's need to build and nurture Entrepreneurs</p>
                                    <div class="testi-meta">
                                        Girish Bhagat
                                        <span>Director, India Nivesh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="clear bottommargin-xs"></div>
          </div>



<!--            --><?php //if(!isset($_SESSION["ldap"])){
                // echo "session ldap : ".$_SESSION["ldap"];
//                echo "<div style='text-align:center; margin-top: 10px; font-size: 2em;' > <a href='login.php'  data-easing='easeInOutExpo' data-speed='1250' data-offset='60'>
//                                         <div>Login with LDAP to see the services</div></a></div>";

//                                        	include "services.php";
//            }else{
                // echo "session ldap : ".$_SESSION["ldap"];
                include "serv.php";

//            }?>




            <!-- <div align="center">
            <a href="newservice.php" class="green-button" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button button-green" align="center" style="align:center">Didn't find the service you want? Click here</a>
            </div> -->



            <div class="line topmargin-lg bottommargin-lg"></div>

            <?php include "contact.php"; ?>
            <?php include "footer.php";?>
            <!-- #footer end -->

        </div>
        <!-- #wrapper end -->
    </div>
</section>

        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modal.js"></script>

        <!-- Footer Scripts
        ============================================= -->
        <script type="text/javascript" src="js/function.js"></script>

        <script type="text/javascript">
            jQuery(window).load(function() {

                jQuery(window).resize(function() {
                    SEMICOLON.portfolio.portfolioDescMargin();
                });

                var t = setTimeout(function() {
                    SEMICOLON.portfolio.portfolioDescMargin();
                }, 200);

            });
        </script>
</body>

</html>
