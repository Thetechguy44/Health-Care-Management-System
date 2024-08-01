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
                                <h2>About Us</h2>                                    
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
            <!-- about-area -->
        <section id="about" class="about-area about-p mt-100 pb-80 p-relative" style="background-image:url(frontend/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row align-items-center">					
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="s-about-img p-relative">
                            <img src="frontend/img/bg/illlustration.png" alt="img">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="section-title mb-20">
                                <span>About Us</span>
                                <h2>We Are Specialize in Medical Diagnositics</h2>                                  
                            </div>
                            <p>Nulla lacinia sapien a diam ullamcorper, sed congue leo vulputate. Phasellus et ante ultrices, sagittis purus vitae, sagittis quam. Quisque urna lectus, auctor quis tristique tincidunt, semper vel lectus. Mauris eget eleifend massa. Praesent ex felis, laoreet nec tellus in, laoreet commodo ipsum.</p>
                            
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                    <div class="text">Pellentesque placerat, nisi congue vehicula efficitur.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                    <div class="text">Pellentesque placerat, nisi congue vehicula efficitur.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                    <div class="text">Phasellus mattis vitae magna in suscipit. Nam tristique posuere sem, mattis molestie est bibendum.
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="slider-btn mt-30">                                          
                                <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>					
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        
        <!-- counter-area -->
        <div class="counter-area pt-100 mb-100" style="background-image:url(frontend/img/an-bg/an-bg04.png); background-repeat: no-repeat; background-size: contain; ">
            <div class="container">
                <div class="row align-items-end">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center">
                            <img src="frontend/img/icon/cunt-icon01.png" alt="img">
                            <div class="counter p-relative">
                                <span class="count">500</span><small>+</small>                                   
                            </div>
                            <p>Doctors At Work</p>                               
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center">
                            <img src="frontend/img/icon/cunt-icon02.png" alt="img">
                            <div class="counter p-relative">
                                <span class="count">58796</span><small>+</small>                                   
                            </div>
                            <p>Happy Patients</p>                               
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center">
                                <img src="frontend/img/icon/cunt-icon03.png" alt="img">
                            <div class="counter p-relative">
                                <span class="count">500</span><small>+</small>                       
                            </div>
                            <p>Medical Beds</p>                               
                        </div>
                    </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center">
                                <img src="frontend/img/icon/cunt-icon04.png" alt="img">
                            <div class="counter p-relative">
                                <span class="count">200</span><small>+</small>                      
                            </div>
                            <p>Winning Awards</p>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-area-end -->	
    </main>
    <!-- main-area-end -->
@endsection