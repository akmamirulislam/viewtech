	
	@extends('viewtech.layouts.template')
	@section('title', 'Home - ViewTech Interior')

	@section('content')

            <!-- Slider area starts -->
                <!-- include home page slider -->
                @include('viewtech.pages.includes.home-slider')
            <!-- Slider area ends -->

            <!-- Flat imagebox -->
            <section class="flat-row flat-imagebox pad-bottom20px">
                <div class="container">
                    <div class="row">
                        <div class="item">
                            <div class="box-services">
                                <div class="box-services-wrap">
                                    <h2 class="title-box-services">We are <strong>Specialized</strong></h2>
                                    <p>HnK a solid reputation for delivering exceptional architectural and interior design services to private sector, and industrial clients.</p>
                                    <div class="flat-button">
                                        <a href="#">View all Services</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="imagebox">
                                <div class="box-wrap">
                                    <div class="box-image">
                                        <div class="box-header">
                                            <h4 class="box-title"><a href="services-architectural-planning.html">Architectural Planning</a></h4>
                                        </div>
                                        <a href="services-architectural-planning.html"><img src="../assets/viewtech/images/imagebox/1.jpg" alt="images"></a>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-desc">Architecture is our passion, turning ideas into reality and giving buildings a timeless footprint in a community are the values HnK was built on.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="imagebox">
                                <div class="box-wrap">
                                    <div class="box-image">
                                        <div class="box-header">
                                            <h4 class="box-title"><a href="services-decoration-furniture.html">Decoration &amp; Furniture</a></h4>
                                        </div>
                                        <a href="services-decoration-furniture.html"><img src="../assets/viewtech/images/imagebox/2.jpg" alt="images"></a>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-desc">We offer home furniture in a variety of styles for every room in your house home, discover a stylish selection of furniture and home decor at here.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="imagebox">
                                <div class="box-wrap">
                                    <div class="box-image">
                                        <div class="box-header">
                                            <h4 class="box-title"><a href="services-landscape-design.html">Landscape Design</a></h4>
                                        </div>
                                        <a href="services-landscape-design.html"><img src="../assets/viewtech/images/imagebox/3.jpg" alt="images"></a>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-desc">We view landscape design as an integral part of our architecture practice, allowing building and site to become an expression of a singular vision.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.item -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <!-- Flat projects portfolio -->
            <section class="flat-row">
                <div class="container">
                    <div class="row">
                        <div class="flat-projects-portfolio style2">
                            <ul class="portfolio-filter">
                                <li class="active"><a data-filter="*" href="#">All Projects</a></li>
                                <li><a data-filter=".houses" href="#">Houses</a></li>
                                <li><a data-filter=".decoration" href="#">Decoration</a></li>
                                <li><a data-filter=".furniture" href="#">Furniture</a></li>
                            </ul><!-- /.project-filter -->
                            <div class="projects-portfolio"> 
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item houses">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/1.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div><!-- /.item -->
                                </div><!-- /.projects-portfolio-wrap -->
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item houses decoration">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/2.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.projects-portfolio-wrap -->  
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item houses furniture">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/3.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.projects-portfolio-wrap --> 
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item houses">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/4.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.projects-portfolio-wrap --> 
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item furniture">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/5.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.projects-portfolio-wrap -->  
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item houses decoration">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/6.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.projects-portfolio-wrap -->
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item houses furniture">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/7.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.projects-portfolio-wrap --> 
                                <div class="projects-portfolio-wrap style1">
                                    <div class="item houses">
                                        <div class="portfolio-img">
                                            <a href="gallery-list.html"><img src="../assets/viewtech/images/projects/8.jpg" alt="image"></a>
                                            <div class="flat-button style1">
                                                <a href="gallery-list.html">Quick View</a>
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="#">The Chair of Charlie</a></h5>
                                                <ul class="portfolio-categories">
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>                                        
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.projects-portfolio-wrap -->
                            </div><!-- /.projects-portfolio -->
                        </div><!-- /.flat-projects-portfolio -->
                    </div><!-- /.row -->

                    <div class="flat-divider flat-border d50px"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="../assets/viewtech/images/imagebox/img-2.png" alt="images">
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="main-text">
                                <h3>Who is behind the best architecture services in town &amp; FAQ</h3>
                                <p>John Doe is a modern designer, founder and director of HnK Architects. John Doe graduated from National University of Construction and Architecture and from Academic School of Design in UK. In 2003, intuitively understanding that future lies in design, he founded HnK.</p>
                            </div><!-- /.main-text -->

                            <div class="flat-divider d40px"></div>

                            <div class="flat-accordion">
                                <div class="flat-toggle">
                                    <h6 class="toggle-title">How do architects charge for their services?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>                               
                                    </div>
                                </div><!-- /toggle -->

                                <div class="flat-toggle">
                                    <h6 class="toggle-title">Some architects charge percentage fees, how does this work?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>                               
                                    </div>
                                </div><!-- /toggle -->

                                <div class="flat-toggle">
                                    <h6 class="toggle-title">Should I get pre-purchase development advice?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>                               
                                    </div>
                                </div><!-- /toggle -->

                                <div class="flat-toggle">
                                    <h6 class="toggle-title">How can an architect save you money on your home design?</h6>
                                    <div class="toggle-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>                               
                                    </div>
                                </div><!-- /toggle -->
                            </div><!-- /.flat-accordion -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <section class="flat-row" style="background-color: #f2f2f2;">
                <div class="container">
                    <div class="row">
                        <div class="flat-tabs">
                            <ul class="menu-tab">
                                <li class="active"><a href="#"><i class="fa fa-newspaper-o"></i><br><span>Latest News</span></a></li>
                                <li><a href="#"><i class="fa fa-qrcode"></i><br><span>Our Shop</span></a></li>
                                <li><a href="#"><i class="fa fa-bar-chart"></i><br><span>Pricing Table</span></a></li>
                            </ul><!-- /.menu-tab -->
                            <div class="content-tab">
                                <div class="content-inner">
                                    <div class="main-content blog-grid">
                                        <div class="content-wrap">
                                            <div class="main-content-wrap">
                                                <div class="item">
                                                    <article class="post">
                                                        <div class="feature-post">
                                                            <a href="blog-single.html"><img src="../assets/viewtech/images/blog/bg1.jpg" alt="image"></a>
                                                        </div><!-- /.feature-post -->
                                                        <div class="header-post">
                                                            <h4 class="title-post"><a href="blog-single.html">Paris guide launch event</a></h4>
                                                            <p class="time-post">December 18, 2015</p>
                                                        </div><!-- /.header-post -->
                                                        <div class="content-post">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s...</p>       
                                                        </div><!-- /.content-post -->
                                                    </article>
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <article class="post">
                                                        <div class="feature-post">
                                                            <a href="blog-single.html"><img src="../assets/viewtech/images/blog/bg2.jpg" alt="image"></a>
                                                        </div><!-- /.feature-post -->
                                                        <div class="header-post">
                                                            <h4 class="title-post"><a href="blog-single.html">The calibre of the art hints at the creative</a></h4>
                                                            <p class="time-post">December 18, 2015</p>
                                                        </div><!-- /.header-post -->
                                                        <div class="content-post">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s...</p>       
                                                        </div><!-- /.content-post -->
                                                    </article>
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <article class="post">
                                                        <div class="feature-post">
                                                            <a href="blog-single.html"><img src="../assets/viewtech/images/blog/bg3.jpg" alt="image"></a>
                                                        </div><!-- /.feature-post -->
                                                        <div class="header-post">
                                                            <h4 class="title-post"><a href="blog-single.html">Anglepoise Salone del Mobile</a></h4>
                                                            <p class="time-post">December 18, 2015</p>
                                                        </div><!-- /.header-post -->
                                                        <div class="content-post">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s...</p>       
                                                        </div><!-- /.content-post -->
                                                    </article>
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <article class="post">
                                                        <div class="feature-post">
                                                            <a href="blog-single.html"><img src="../assets/viewtech/images/blog/bg3.jpg" alt="image"></a>
                                                        </div><!-- /.feature-post -->
                                                        <div class="header-post">
                                                            <h4 class="title-post"><a href="blog-single.html">A limited edition Agnes Martin cover</a></h4>
                                                            <p class="time-post">December 18, 2015</p>
                                                        </div><!-- /.header-post -->
                                                        <div class="content-post">
                                                            <p>Lorem Ipsum is simply dummy text of the ...</p>       
                                                        </div><!-- /.content-post -->                                                    
                                                    </article> 
                                                    <div class="flat-button">
                                                            <a href="#">Read all Post</a>
                                                        </div>                                               
                                                </div><!-- /.item -->                                            
                                            </div><!-- /.main-content-wrap -->
                                        </div><!-- /.content-wrap -->
                                    </div><!-- /.blog-grid -->
                                </div><!-- /.content-inner -->

                                <div class="content-inder">
                                    <div class="woocommerce columns-4">
                                        <ul class="products">
                                            <li>
                                                <div class="product-thumbnail">
                                                    <img src="../assets/viewtech/images/products/1.jpg" alt="images">
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-info-wrap">
                                                        <a href="shop-detail.html">
                                                            <h3>Spherical Bud Vase</h3>
                                                            <span class="price"><span class="amount">$65.00</span></span>
                                                        </a>
                                                        <div class="flat-button">
                                                            <a href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-thumbnail">
                                                    <img src="../assets/viewtech/images/products/2.jpg" alt="images">
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-info-wrap">
                                                        <a href="shop-detail.html">
                                                            <h3>Wood Puzzle</h3>
                                                            <span class="price"><span class="amount">$29.00</span></span>
                                                        </a>
                                                        <div class="flat-button">
                                                            <a href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-thumbnail">
                                                    <img src="../assets/viewtech/images/products/3.jpg" alt="images">
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-info-wrap">
                                                        <a href="shop-detail.html">
                                                            <h3>Canvas Basket</h3>
                                                            <span class="price"><span class="amount">$29.00</span></span>
                                                        </a>
                                                        <div class="flat-button">
                                                            <a href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-thumbnail">
                                                    <img src="../assets/viewtech/images/products/4.jpg" alt="images">
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-info-wrap">
                                                        <a href="#">
                                                            <h3>World Clock</h3>
                                                            <span class="price"><span class="amount">$49.00</span></span>
                                                        </a>
                                                        <div class="flat-button">
                                                            <a href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /.woocommerce -->
                                </div><!-- /.content-inner -->

                                <div class="content-inner">
                                    <div class="pricing-table">
                                        <div class="price-column">
                                            <div class="column-container">
                                                <div class="plan">Interior</div>
                                                <div class="price">
                                                    <span class="symbol">$</span>
                                                    <span class="prices">100</span>
                                                    <div>Price for 10+ hours/person</div>
                                                </div>
                                                <ul class="features">
                                                    <li>Door portals plan</li>
                                                    <li>Furniture placement plan</li>
                                                    <li>Ceiling plan</li>
                                                    <li>Electric outlets plan</li>
                                                </ul>
                                                <div class="cta">
                                                    <a class="button" href="#">Get it Now</a>
                                                </div>
                                            </div><!-- /.column-container -->
                                        </div><!-- /.price-column  -->

                                        <div class="price-column highlight">
                                            <div class="column-container">
                                                <div class="plan">Architecture</div>
                                                <div class="price">
                                                    <span class="symbol">$</span>
                                                    <span class="prices">200</span>
                                                    <div>Price for 10+ hours/person</div>
                                                </div>
                                                <ul class="features">
                                                    <li>Door portals plan</li>
                                                    <li>Furniture placement plan</li>
                                                    <li>Ceiling plan</li>
                                                    <li>Electric outlets plan</li>
                                                </ul>
                                                <div class="cta">
                                                    <a class="button" href="#">Get it Now</a>
                                                </div>
                                            </div><!-- /.column-container -->
                                        </div><!-- /.price-column  -->

                                        <div class="price-column">
                                            <div class="column-container">
                                                <div class="plan">Decoration</div>
                                                <div class="price">
                                                    <span class="symbol">$</span>
                                                    <span class="prices">300</span>
                                                    <div>Price for 10+ hours/person</div>
                                                </div>
                                                <ul class="features">
                                                    <li>Door portals plan</li>
                                                    <li>Furniture placement plan</li>
                                                    <li>Ceiling plan</li>
                                                    <li>Electric outlets plan</li>
                                                </ul>
                                                <div class="cta">
                                                    <a class="button" href="#">Get it Now</a>
                                                </div>
                                            </div><!-- /.column-container -->
                                        </div><!-- /.price-column  -->

                                        <div class="price-column">
                                            <div class="column-container">
                                                <div class="plan">Furniture</div>
                                                <div class="price">
                                                    <span class="symbol">$</span>
                                                    <span class="prices">300</span>
                                                    <div>Price for 10+ hours/person</div>
                                                </div>
                                                <ul class="features">
                                                    <li>Door portals plan</li>
                                                    <li>Furniture placement plan</li>
                                                    <li>Ceiling plan</li>
                                                    <li>Electric outlets plan</li>
                                                </ul>
                                                <div class="cta">
                                                    <a class="button" href="#">Get it Now</a>
                                                </div>
                                            </div><!-- /.column-container -->
                                        </div><!-- /.price-column  -->
                                    </div><!-- /.pricing-table -->
                                </div><!-- /.content-inner -->
                            </div><!-- /.content-tab -->
                        </div><!-- /.flat-tabs --> 
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <section class="flat-row pad-bottom40px" style="background-color: #2a2a2a;">
                <div class="container">
                    <div class="row">
                        <div class="title-section">
                            <h2 class="title">Why choose us?</h2>
                            <p>Our projects win awards, we are published in the world known magazines and websites.<br>We are invited to participate in exhibitions and competitions.</p>
                        </div><!-- /.title-section -->
                    </div><!-- /.row -->

                    <div class="flat-divider d40px"></div>

                    <div class="row">
                        <div class="flat-iconbox">
                            <div class="item">
                                <div class="iconbox ">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-diamond"></i></div>
                                        <h5 class="box-title">Experienced</h5>
                                    </div>
                                    <p class="box-content">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting                                    
                                    </p>
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="iconbox ">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-chart"></i></div>
                                        <h5 class="box-title">Superior Quality</h5>
                                    </div>
                                    <p class="box-content">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting                                    
                                    </p>
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="iconbox ">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-trophy"></i></div>
                                        <h5 class="box-title">Honest &amp; Dependable</h5>
                                    </div>
                                    <p class="box-content">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting                                    
                                    </p>
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="iconbox ">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-present"></i></div>
                                        <h5 class="box-title">Competitive Rates</h5>
                                    </div>
                                    <p class="box-content">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting                                    
                                    </p>
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="iconbox ">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-envelope-open"></i></div>
                                        <h5 class="box-title">Free Consultation</h5>
                                    </div>
                                    <p class="box-content">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting                                    
                                    </p>
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="iconbox ">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-globe"></i></div>
                                        <h5 class="box-title">Professional</h5>
                                    </div>
                                    <p class="box-content">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting                                    
                                    </p>
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="iconbox ">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-badge"></i></div>
                                        <h5 class="box-title">Win Awards</h5>
                                    </div>
                                    <p class="box-content">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting                                    
                                    </p>
                                </div>
                            </div><!-- /.item -->                        

                            <div class="item">
                                <div class="iconbox color">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa icons icon-layers"></i></div>
                                        <h5 class="box-title">Do you need Professionals to project</h5>
                                    </div>
                                    <div class="flat-button cl-white">
                                        <a href="#">Get it Now</a>
                                    </div>
                                </div>
                            </div><!-- /.item -->
                        </div><!-- /.iconbox -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <!-- Flat clients -->
            <section class="flat-row pad-top0px pad-bottom0px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="main-text style1">
                                <h3 class="title">What Our Clients Say?</h3>
                            </div>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-9">
                            <div class="flat-clients">
                                <div class="clients-featured">
                                    <img src="../assets/viewtech/images/client/1.png" alt="images">
                                </div>
                                <div class="clients-featured">
                                    <img src="../assets/viewtech/images/client/2.png" alt="images">
                                </div>
                                <div class="clients-featured">
                                    <img src="../assets/viewtech/images/client/3.png" alt="images">
                                </div>
                                <div class="clients-featured">
                                    <img src="../assets/viewtech/images/client/4.png" alt="images">
                                </div>
                                <div class="clients-featured">
                                    <img src="../assets/viewtech/images/client/1.png" alt="images">
                                </div>
                            </div>
                        </div><!-- /.col-md-9 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <!-- Flat testimonial -->
            <section class="flat-row flat-testimonials" style="background-color: #f5f5f5;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flat-testimonial">
                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <p>John Doe and his crew are true craftsmen that produced high-quality work and were easy to work with too. The end result is magnificent and we get comments all of the time, from friends and strangers alike, how beautiful our home is.</p>
                                    </div>
                                    <div class="testimonial-meta">
                                        <div class="testimonial-image">
                                            <img src="../assets/viewtech/images/testimonial/1.jpg" alt="images">
                                        </div>
                                        <div class="testimonial-author">
                                            <p class="author-name">Henry Cavill</p>
                                        </div>
                                        <div class="author-info">
                                            <p>CEO - Soha Corp</p>                                    
                                        </div>
                                    </div>
                                </div><!-- /.testimonial -->

                                <div class="testimonial">
                                    <div class="testimonial-content">
                                        <p>John Doe and his crew are true craftsmen that produced high-quality work and were easy to work with too. The end result is magnificent and we get comments all of the time, from friends and strangers alike, how beautiful our home is.</p>
                                    </div>
                                    <div class="testimonial-meta">
                                        <div class="testimonial-image">
                                            <img src="../assets/viewtech/images/testimonial/2.jpg" alt="images">
                                        </div>
                                        <div class="testimonial-author">
                                            <p class="author-name">Henry Cavill</p>
                                        </div>
                                        <div class="author-info">
                                            <p>CEO - Soha Corp</p>                                    
                                        </div>
                                    </div>
                                </div><!-- /.testimonial -->
                            </div><!-- /.flat-testimonial -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <section class="flat-row pad-bottom100px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-text">
                                <h3 class="title">We look to our differences to bring a richness of perspective.</h3>
                                <p>Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations. All our projects incorporate a unique artistic image and functional solutions. Client is the soul of the project.</p>
                            </div>

                            <div class="flat-divider d50px"></div>

                            <div class="flat-counter">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter">
                                            <div class="counter-image"><i class="fa icons icon-layers"></i></div>
                                            <div class="numb-count" data-to="332013" data-speed="3000" data-waypoint-active="yes">332013</div>
                                            <div class="counter-title">
                                                <strong>Projects</strong> completed on time and on budget with a high level of customer satisfaction.
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="counter">
                                            <div class="counter-image"><i class="fa icons icon-clock"></i></div>
                                            <div class="numb-count" data-to="7121988" data-speed="3000" data-waypoint-active="yes">7121988</div>
                                            <div class="counter-title">
                                                <strong>Working Hours</strong> with enthusiasm and passion to deliver outstanding service.
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="counter">
                                            <div class="counter-image"><i class="fa icons icon-people"></i></div>
                                            <div class="numb-count" data-to="6101990" data-speed="3000" data-waypoint-active="yes">6101990</div>
                                            <div class="counter-title">
                                                <strong>Happy Clients</strong> from all around the world received extremely creative designs.
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="quick-form">
                                <h3>Request a quick quote</h3>
                                <p>Please tell us about your business. A HnK representative will walk you through our service options.</p>
                                <form id="contactform" method="post" action="http://themesflat.com/html/hnk/contact/contact-process.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><input name="author" type="text" value="" placeholder="Your Name" required="required"></p>
                                            <p><input id="email" name="email" type="email" value="" placeholder="Your Email" required="required"></p>
                                            <select class="control-select">
                                                <option>Interior</option>
                                                <option>Decoration</option>
                                                <option>Funiture</option>
                                                <option>Home Building</option>
                                            </select>
                                        </div><!-- /.col-md-6 -->

                                        <div class="col-md-6">
                                            <p><input id="subject" name="subject" type="text" value="" placeholder="Subject" required="required"></p>
                                            <p><textarea name="comment" placeholder="Message" required="required"></textarea></p>
                                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Send Message">
                                            </p>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </form>
                            </div><!-- /.quick-form -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- ./container -->
            </section>

            <div class="content-bottom-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <img src="../assets/viewtech/images/logo-ft-1.jpg" alt="image">
                                </div>
                            </div><!-- /.widget_text -->
                        </div><!-- /.col-md-4 -->

                        <div class="col-md-8">
                            <div class="subscrbe-form">
                                <label>Subscribe now to get daily updates</label>
                                <form class="sub-form">
                                    <input type="text" class="subscrbe-field" placeholder="Your email address">
                                    <input type="submit" class="subscrbe-submit">
                                </form>
                            </div><!-- /.widget_search -->
                        </div><!-- /.col-md-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.content-bottom-widgets -->		
	@endsection