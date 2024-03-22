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
                                <div></div>
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
        <!-- testimonial-area -->
        <section id="testimonios" class="testimonial-area testimonial-p pt-50 pb-85 fix" style="background-image: url(frontend/img/an-bg/an-bg07.png);background-position: center; background-repeat: no-repeat;background-size: contain;">
            <div class="container">
                    <div class="row justify-content-center">
                    
                    <div class="col-lg-8"> 
                    <div class="section-title center-align mb-60 text-center">
                            <span>TESTIMONIAL</span>
                            <h2>What Our Client’s Say’s</h2>
                            <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                        </div>
                        </div>
                        </div>
                
                <div class="row justify-content-center">
                    
                    <div class="col-lg-10">                           
                        <div class="testimonial-active slick-initialized slick-slider slick-dotted">
                            
                        
                            
                            
                                
                                    
                        
                            
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6210px; transform: translate3d(-690px, 0px, 0px);"><div class="single-testimonial slick-slide slick-cloned" tabindex="-1" role="tabpanel" aria-describedby="slick-slide-control13" style="width: 690px;" data-slick-index="-1" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Jone Dose</h6>
                                        <span>MD &amp; Founder</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide slick-current slick-active" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 690px;" data-slick-index="0" aria-hidden="false">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Adam McWilliams</h6>
                                        <span>CEO &amp; Founder</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 690px;" data-slick-index="1" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Rose Dose</h6>
                                        <span>Sale Executive</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 690px;" data-slick-index="2" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Margie R. Robinson</h6>
                                        <span>Web Developer</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide" tabindex="-1" role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control13" style="width: 690px;" data-slick-index="3" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Jone Dose</h6>
                                        <span>MD &amp; Founder</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide slick-cloned" tabindex="-1" role="tabpanel" aria-describedby="slick-slide-control10" style="width: 690px;" data-slick-index="4" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Adam McWilliams</h6>
                                        <span>CEO &amp; Founder</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide slick-cloned" tabindex="-1" role="tabpanel" aria-describedby="slick-slide-control11" style="width: 690px;" data-slick-index="5" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Rose Dose</h6>
                                        <span>Sale Executive</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide slick-cloned" tabindex="-1" role="tabpanel" aria-describedby="slick-slide-control12" style="width: 690px;" data-slick-index="6" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Margie R. Robinson</h6>
                                        <span>Web Developer</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div><div class="single-testimonial slick-slide slick-cloned" tabindex="-1" role="tabpanel" aria-describedby="slick-slide-control13" style="width: 690px;" data-slick-index="7" aria-hidden="true">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Jone Dose</h6>
                                        <span>MD &amp; Founder</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div></div></div><ul class="slick-dots" style="display: block;" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 4" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 4" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 4" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13" aria-label="4 of 4" tabindex="-1">4</button></li></ul></div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->
            <!-- brand-area -->
        <div class="brand-area" style="background-image:url(frontend/img/an-bg/an-bg12.png); background-size: cover;background-repeat: no-repeat;">
            <div class="container">
                <div class="row brand-active slick-initialized slick-slider">
                    
                    
                    
                    
                    
                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3120px; transform: translate3d(-720px, 0px, 0px);"><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="-3" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo03.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="-2" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo04.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="-1" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-current slick-active" style="width: 240px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                        <div class="single-brand">
                            <img src="frontend/img/brand/c-logo.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-active" style="width: 240px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                        <div class="single-brand active">
                                <img src="frontend/img/brand/c-logo02.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-active" style="width: 240px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo03.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide" style="width: 240px;" tabindex="-1" data-slick-index="3" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo04.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide" style="width: 240px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
                        <div class="single-brand">
                            <img src="frontend/img/brand/c-logo.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="6" aria-hidden="true">
                        <div class="single-brand active">
                                <img src="frontend/img/brand/c-logo02.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="7" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo03.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="8" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo04.png" alt="img">
                        </div>
                    </div><div class="col-xl-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" data-slick-index="9" aria-hidden="true">
                        <div class="single-brand">
                                <img src="frontend/img/brand/c-logo.png" alt="img">
                        </div>
                    </div></div></div></div>
            </div>
        </div>
        <!-- brand-area-end -->
        
    </main>
    <!-- main-area-end -->
@endsection