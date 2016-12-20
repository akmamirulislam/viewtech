	
	@extends('viewtech.layouts.template')
	@section('title', 'Services - ViewTech Interior')

	@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h1 class="title">Decoration &amp; Furniture</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="/home">Home</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li>Decoration &amp; Furniture</li>
                                </ul>                   
                            </div>
                        </div><!-- /.page-title-captions --> 
                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->

        <section class="flat-row pad-top0px flat-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <div class="services-main-text">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../assets/viewtech/images/services/3-1.jpg" alt="images">
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="main-text">
                                        <h3 class="style1">Service Overview</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div><!-- /.main-text -->

                                    <div class="main-text">
                                        <h3>Why Choose Us?</h3>
                                        <p>We bring you the benefit, each with over 20 years experience. we know exactly what is required, and when it needs to be done.</p>

                                        <ul class="iconlist">
                                            <li><i class="fa fa-cog"></i> Financial Responsibility to Our Clients</li>
                                            <li><i class="fa fa-cog"></i> Highly professional staff</li>
                                            <li><i class="fa fa-cog"></i> Quality and Value to the Projects We Deliver</li>
                                            <li><i class="fa fa-cog"></i> Following the global design tendency.</li>
                                            <li><i class="fa fa-cog"></i> On Time and on Budget</li>
                                            <li><i class="fa fa-cog"></i> Real Focus on Customer Satisfaction</li>
                                        </ul>
                                    </div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->

                            <div class="flat-divider d20px"></div>

                            <div class="row">
                                <div class="flat-scheme">
                                    <h3>We work for the best quality of services for our clients and our clients appreciate us for that.</h3>
                                </div><!-- /.flat-scheme -->
                            </div><!-- /.row -->

                            <div class="flat-divider d40px"></div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="main-text">
                                        <h3 class="style1">Why we do it better?</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
                                    </div><!-- /.main-text -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="flat-down">
                                        <img src="../assets/viewtech/images/services/download.jpg" alt="images">
                                        <p class="flat-figure-caption">Download Brochure</p>
                                    </div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->

                        </div><!-- /.services-main-text -->
                    </div><!-- /.col-md-9 -->
                    <div class="col-md-3 col-md-pull-9">
                    <!-- service sidebar starts -->
                        <!-- include services-sidebar -->
                        @include('viewtech.pages.includes.services-sidebar')
                    <!-- service sidebar ends -->
                    </div><!-- /.col-md-3 -->                                         
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
	@endsection