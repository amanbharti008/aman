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
    .mobile_div{
    	width:337%;
    }
        @media only screen and (max-width: 900px) {
            .mobile_view {
                margin-right:-30px;
            }
            #content{
                margin-top: -80px;
            }
            .mobile_section{
                margin-left: -75px;
            }
            .mobile_vision{
            	width: 116%;
    			margin-left: -14px;
            }
            .mobile_div{
        		width:100%;
        	}

        }
        p{
            font-family: 'Source Serif Pro', serif;
            text-align: justify;
            text-justify: inter-word;
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
                        <a href="https://ecell.in/" class="standard-logo"><img src="images/logo-media.png" alt="Canvas Logo">
                        </a>
                        <a href="https://ecell.in/" class="retina-logo" style="margin-left:-50px"><img src="images/logo-media.png" alt="Canvas Logo"></a>
                    </div>
                    <!-- #logo end-->

					<!-- Primary Navigation
					============================================= -->
                    <nav id="primary-menu" class="style-2">

                        <ul>
                            <li>
                                <a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="200">
                                    <div>About</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
                                    <div>Services</div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
                                    <div>Contact</div>
                                </a>
                            </li>
                            <li>
                                
                                    <?php if(!isset($_SESSION["ldap"])){
                                    echo '<a href="login.php" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">
                                        <div>Login</div></a>';
                                       }else{
                                        
                                echo '<a href="logout.php" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60">    
                                    <div>Logout</div>
                                </a>';}?>
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

            </div>

        </header>
        <!-- #header end -->

        <div class="clear"></div>

        <!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div id="section-about" class="container-fluid page-section clearfix">

                   

                    <div class="hero-headline bottommargin">
                        <h1>StartUp Services Platform</h1>
                    <!-- Logo
                    ============================================= -->
                    <!-- <div id="logo">
                        <a href="https://ecell.in/ssp/"><img src="images/logo2.png" style="height:200px" alt="Canvas Logo">
                        </a>
                    </div> -->
                    <!-- #logo end-->
                       
                        <span style="width:200%"><p>Startup Services Platform is an initiative of E-Cell, IITB which aims to provide some of the most necessary services availed by startups at very Concessional rates compared to the market rates. The predominant problem faced by startups is that they fail to find a reliable and cheap vendor and end up paying manifold rates for the same. Here in this platform, the vendors are reliable and at the same time have a subsidised rates only for IITB student, staff and alumni startups. For the time being we have started with Legal and Financial services while other services like web and app development, HR consultancy, Coworking spaces are coming up shortly. In case you want to avail any of these services, just click on the service tab and fill up the form after which you will be shortly connected with the service provider.</p></span>
                    </div>

                    

                    <br>
                    
                    <div class="col-md-7 mobile_vision">

                            <div class="accordion accordion-border clearfix">

                                <div class="acctitle"><i class="acc-open fa fa-check-circle-o"></i><i class="acc-closed fa fa-dot-circle-o"></i>Our Vision</div>
                                <div class="acc_content clearfix"><p>A successful start-up requires many resources and services in the early stage in addition to persistent hard work and desire to succeed.But we happen to realize that most start-ups on triggering, fail and die out even before fuelling up with such essential services, mostly because of financial crunches in initial stage.As a non-profit student body aimed at promoting a healthy entrepreneurial ecosystem, E-Cell strives to bridge the gap between the student start-ups of IIT Bombay and the capital intensive services and consultancies that a start-up needs in the early stage.</p></div>

                                <div class="acctitle"><i class="acc-open fa fa-check-circle-o"></i><i class="acc-closed fa fa-dot-circle-o"></i>Our Mission</div>
                                <div class="acc_content clearfix"><p>To facilitate this vision we have initiated the Startup Services Platform(SSP) wherein we aim to help such budding start-ups in accessing full benefit of start-up needs and essential services at discounted rates.</p></div>

                                <div class="acctitle"><i class="acc-open fa fa-check-circle-o"></i><i class="acc-closed fa fa-dot-circle-o"></i>What We Do?</div>
                                <div class="acc_content clearfix"><p>We have initiated the Startup Services Platform(SSP) for IIT Bombay current and alumni start-ups wherein we partner with companies that provide services in  different fields viz.Web and app development,Digital Marketing, Multimedia, Legal and Finance,Co-Working space etc to provide services at discounted rates.</p></div>

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
                        <div class="clear bottommargin-sm"></div>

                    <div id="section-services" class="page-section">



                        

                        <h1 class="bottommargin">Services</h1>

                        <div class="row clearfix">

                            <?php if(isset($_SESSION["ldap"])){?>
                            <div class="col-sm-12 bottommargin mobile_section" align="center">
                                <div class="feature-box fbox-plain fbox-dark">
                                    <h2 style="color:#1ABC9C">Web and App Development- Microlan IT</h2>
                                    <p>A website is crucial for a startup- be it a mockup for the pitch or an improvement to an existing solution.In this world of advancing technology it act as a direct link for a startup to their customers whether it be a E-commerce marketplace or simple information site and the vast range of services of Microlan IT helps to cater them. Here are some services offered by Microlan IT</p>
                                </div>
                            </div>
                            
                            <div class="clear bottommargin-sm"></div>
                            <div class=" clearfix">

                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;;margin-bottom:5px;">Static Website(upto 10 pages)</h4>
                                        <p style="text-align: center;">Offer Price:5500</p>
                                    </div>
                                </div>

                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Dynamic Website</h4><br>
                                        <p style="text-align: center;">Offer Price:7500</p>
                                    </div>
                                </div>

                                <div class="col_one_third col_last">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">E-comm website</h4><br>
                                        <p style="text-align: center;">Offer Price:25000</p>
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="col_one_third nobottommargin">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Mobile Application</h4>
                                        <p style="text-align: center;">Offer Price:30000</p>
                                    </div>
                                </div>

                                <div class="col_one_third nobottommargin">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Domain Registration</h4>
                                        <p style="text-align: center;">Offer Price:99</p>
                                    </div>
                                </div>

                                <div class="col_one_third nobottommargin col_last">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Hosting(Windows Linux) </h4>
                                        <p style="text-align: center;">Offer Price:1000</p>
                                    </div>
                                </div>
                                <br><br><br><br><br><br>                                
                                <div class="clear"></div>


                                <div class="col_one_third nobottommargin">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Bulk SMS</h4>
                                        <p style="text-align: center;">Offer Price:9 ps</p>
                                    </div>
                                </div>
                                

                                
                                  <div id="register" align="center">
                        
                              

                                <br><br><br><br><br><br>
                                <a href="microlan.php" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button button-black" align="center" style="align:center">Click Me To Register</a>
                                <p style="text-align: center;"> 
Contact: Shirish 8369600832
                  </p>
                    </div>


                                <section align="center">
                                <a href="#111"><h5 style="color:#999"> ** Terms and Conditions **</h5></a>
                                <div id="111" class="modalDialog">
                                    <div>   
                                        <div align="right"><a href="#section-services"   style="color:red;">CLOSE</a></div>
                                        <h2>Terms & Conditions</h2>
                                        <p>
                                            <h4 align="left">E-commerce Site</h4>
                                            <ul>
                                            <li align="left">Clean,neat and user friendly frontend theme</li>
                                            <li align="left">Login and registration including Facebook and Gmail</li>
                                            <li align="left">Customer can view order history, status and manage account</li>
                                            <li align="left">Unlimited products, categories and subcategories</li>
                                            <li align="left">Advanced search box</li>
                                            <li align="left">Sorting and filtering</li>
                                            <li align="left">View shopping cart</li>
                                            <li align="left">Coupon code management</li>
                                            <li align="left">Newsletter Subscription</li>
                                            <li align="left">Dynamic banner on homepage to show latest offers</li>
                                            <li align="left">Payment Gateway Integration</li>
                                            <li align="left">Order Cancellations</li>
                                            <li align="left">45 Days free support, Eg: thestyledoor.com</li>
                                            </ul>


                                            <h4 align="left">Static Site</h4>
                                            <ul>
                                            <li align="left">Clean and user-friendly theme</li>
                                            <li align="left">Contact us,Google Maps, enquiry emails etc</li>
                                            <li align="left">Custom CMS (optional)</li>
                                            </ul>



                                            <h4 align="left">Booking Website</h4>
                                            <ul>
                                            <li align="left">Food Booking-Taxi booking-Service Booking etc.</li>
                                            <li align="left">Dynamic categories</li>
                                            <li align="left">Payment Gateway</li>
                                            <li align="left">Manage orders  Eg: Doormint.in or Taskbob.in</li>
                                            </ul>
                                           




                                            <h4 align="left">Marketplace Website</h4>
                                            <ul>
                                            <li align="left">Separate Login Panel for every merchants/vendors</li>
                                            <li align="left">Includes Merchant panel to manage his products and track products</li>
                                            </ul>
                                        </p>
                                        <div align="right"><a href="#section-services" title="Close"   style="color:red;">CLOSE</a></div>
                                    </div>
                                </div>
                                </section>

                            </div>
                            <br>
                            <br>

                            <div class="col-sm-12 bottommargin mobile_section" align="center">
                                <div class="feature-box fbox-plain fbox-dark">
                                    <h2 style="color:#1ABC9C">Legal and Financial Services by Samisti Legal</h2>
                                    <p>The legalities around creating a startup are confusing and often expensive. Our legal partner provides all legal services that a startup requires, as well as expert personal advice.</p>
                                </div>
                            </div>
                            <div class="clear bottommargin-sm"></div>

                            <div class=" clearfix">

                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Drafting of a term sheet</h4>
                                        <p style="text-align: center;">Offer Price:11000</p>
                                    </div>
                                </div>

                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Company Registration</h4>
                                        <p style="text-align: center;">Offer Price:9000</p>
                                    </div>
                                </div>

                                <div class="col_one_third col_last">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">LLP Registration</h4>
                                        <p style="text-align: center;">Offer Price:8000</p>
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="col_one_third nobottommargin">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">GST Registration</h4><br>
                                        <p style="text-align: center;">Offer Price:3000</p>
                                    </div>
                                </div>

                                <div class="col_one_third nobottommargin">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Filing of trademark application</h4>
                                        <p style="text-align: center;">Offer Price:2500</p>
                                    </div>
                                </div>

                                <div class="col_one_third nobottommargin col_last">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Filing of copyright application</h4>
                                        <p style="text-align: center;">Offer Price:8000</p>
                                    </div>
                                </div>
                                <br><br><br><br><br><br><br>                              <div class="clear"></div>

                                <div class="col_one_third nobottommargin">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Arranging valuation report</h4>
                                        <p style="text-align: center;">Offer Price:20000</p>
                                    </div>
                                </div>
                                

                                
                                <br><br><br><br><br>


                                <div class="clear"></div>

                                <br>
                                
                        <a href="samisti legal.php" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button button-black" align="center" style="align:center">Click Me To Register</a>
                        <p style="text-align: center;">Contact: Sumit 8291474891</p>
                    </div>
                            </div>

                            <br>
                            <br>



                            <div class="col-sm-12 bottommargin mobile_section" align="center">
                                <div class="feature-box fbox-plain fbox-dark">
                                    <h2 style="color:#1ABC9C">Coworking Space by Camelot CoWorks</h2>
                                    <p>Co-working spaces are a great choice for startups as they provide a nice work atmosphere without a long term lock in. Our Co-Working space partner, Camelot CoWorks, has an awesome work space!</p>
                                </div>
                            </div>
                            <div class="clear bottommargin-sm"></div>


                            <div class=" clearfix">



                                <div class="col_one_third">
                                    <div style="padding:8px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Floating Desk</h4>
                                        <p style="text-align: center;">Offer Price:360(Daily)</p><p style="text-align: center;">1350(Weekly)</p>
                                        <p style="text-align: center;">4950(Monthly)</p>

                                    </div>
                                </div>


                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Dedicated Desk</h4>
                                        <p style="text-align: center;">Offer Price:540(Daily)</p><p style="text-align: center;">1800(Weekly)</p><p style="text-align: center;">6300(Monthly)</p>
                                    </div>
                                </div>


                                 <div class="col_one_third col_last">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Exclusive Cabin</h4>
                                        <br><br><br><p style="text-align: center;">Offer Price:8100(Monthly)</p><br><br>
                                    </div>
                                </div>


                            </div>
                            
                                                        <div class="clearfix">

                                
                               
                            </div>
                            
                        <a href="Camelot CoWorks.php" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button button-black" align="center" style="align:center">Click Me To Register</a>
                        <p style="text-align: center;">Contact: Kanishka 8600573935</p>
                    </div>
                            <br>
                            <br>

                            <div class="col-sm-12 bottommargin mobile_section" align="center">
                                <div class="feature-box fbox-plain fbox-dark">
                                    <h2 style="color:#1ABC9C">Video Making Service by Vizcom</h2>
                                    <p>Making an impressive pitch to an investor is what may decide the future of your startup. What better way than to make an awesome video pitch? Vizcom provides personalised animated and corporate videos as well as creatives including logo design and branding.</p>
                                </div>
                            </div>
                            <div class="clear bottommargin-sm"></div>


                            <div class=" clearfix">

                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Animated videos</h4>
                                        <p>Skyrocket your business potential with animated videos that are fast, effective and affordable. This includes explainer videos, whiteboard animation, infographics and more. </p><p style="text-align: center;">Offer Price:40000 per minute</p>
                                    </div>
                                </div>

                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Audio Visuals</h4>
                                        <p>Audio Visuals offer an opportunity to make your communication more impactful.</p> <p style="text-align: center;">Offer Price:40000 per minute</p><br><br>
                                    </div>
                                </div>

                                <div class="col_one_third col_last">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                    	<h4 style="align:center;text-align:center;margin-bottom: 5px;">Corporate Presentations</h4>
                                        <p>Expand your business prospects by showcasing your products and services with utmost clarity, conviction and precision.</p><p style="text-align: center;">Offer Price:40000 per minute</p><br>
                                    </div>
                                </div>

                                </div>
                                <div class=" clearfix">



                                <div class="col_one_third">
                                    <div style="padding:8px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Slide Shows</h4>
                                        <p>We can help you create amazing Powerpoint Presentations. Our aim is to turn everyday presenters into rockstars.</p><p style="text-align: center;">Offer Price:1500 per slide</p><br><br>
                                    </div>
                                </div>


                                <div class="col_one_third">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Brand Identity Design</h4>
                                        <p>Your brand is more than a name and a logo. It’s a combination of design, colors,  typography, graphics,domain, baseline, messaging and competitor positioning that together makes you distinct. </p><p style="text-align: center;">Offer Price:35000 </p>
                                    </div>
                                </div>


                                 <div class="col_one_third col_last">
                                    <div style="padding:5px; box-shadow: 5px 5px 2px #888888;">
                                        <h4 style="align:center;text-align:center;margin-bottom: 5px;">Testimonial Video</h4>
                                        <p>Establish trust and encourage prospective clients with testimonial videos that highlight your capabilities.</p><p style="text-align: center;">Offer Price:20000 per day</p><br>
                                    </div>
                                </div>



                            </div>
                                          
                                
                                

                            </div>
                            
                        <a href="Vizcom.php" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button button-black" align="center" style="align:center">Click Me To Register</a>
                        <p style="text-align: center;">
Contact: Rajat Kadam 8928909566
</p>
                    </div>




                        </div>


                    </div>
                    <?php }
                            else{?>

                            <div align="center">
                        <a href="login.php" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button button-black" align="center" style="align:center">Login</a>
                    </div>               <?php }?>


                    
                    


                    <div class="line topmargin-lg bottommargin-lg"></div>

                    <div id="section-contact" class="page-section">

                        <h2 class="bottommargin">Get in Touch.</h2>

                        <div class="row clearfix">

                            <div class="col-md-8">

                                <!-- <div class="contact-widget"> -->

                                    <div class="contact-form-result"></div>

                                    <form action="itsmyaction3.php" class="nobottommargin" id="template-contactform" name="template-contactform" method="POST" >

                                        <div class="col_half">
                                            <input type="text" id="template-contactform-name" name="nam" value="" class="sm-form-control border-form-control required" placeholder="Name" required />
                                        </div>
                                        <div class="col_half col_last">
                                            <input type="email" id="template-contactform-email" name="emai" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" required />
                                        </div>

                                        <div class="clear"></div>

                                        <div class="col_full">
                                            <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" required />
                                        </div>

                                        <div class="col_full">
                                            <textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="msg" rows="7" cols="30" placeholder="Your Message" required></textarea>
                                        </div>

                                        <div class="col_full">
                                            <button class="button button-black noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="submit" value="submit">Send Message</button>
                                        </div>
                                    </form>

                                <!-- </div> -->

                            </div>

                            <div class="col-md-4">
                                <h4>Postal address:</h4>

                                <div style="font-size: 16px; line-height: 1.7;">
                                    <address style="line-height: 1.7;">
										E-Cell Office, SAC, IIT Bombay<br>
										Powai, Mumbai - 400076<br>
									</address>

                                    <div class="clear topmargin"></div>

                                    <abbr title="Phone Number"><strong>Phone: </strong></abbr>+91-22-25764044
                                    <br>
                                    <abbr title="Mobile"><strong>Mobile: </strong></abbr>07506148231
                                    <br>
                                    <abbr title="Email Address"><strong>Email: </strong></abbr>utkarsh@ecell.in
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">
            <div id="copyrights" style="background-color:#111;">
                <div class="container-fluid">

                    Copyrights &copy; Team Web 17-18 | <a href="https:\\ecell.in" target="_blank">E-Cell IIT Bombay</a>

                </div>
            </div>
        </footer>
        <!-- #footer end -->

    </div>
    <!-- #wrapper end -->

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