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

                        

                        <div class="header-social-set mobile_view">
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
                                    echo '<a href="login.php" >
                                        <div>Login</div></a>';
                                       }else{
                                        
                                echo '<a href="logout.php" >    
                                    <div>Logout</div>
                                </a>';}?>
                                    
                            </li>
                        </ul>
                        </div>

                    </nav>
                    <!-- #primary-menu end -->

                </div>

            </div>

        </header>
        <!-- #header end -->
