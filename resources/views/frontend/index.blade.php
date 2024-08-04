@extends('frontend.layouts.app')
@section('content')
    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <section id="home" class="slider-area fix p-relative">
            <div class="slider-active2">
                <div class="single-slider slider-bg d-flex align-items-center" style="background-image:url(frontend/img/an-bg/header-bg.png)">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content s-slider-content text-left">
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Get Better Care For Your <span>Health</span></h2>
                                        @foreach($settings as $setting)
                                        <p data-animation="fadeInUp" data-delay=".6s">{{$setting->about_us}}</p>
                                        @endforeach
                                        <div class="slider-btn mt-25">                                          
                                            <a href="{{ route('register') }}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Sign Up Now <i class="fas fa-chevron-right"></i></a>					
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="frontend/img/bg/header-img.png" alt="header-img" class="header-img"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
        </section>
        <!-- slider-area-end -->
        <!-- booking-area -->
        <section id="booking" class="booking-area p-relative">
            <div class="container">
                <form action="#" class="contact-form" >
                    <div class="row">
                        <div class="col-lg-12"> 
                            <ul>
                                <li> 
                                    <div class="contact-field p-relative c-name">  
                                        <input type="text" placeholder="Enter Name">
                                    </div>      
                                </li>
                                <li>
                                    <div class="contact-field p-relative c-email">    
                                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                            <option selected>Select Doctor...</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div> 
                                </li>
                                <li>
                                    <div class="contact-field p-relative c-email">    
                                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                            <option selected>Select Provider...</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div> 
                                </li>

                                <li>
                                    <div class="contact-field p-relative c-subject mb-20">                     
                                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                            <option selected>Select Speciality...</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-field p-relative c-email">    
                                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                            <option selected>Select Doctor...</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div> 
                                </li>
                                <li>
                                    <div class="contact-field p-relative c-email">    
                                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                            <option selected>Select Gender...</option>
                                            <option value="1">One</option>
                                        </select>
                                    </div> 
                                </li>
                                <li> 
                                    <div class="contact-field p-relative c-name">  
                                        <input type="text" placeholder="Time">
                                    </div>      
                                </li>
                                <li> 
                                    <div class="contact-field p-relative c-name">  
                                        <input type="text" placeholder="Enter Name">
                                    </div>      
                                </li>
                                <li> 
                                    <div class="contact-field p-relative c-name">  
                                        <input type="text" placeholder="Enter Name">
                                    </div>      
                                </li>
                                <li>
                                    <div class="slider-btn">                                          
                                    <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Submit Now <i class="fas fa-chevron-right"></i></a>
                                </div>     
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- booking-area-end -->
        
            <!-- services-area -->
        <section id="services" class="services-area services-bg services-two pt-100"  style="background-image:url(frontend/img/an-bg/an-bg02.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title text-center pl-40 pr-40 mb-80" >
                            <span> our services</span>
                            <h2>Our Special Services For You</h2>
                            <p class="mt-10">Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                        </div>
                    </div>
                </div>
                <div class="row sr-line">
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center active" >
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
                            <div class="s-single-services text-center" >
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
                        <div class="s-single-services text-center" >
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
        
        <!-- about-area -->
        <section id="about" class="about-area about-p pt-65 pb-80 p-relative" style="background-image:url(frontend/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
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
        <div class="counter-area pt-100 pb-100" style="background-image:url(frontend/img/an-bg/an-bg04.png); background-repeat: no-repeat; background-size: contain; ">
            <div class="container">
                <div class="row align-items-end">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center" >
                            <img src="frontend/img/icon/cunt-icon01.png" alt="img">
                            <div class="counter p-relative">
                                <span class="count">500</span><small>+</small>                                   
                            </div>
                            <p>Doctors At Work</p>                               
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center" >
                            <img src="frontend/img/icon/cunt-icon02.png" alt="img">
                            <div class="counter p-relative">
                                <span class="count">58796</span><small>+</small>                                   
                            </div>
                            <p>Happy Patients</p>                               
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center" >
                                <img src="frontend/img/icon/cunt-icon03.png" alt="img">
                            <div class="counter p-relative">
                                <span class="count">500</span><small>+</small>                       
                            </div>
                            <p>Medical Beds</p>                               
                        </div>
                    </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-counter text-center" >
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
        
        <!-- department-area -->
        <section class="department-area cta-bg pb-70 mt-10 fix" style="background-image:url(frontend/img/an-bg/an-bg05.png); background-size: contain;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-50  " >
                            <span>OUR DEPARTMENTS</span>
                            <h2>We Take Care Of Your Life Healthy Health</h2>
                        </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <div><img src="frontend/img/icon/de-icon01.png" alt="de-icon"></div></div> 
                                    <a href="departments-detail.html" class="text">
                                        <h3>Pedlatric</h3>
                                        Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                    </a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <div><img src="frontend/img/icon/de-icon02.png" alt="de-icon"></div></div> 
                                        <a href="departments-detail.html" class="text">
                                        <h3>Dental</h3>
                                        Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                    </a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <div><img src="frontend/img/icon/de-icon03.png" alt="de-icon"></div>
                                    </div> 
                                    <a href="departments-detail.html" class="text">
                                        <h3>Physicians</h3>
                                        Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                    </a>
                                </li>                   
                            </ul>
                                            
                    </div>
                    <div class="col-lg-6">
                        <div class="s-d-img p-relative">
                            <img src="frontend/img/bg/de-illustration.png" alt="img">
                            
                        </div>
                                            
                    </div>
                </div>
            </div>
        </section>
        <!-- department-area-end -->			
            <!-- team-area-->
        <section id="team" class="pb-20" style="background-image:url(frontend/img/an-bg/an-bg13.png); background-size: contain;background-position: center center;background-repeat: no-repeat;">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title text-center mb-70">
                                <span> OUR TEAM </span>                               
                            <h2>Docter’s In The Medical Sciences</h2>
                            <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                        </div>
                    </div>
                </div>
                <div class="row team-active">                   
                    <div class="col-xl-4">
                        <div class="single-team mb-30" >
                            <div class="team-thumb">
                                <div class="brd">
                                        <img src="frontend/img/team/team01.png" alt="img">
                                </div>
                                
                                <div class="dropdown">
                                    <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    +
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="team-social mt-15">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                        <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                    </ul>       
                                </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Samanta Crane</a></h4>
                                <span>Internist, General Practitoner</span>
                                <p>Working Since 2004</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-team mb-30" >
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="frontend/img/team/team02.png" alt="img">
                                </div>
                                    <div class="dropdown">
                                    <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    +
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="team-social mt-15">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                        <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                    </ul>       
                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Ostin Green</a></h4>
                                <span>Internist, General Practitoner</span>
                                <p>Working Since 2004</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-team mb-30" >
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="frontend/img/team/team03.png" alt="img">
                                </div>
                                <div class="dropdown">
                                    <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    +
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="team-social mt-15">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                        <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                    </ul>       
                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Norman Colins</a></h4>
                                <span>SALES MANAGER</span>
                                <p>Working Since 2004</p>
                            </div>
                        </div>
                    </div>
                        <div class="col-xl-4">
                        <div class="single-team mb-30" >
                            <div class="team-thumb">
                                <div class="brd">
                                        <img src="frontend/img/team/team01.png" alt="img">
                                </div>
                                
                                <div class="dropdown">
                                    <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    +
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="team-social mt-15">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                        <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                    </ul>       
                                </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Samanta Crane</a></h4>
                                <span>Internist, General Practitoner</span>
                                <p>Working Since 2004</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-team mb-30" >
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="frontend/img/team/team02.png" alt="img">
                                </div>
                                    <div class="dropdown">
                                    <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    +
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="team-social mt-15">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                        <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                    </ul>       
                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Ostin Green</a></h4>
                                <span>Internist, General Practitoner</span>
                                <p>Working Since 2004</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="single-team mb-30" >
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="frontend/img/team/team03.png" alt="img">
                                </div>
                                <div class="dropdown">
                                    <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    +
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="team-social mt-15">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                        <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                    </ul>       
                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Norman Colins</a></h4>
                                <span>SALES MANAGER</span>
                                <p>Working Since 2004</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- team-area-end -->
        <!-- newslater-area -->
        <!-- <section class="newslater-area pb-50" style="background-image: url(frontend/img/an-bg/an-bg06.png);background-position: center bottom; background-repeat: no-repeat;" >
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
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <img src="frontend/img/bg/news-illustration.png">
                    </div>
                </div>
                
            </div>
        </section> -->
        <!-- newslater-aread-end -->
        <!-- testimonial-area -->
        <section id="testimonios" class="testimonial-area testimonial-p pt-50 pb-85 fix" style="background-image: url(frontend/img/an-bg/an-bg07.png);background-position: center; background-repeat: no-repeat;background-size: contain;" >
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
                        <div class="testimonial-active">
                            
                        
                            <div class="single-testimonial">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Adam McWilliams</h6>
                                        <span>CEO & Founder</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                
                            </div>
                            <div class="single-testimonial">
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
                                
                            </div>
                                <div class="single-testimonial">
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
                                
                            </div>
                                    <div class="single-testimonial">
                                    <div class="testi-img">
                                    <img src="frontend/img/testimonial/testimonial-img.png" alt="img">                                        
                                </div>
                                <div class="single-testimonial-bg">
                                <div class="com-icon"><img src="frontend/img/testimonial/qutation.png" alt="img"></div>
                                    <div class="testi-author">
                                                    <div class="ta-info">                                          
                                        <h6>Jone Dose</h6>
                                        <span>MD & Founder</span>
                                        
                                    </div>
                                </div>
                                <p>Nullam metus mi, sollicitudin eu elit non, laoreet consectetur urna. Nullam quis aliquet elit. Cras augue tortor, lacinia et fermentum eget, suscipit id ligula. Donec id mollis sem, nec tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                                
                        </div>
                        
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->
        
        <!-- counter-area -->
        <div class="call-area pb-50" style="background-image:url(frontend/img/an-bg/an-bg09.png); background-repeat: no-repeat; background-position: bottom;">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="single-counter-img fadeInUp animated" >
                                <img src="frontend/img/bg/ap-illustration.png" alt="img" class="img">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">                                                     
                        <div class="section-title mt-100">
                            <span>APPOINTMENT</span>
                            <h2>Make An Appointment For Emergency</h2>
                        </div>
                        
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">    
                        <div class="slider-btn mt-130">                                          
                            <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Appointment <i class="fas fa-chevron-right"></i></a>					
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-area-end -->
        
        <!-- contact-area -->
        <section id="contact" class="contact-area contact-bg pb-70 p-relative fix" style="background-image:url(frontend/img/an-bg/an-bg11.png); background-size: cover;background-repeat: no-repeat;">
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-img">
                            <img src="frontend/img/bg/touch-illustration.png" alt="touch-illustration">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title mb-60" >
                                <span>Contact</span>
                                <h2>Get In Touch With Us</h2>
                        </div>
                        <form action="#" class="contact-form" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-name mb-20">                                    
                                        <input type="text" placeholder="First Name">
                                    </div>                               
                                </div>
                                    <div class="col-lg-6">
                                    <div class="contact-field p-relative c-name mb-20">                                    
                                        <input type="text" placeholder="Last Name">
                                    </div>                               
                                </div>
                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-email mb-20">                                    
                                        <input type="text" placeholder="Write here youremail">
                                    </div>                                
                                </div>
                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-subject mb-20">                                   
                                        <input type="text" placeholder="I would like to discuss">
                                    </div>
                                </div>							
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-45">                                  
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                    </div>
                                    <div class="slider-btn">                                          
                                        <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send Message</a>					
                                    </div>                             
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            
        </section>
        <!-- contact-area-end -->
    </main>
    <!-- main-area-end -->
@endsection