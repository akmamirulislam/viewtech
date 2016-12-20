<!DOCTYPE html>
    <!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <!-- page title -->
        <title> @yield('title') </title>
        <!-- meta author -->
        <meta name="author" content="venusitltd.com">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="../assets/viewtech/stylesheets/bootstrap.css">
        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="../assets/viewtech/stylesheets/style.css">
        <!-- Responsive -->
        <link rel="stylesheet" type="text/css" href="../assets/viewtech/stylesheets/responsive.css">
        <!-- Colors -->
        <link rel="stylesheet" type="text/css" href="../assets/viewtech/stylesheets/colors/color1.css" id="colors">        
        <!-- Animation Style -->
        <link rel="stylesheet" type="text/css" href="../assets/viewtech/stylesheets/animate.css">

        <!-- Favicon and touch icons  -->
        <!-- <link href="../assets/viewtech/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
        <link href="../assets/viewtech/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="../assets/viewtech/icon/favicon.png" rel="shortcut icon"> -->


        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>    
                                 
    <body class="header-sticky">   
        <!--        
        <section class="loading-overlay">
            <div class="Loading-Page">
                <h2 class="loader">Loading...</h2>
            </div>
        </section> 
        -->
        
        <!-- Boxed -->
        <div class="boxed">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="flat-address">        
                                <ul>
                                    <li class="address">H # 32 (1st Floor), R # 09, S # 09, Uttara Model Town, Dhaka-1230</li>                            
                                </ul>
                            </div><!-- /.flat-address -->
                        </div><!-- /.col-md-6 -->   
                        <div class="col-md-6">
                            <div class="top-navigator">        
                                <ul>
                                    <li><a href="/about">About</a></li>
                                    <li class="service"><a href="/services">Services</a>
                                        <ul>
                                            <li><a href="/services-architectural-planning">Architectural Planning</a></li>
                                            <li><a href="/services-decoration-furniture">Decoration &amp; Furniture</a></li>
                                            <li><a href="/services-interior-design">Interior Design</a></li>
                                            <li><a href="/services-landscape-design">Landscape Design</a></li>
                                            <li><a href="/services-sustainable-design">Sustainable Design</a></li>
                                            <li><a href="/services-urban-design">Urban Design</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div><!-- /.top-navigator -->
                        </div><!-- /.col-md-6 -->              
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.top -->

            <div class="site-brand">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="logo" class="logo">
                                <a href="/" rel="home">
                                    <img src="../assets/viewtech/images/viewtech.jpg" width="80" height="50" alt="image">
                                </a>
                            </div><!-- /.logo -->
                            <div class="header-widgets">
                                <div id="text-1" class="widget widget_text">            
                                    <div class="textwidget">
                                        <div class="info-icon">
                                            <i class="icon-call-out icons"></i>
                                            <div class="content">Call Us Now
                                            <br>
                                            <span>1-888-345-6789</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="text-2" class="widget widget_text">            
                                    <div class="textwidget">
                                        <div class="info-icon">
                                            <i class="icon-clock icons"></i>
                                            <div class="content"> Opening times
                                            <br>
                                            <span>Mon - Sat: 7.00 - 18:00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="text-3" class="widget widget_text">            
                                    <div class="textwidget">
                                        <div class="info-icon">
                                            <a href="#quote" class="button content-reveal">Request a quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.header-widget -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-brand -->

            <!-- Header -->            
            <header id="header" class="header clearfix"> 
                <div class="header-wrap clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="nav-wrap">
                                    <div class="btn-menu">
                                        <span></span>
                                    </div><!-- /mobile menu button -->
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu"> 
                                            <li class="home">
                                                <a href="/">Home</a>
                                            </li>
                                            <li class="has-children"><a href="/services">Services</a>
                                                <ul class="submenu"> 
                                                    <li><a href="/services-architectural-planning">Architectural Planning</a>
                                                    </li>
                                                    <li><a href="/services-decoration-furniture">Decoration &amp; Furniture</a>
                                                    </li>
                                                    <li><a href="/services-interior-design">Interior Design</a>
                                                    </li>
                                                    <li><a href="/services-landscape-design">Landscape Design</a>
                                                    </li>
                                                    <li><a href="/services-sustainable-design">Sustainable Design</a></li>
                                                    <li><a href="/services-urban-design">Urban Design</a></li>
                                                </ul><!-- /.submenu -->
                                            </li>
                                            <li><a href="/about">About</a></li>                                            
                                            <li class="has-children"><a href="/projects">Projects</a>
                                                <ul class="submenu"> 
                                                    <li><a href="/project-details">Project Details</a></li>
                                                </ul><!-- /.submenu -->
                                            </li>                           
                                            <li class="has-children"><a href="/blog">Blog</a>
                                                <ul class="submenu"> 
                                                    <li><a href="/blog-details">Blog Details</a></li>
                                                </ul><!-- /.submenu -->
                                            </li>                         
                                            <li><a href="/contact">Contact </a></li>                                            
                                        </ul><!-- /.menu -->

                                        <div class="menu-extra">
                                            <ul>                                                
                                                <li id ="s" class="search-box">
                                                    <a href="#search" class="flat-search"><i class="icon-magnifier icons"></i></a>
                                                    <div class="submenu top-search">
                                                        <div class="widget widget_search">
                                                            <form class="search-form">
                                                                <input type="search" class="search-field" placeholder="Search …">
                                                                <input type="submit" class="search-submit">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- /.menu-extra -->

                                        <div class="social-links">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-behance"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </div>
                                    </nav><!-- /.mainnav -->  
                                </div><!-- /.nav-wrap -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.header-wrap -->
            </header><!-- /.header -->

            <!-- page content area starts -->
                <!-- including page  -->
                @yield('content')
            <!-- page content area starts -->

            <!-- Footer -->
            <footer class="footer">
                <div class="footer-widgets">        
                    <div class="container">
                        <div class="row"> 
                            <div class="col-md-3">
                                <div class="widget widget_text">
                                    <h3 class="widget-title">About Us</h3>          
                                    <div class="textwidget">
                                        <p>HK is a full service, New York City interior design with a global influence. Whether designing</p>
                                        <a href="#" class="button" target="_blank">Purchase Now</a>
                                    </div>
                                </div>
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget widget_nav_menu">
                                    <h3 class="widget-title">Services</h3>
                                    <div class="menu-services-container">
                                        <ul class="menu">
                                            <li class="menu-item"><a href="/services-decoration-furniture">Decoration &amp; Furniture</a></li>
                                            <li class="menu-item"><a href="/services-interior-design">Interior Design</a></li>
                                            <li class="menu-item"><a href="/services-architectural-planning">Architectural Planning</a></li>
                                            <li class="menu-item"><a href="/services-landscape-design">Landscape Design</a></li>
                                            <li class="menu-item"><a href="/services-urban-design">Urban Design</a></li>
                                            <li class="menu-item"><a href="/services-sustainable-design">Sustainable Design</a></li>
                                        </ul>                                            
                                    </div>
                                </div><!-- /.widget_nav_menu -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget widget_recent_entries">      
                                    <h3 class="widget-title">Recent News</h3>       
                                    <ul>
                                        <li>
                                            <a href="#">Paris guide launch event</a>
                                            <span class="post-date">December 18, 2015</span>
                                        </li>
                                        <li>
                                            <a href="#">The calibre of the art hints at the creative</a>
                                            <span class="post-date">December 18, 2015</span>
                                        </li>
                                    </ul>
                                </div><!-- /.widget_recent_entries -->
                            </div><!-- /.col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget widget_text">
                                <h3 class="widget-title">Contact Us</h3>            
                                    <div class="textwidget">
                                        <p><strong>66 Nicholson St Buffalo New York</strong></p>
                                        <p>
                                            <strong>Tel: </strong>0123 456 789<br>
                                            <strong>Mobile: </strong>01-888-666-999<br>
                                            <strong>E-mail: </strong><a href="#">support@linethemes.com</a><br>
                                            <strong>Mon - Sat:</strong> 8:00 Am - 18:00 Pm
                                        </p>
                                    </div>
                                </div><!-- /.widget_text -->
                            </div><!-- /.col-md-3 -->
                        </div><!-- /.row -->    
                    </div><!-- /.container -->
                </div><!-- /.footer-widgets -->

                <div class="footer-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>

                                <div class="copyright">
                                    <div class="copyright-content">
                                        Copyright © 2016 . <a href="viewtechinterior.com/" target="_blank">ViewTech Interior.</a></div>
                                </div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.footer-content -->
            </footer>

            <!-- Go Top -->
            <a class="go-top">
                <i class="fa fa-chevron-up"></i>
            </a>   

        </div>
               
        <!-- Javascript -->
        <script type="text/javascript" src="../assets/viewtech/javascript/owl.carousel.js"></script> 
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery-countTo.js"></script> 
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.flexslider-min.js"></script> 
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.countdown.js"></script>
        <!-- Revolution Slider -->
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/slider.js"></script>

        <!-- Javascript -->
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.easing.js"></script> 
        <script type="text/javascript" src="../assets/viewtech/javascript/imagesloaded.min.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.cookie.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery-waypoints.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery-validate.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/parallax.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/jquery.sticky.js"></script>   
        <script type="text/javascript" src="../assets/viewtech/javascript/smoothscroll.js"></script>
        <script type="text/javascript" src="../assets/viewtech/javascript/main.js"></script>
    </body>
</html>