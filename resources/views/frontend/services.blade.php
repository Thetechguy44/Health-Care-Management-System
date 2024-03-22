@extends('frontend.layouts.app')
@section('content')
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(frontend/img/testimonial/test-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>Services</h2>                                    
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">News</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
            <!-- services-area -->
        <section id="services" class="services-area services-bg services-two pt-100 pb-70" style="background-image:url(frontend/img/bg/services_aliment_bg.html); background-size: contain; background-repeat: no-repeat;background-position: center center;">
            <div class="container">
        
                <div class="row sr-line">
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center active">
                            <div class="services-icon">
                                <img src="frontend/img/icon/sr-icon01.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="services-detail.html">Online Emergency</a></h5>       
                                <p>Mauris nunc felis, congue eu convallis in, bibendum vitae nisl. Duis vestibulum eget orci maximus pretium.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                            <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="frontend/img/icon/sr-icon02.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="services-detail.html">Medication Service</a></h5>       
                                <p>Mauris nunc felis, congue eu convallis in, bibendum vitae nisl. Duis vestibulum eget orci maximus pretium.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="frontend/img/icon/sr-icon03.png" alt="img">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="services-detail.html">24hr Health Program</a></h5>       
                                <p>Mauris nunc felis, congue eu convallis in, bibendum vitae nisl. Duis vestibulum eget orci maximus pretium.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </section>
        <!-- services-area-end -->
            <!-- newslater-area -->
        <section class="newslater-area pb-50" style="background-image: url(frontend/img/an-bg/an-bg06.png);background-position: center bottom; background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-4 col-lg-4 col-lg-4">
                        <div class="section-title mb-100">
                            <span>NEWSLETTER</span>          
                            <h2>Subscribe To Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater pb-130">
                            <div class="form-group">
                                <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                                <button type="submit" class="btn btn-custom" id="send2">Subscribe <i class="fas fa-chevron-right"></i></button>
                            </div>
                            <!-- /Form-email -->	
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="frontend/img/bg/news-illustration.png">
                    </div>
                </div>
                
            </div>
        </section>
        <!-- newslater-aread-end -->
            <!-- faq-area -->
        <section class="faq-area pt-50 pb-50 fix" style="background-image: url(frontend/img/shape/header-sape6.html); background-position: right center; background-size: auto;background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-end">                        
                    
                    
                        <div class="col-lg-6">                            
                            <div class="contact-img">
                            <img src="frontend/img/bg/touch-illustration.png" alt="touch-illustration">
                        </div>
                    </div>
                    
                        <div class="col-lg-6">
                        <div class="section-title left-align mb-50">                               
                            <h2>Frequently Asked Questions</h2>
                            <p>Duis non aliquet tellus, in mollis leo. Phasellus quis posuere dui. Nulla mauris purus, mattis eget sagittis at, accumsan sed leo.</p>
                        </div>
                        <div class="faq-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="faq-btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                Aliquam varius ligula nec leo tempus porta.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Suspendisse vitae varius diam, a vulputate urna.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Aliquam aliquet purus eget lacus pretium.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- faq-aread-end -->
            
    </main>
<!-- main-area-end -->
@endsection