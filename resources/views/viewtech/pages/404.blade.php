	
	@extends('viewtech.layouts.template')
	@section('title', '404 - ViewTech Interior')

	@section('content')
	        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h1 class="title">404 - Page Not Found</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="/home">Home</a></li>
                                    <li>404 Not Found</li>
                                </ul>                   
                            </div>
                        </div><!-- /.page-title-captions --> 
                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->

        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="error404">
                        <div id="main-content">
                            <div class="content-inner">
                                <div class="heading-404">
                                    <img src="../assets/viewtech/images/404.png" alt="images">
                                </div>
                                <div class="content-404">
                                    <h2>Looks Like Something Went Wrong!</h2>
                                    <p>The page you were looking for is not here. Maybe you want to perform a search?</p>
                                    <div class="subscrbe-form">
                                        <form class="sub-form">
                                            <input type="text" class="subscrbe-field" placeholder="Your email address">
                                            <input type="submit" class="subscrbe-submit">
                                        </form>
                                    </div><!-- /.widget_search -->
                                </div><!-- /.content-404 -->
                            </div>
                        </div><!-- /#main-content -->
                    </div><!-- /.error404 -->                      
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-content -->
	@endsection