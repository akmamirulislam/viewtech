	
	@extends('viewtech.layouts.template')
	@section('title', 'FAQ - ViewTech Interior')

	@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h1 class="title">FAQ</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="/home">Home</a></li>
                                    <li>FAQ</li>
                                </ul>                   
                            </div>
                        </div><!-- /.page-title-captions --> 
                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->

        <div class="flat-row pad-top0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="flat-accordion">
                            <div class="flat-toggle">
                                <h6 class="toggle-title">How do architects charge for their services?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">Some architects charge percentage fees, how does this work?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">Should I get pre-purchase development advice?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">How can an architect save you money on your home design?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">Why do most of your projects appear different from each other?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">Do I need to have a house or site before I contact you?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">What else can an architecture degree prepare me for?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">If I am not sure about committing to an architecture career, what advice would you give?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">How do I know if a program is professionally accredited? </h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->

                            <div class="flat-toggle">
                                <h6 class="toggle-title">How can I put together a portfolio if I have never had any architecture courses?</h6>
                                <div class="toggle-content" style="display: none;">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                               
                                </div>
                            </div><!-- /toggle -->
                        </div><!-- /.flat-accordion -->

                        <div class="flat-divider d50px"></div>

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
                        </div><!-- /.quick -->
                    </div><!-- /.col-md-9 -->

                    <div class="col-md-3">
                        <div class="sidebars">
                            <div class="sidebars-wrap">
                                <div class="sidebar">
                                    <div class="widget widget_search">
                                        <form class="search-form">
                                            <input type="search" class="search-field" placeholder="Search …">
                                            <input type="submit" class="search-submit">
                                        </form>
                                    </div><!-- /.widget_search -->

                                    <div class="widget widget_categories">
                                        <h3 class="widget-title">Categories</h3>
                                        <ul>
                                            <li class="cat-item"><a href="#">Architecture</a></li>
                                            <li class="cat-item"><a href="#">Decoration</a></li>
                                            <li class="cat-item"><a href="#">Home Building</a></li>
                                            <li class="cat-item"><a href="#">Interior</a></li>
                                        </ul>
                                    </div><!-- /.widget_categories -->

                                    <div class="widget widget_recent_entries">
                                        <h3 class="widget-title">Recent Posts</h3>
                                        <ul>
                                            <li><a href="#">Paris guide launch event</a></li>
                                            <li><a href="#">The calibre of the art hints at the creative</a></li>
                                            <li><a href="#">Anglepoise Salone del Mobile</a></li>
                                            <li><a href="#">A limited edition Agnes Martin cover</a></li>
                                            <li><a href="#">Nakashima – woodworker</a></li>
                                        </ul>
                                    </div><!-- /.widget_recent_entries -->

                                    <div class="widget widget_tag_cloud">
                                        <h3 class="widget-title">Tags</h3>
                                        <div class="tagcloud">
                                            <a href="#">Building</a>
                                            <a href="#">Cover</a>
                                            <a href="#">Decor</a>
                                            <a href="#">Interior</a>
                                        </div>
                                    </div><!-- /.widget_tag_cloud -->
                                </div><!-- .sidebar -->
                            </div><!-- /.sidebars-wrap -->
                        </div><!-- /.sidebars -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-content -->
	@endsection