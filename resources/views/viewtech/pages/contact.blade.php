	
	@extends('viewtech.layouts.template')
	@section('title', 'Contact - ViewTech Interior')

	@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h1 class="title">Contact</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="/home">Home</a></li>
                                    <li>Contact</li>
                                </ul>                   
                            </div>
                        </div><!-- /.page-title-captions --> 
                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->

        <section class="flat-row flat-contact pad-top0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-sidebar-left">
                            <h2>Why not say hello?</h2>
                            <p>Write us an e-mail via the form,<br>or just send us an e-mail directly at<br>
                                <a href="mailto:Support@linethemes.com">Support@linethemes.com</a>
                            </p>
                            <p>&nbsp;</p>
                            <h3>New York</h3>
                            <p>66 Nicholson St Buffalo New York Us</p>
                            <p>Tel: 0123 456 789<br>Mobile: 01-888-666-999<br>E-mail: <a href="mailto:Support@linethemes.com">Support@linethemes.com</a><br>Mon – Sat: 8:00 Am – 18:00 Pm</p>
                            <p>&nbsp;</p>
                            <h3>London</h3>
                            <p>89 Tottenham Road, London, England</p>
                            <p>Tel: 0852 712 610<br>Mobile: 01-123-777-555<br>E-mail: <a href="mailto:Support@linethemes.com">Support@linethemes.com</a><br>Mon – Sat: 8:00 Am – 18:00 Pm</p>
                        </div>
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-8">
                        <div class="contact-sidebar-right">
                            <div id="flat-map">
                            </div><!-- /#flat-map -->

                            <div class="flat-divider d50px"></div>

                            <div class="quick-form">
                                <h3>Request a quick quote</h3>
                                <p>Please tell us about your business. A HnK representative will walk you through our service options.</p>

                                <form method="POST" action="{{ url('/contacts') }}">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><input name="author" type="text" value="" placeholder="Your Name" required="required"></p>
                                            <p><input id="email" name="email" type="email" value="" placeholder="Your Email" required="required"></p>
                                            
                                            <select name="services" class="control-select">
                                                <option value="Interior">Interior</option>
                                                <option value="Decoration">Decoration</option>
                                                <option value="Funiture">Funiture</option>
                                                <option value="Home-Building">Home Building</option>
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
                        </div><!-- /.contact-sidebar-right -->
                        <div class="flat-divider d50px"></div>
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
	@endsection