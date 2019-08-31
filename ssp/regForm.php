    <?php 
    session_start();
    if(!isset($_SESSION["ldap"])){
        header('Location: index.php');}
        else{
            echo '';
        }
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
        @media only screen and (max-width: 900px) {
            .mobile_view {
                margin-right: -30px;
            }
            #content {
                margin-top: -80px;
            }
        }
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

<body class="" data-loader="14">


    <div class="side-cover-wrapper full-screen visible-lg visible-md">
        <div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
            <div class="flexslider" style="height: 100% !important;">
                <div class="slider-wrap" style="height: inherit !important;">
                    <div class="slide full-screen force-full-screen" style="background: url('images/a.jpg') center right; background-size: cover; height: 100% !important;"></div>
                    <div class="slide full-screen force-full-screen" style="background: url('images/111.jpg') center right; background-size: cover; height: 100% !important;"></div>
                    <div class="slide full-screen force-full-screen" style="background: url('images/c.jpg') center right; background-size: cover; height: 100% !important;"></div>
                    <div class="slide full-screen force-full-screen" style="background: url('images/112.jpg') center right; background-size: cover; height: 100% !important;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="nobottomborder no-sticky">

            <div id="header-wrap">

                <div class="container-fluid clearfix">

                    <div id="primary-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i>
                    </div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="https://ecell.in/" class="standard-logo" target="_blank"><img src="images/logo-media.png" alt="Canvas Logo">
                        </a>
                        <a href="https://ecell.in/" class="retina-logo" target="_blank" style="margin-left:-50px"><img src="images/logo-media.png" alt="Canvas Logo">
                        </a>
                    </div>
                    <!-- #logo end-->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="style-2">

                        <ul>
                            <li>
                                <a href="index.php" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="200">
                                    <div>About</div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#section-services" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
                                    <div>Services</div>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" data-easing="easeInOutExpo" data-speed="120" data-offset="60">
                                    <div>Logout</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
                                    <div>Contact</div>
                                </a>
                            </li>
                        </ul>

                        <div class="header-social-set mobile_view">
                            <a href="https://www.facebook.com/ecell.in" target="_blank" style="margin-right:5px;color:#3B5998;">
                                <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                            </a>

                            <a href="https://twitter.com/ecell_iitb" target="_blank" style="margin-right:5px;color:#00ACEE">
                                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                            </a>

                            <a href="https://instagram.com/ecell_iitb/" target="_blank" style="margin-right:5px;color:#3F729B">
                                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/the-entrepreneurship-cell-iit-bombay" target="_blank" style="color:#0E76A8">
                                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>

                    </nav>
                    <!-- #primary-menu end -->
                </div>
            </header>
        <!-- #header end -->

        <div class="clear"></div>



        <div id="section-contact2" class="page-section" style="margin-left:5%;margin-top:10%;">

            <h2 class="bottommargin">Register Here</h2>

            <div class="row clearfix">

                <div class="col-md-11">

                    <!-- <div class="contact-widget"> -->

                    <div class="contact-form-result"></div>

                    <div>
                        <form action="microlan_action.php" class="nobottommargin" id="template-contactform" name="template-contactform" method="POST">

                            <div class="col_half">
                                <input type="text" id="template-contactform-name" name="nam" value="" class="sm-form-control border-form-control required" placeholder="Name of startup" required />
                            </div>
                            <div class="col_half col_last">
                                <input type="text" id="template-contactform-name2" name="names" value="" class="sm-form-control border-form-control required" placeholder="Name of Co-Founders"/>
                            </div>

                            <div class="col_half">
                                <input type="number" id="template-contactform-email" name="mobile" value="" min="1000000000" max="9999999999" class="required email sm-form-control border-form-control" placeholder="Mobile Number" required />
                            </div>

                            <div class="col_half col_last">
                                <input type="email" id="template-contactform-email" name="emai" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" required />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="msg" rows="7" cols="30" placeholder="Description of sevices needed" required></textarea>
                            </div>

                            <div class="col_full">
                                <button class="button button-black noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="submit" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>


                    <p>Eligibity: This service can only be availed if it comes under the category of iitb startup which means that atleast one of the cofounders is an IITB student, staff or alumni.</p>

                    <!-- </div> -->

                </div>
            </div>
        </div>



    <div class="line topmargin-lg bottommargin-lg"></div>

    <?php include "contact.php"?>

    <!-- Footer
============================================= -->
    <footer id="footer" class="dark">
        <div id="copyrights" style="background-color:#111;">
            <div class="container-fluid">

                Copyrights &copy; Team Web 17-18 | <a href="https:\\ecell.in" target="_blank">E-Cell IIT Bombay</a>

            </div>
        </div>
    </footer>
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