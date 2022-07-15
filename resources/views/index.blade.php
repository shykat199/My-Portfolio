<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">--}}

    <title>My Portfolio</title>

    <link rel="shortcut icon" href="{{asset('images/' . $addProfile->img)}}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/vendor/animate/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/vendor/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/vendor/animate/animate.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{url('frontend/vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/vendor/nice-select/css/nice-select.css')}}.">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/vendor/fancybox/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/virtual.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/topbar.virtual.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="theme-red">

<!-- Back to top button -->
<div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
</div>

<!-- Setting button -->
<div class="config">
    <div class="template-config">
        <!-- Settings -->
        <div class="d-block">
            <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
        </div>
        <!-- Puschase -->
        <div class="d-block" style="border-radius: 3rem">
            <a href="https://github.com/shykat199" class="btn btn-primary btn-sm " title="Help" data-toggle="tooltip"
               data-placement="center">
                &nbsp;<i class="fa-brands fa-github fa-1x"></i>
            </a>
        </div>
        <!-- Help -->
        <div class="d-block mt-2" style="border-radius: 3rem">
            <a href="https://www.linkedin.com/in/shykay-roy/" class="btn btn-primary btn-sm " title="Help"
               data-toggle="tooltip" data-placement="center">
                &nbsp;<i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>
    </div>
    <div class="set-menu">
        <p>Select Color</p>
        <div class="color-bar" data-toggle="selected">
            <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
            <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
            <span class="color-item bg-theme-green" data-class="theme-green"></span>
            <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
            <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
        </div>

    </div>
</div>

<div class="vg-page page-home" id="home" style="background-image: url({{url('frontend/img/bg_image_1.jpg')}})">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
        <div class="container">
            <a href="" class="navbar-brand"><i><b>Shykat Roy</b></i></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav ml-auto">

                    @if($sectionData->homesection==1)
                        <li class="nav-item active">
                            <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
                        </li>
                    @endif
                    @if($sectionData->aboutsection==1)
                        <li class="nav-item">
                            <a href="#about" class="nav-link" data-animate="scrolling">About</a>
                        </li>
                    @endif
                    @if($sectionData->portfoliosection==1)
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
                        </li>
                    @endif
                    @if($sectionData->blogsection==1)
                        <li class="nav-item">
                            <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
                        </li>
                    @endif
                    @if($sectionData->contactsection==1)
                        <li class="nav-item">
                            <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
                        </li>
                    @endif

                </ul>
                <ul class="nav ml-auto">
                    <li class="nav-item">
                        <button class="btn btn-fab btn-theme no-shadow">En</button>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
        <h5 class="fw-normal">Welcome</h5>
        <h1 class="fw-light mb-4">I'm <b class="fg-theme">{{$data->title}}</b> {{$data->lasttitle}}</h1>
        <div class="badge">{{$data->subtitle}}</div>


    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
</div>

<div class="vg-page page-about" id="about">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 py-3">
                <div class="img-place wow fadeInUp">
                    <img src="{{asset('images/' . $addProfile->img)}}" alt="" style="height:348px; width:280px;
                    ">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                <h1 class="fw-light">{{$data->title}} {{$data->lasttitle}}</h1>
                <h5 class="fg-theme mb-3">{{$data->subtitle}}</h5>
                <p class="text-muted text-lg-start">
                    {{$personalInfo->shortdescription}}
                </p>
                <ul class="theme-list">
                    <li><b>From:</b> {{$personalInfo->address}}</li>
                    <li><b>Email:</b> {{$personalInfo->email}}</li>
                    <li><b>Age:</b> {{$personalInfo->age}}</li>
                    <li><b>Degree:</b> {{$personalInfo->degree}}</li>
                    <li><b>Gender:</b> {{$personalInfo->gender}}</li>
                </ul>
                <a href="{{url('/download/resume',$addProfile->resume)}}">
                    <button class="btn btn-theme-outline">Download CV</button>
                </a>

            </div>
        </div>
    </div>
    <div class="container py-5">
        <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
        <div class="row py-3">
            <div class="col-md-6">
                <div class="px-lg-3">
                    <h4 class="wow fadeInUp">Coding / Programming Skills</h4>

                    @foreach($mySkills as $mySkill)

                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">{{$mySkill->skillname}}</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{$mySkill->skillevel}}%;"
                                     aria-valuenow="{{$mySkill->skillevel}}" aria-valuemin="0"
                                     aria-valuemax="100">{{$mySkill->skillevel}}%
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
            <div class="col-md-6">
                <div class="px-lg-3">
                    <h4 class="wow fadeInUp">Design Skills</h4>

                    @foreach($myDesignSkills as $myDesignSkill)
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">{{$myDesignSkill->dskillname}}</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     style="width: {{$myDesignSkill->dskilllavel}}%;"
                                     aria-valuenow="{{$myDesignSkill->dskilllavel}}" aria-valuemin="0"
                                     aria-valuemax="100">{{$myDesignSkill->dskilllavel}}%
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="px-lg-3">
                    <hr class="mt-5" style="border-top: 1px solid #8c8b8b;">
                </div>
                <div class="px-lg-3" style="margin-top: 40px;">
                    <h4 class="wow fadeInUp">Language</h4>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">English</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100">65%
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Bengali</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100">90%
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Hindi</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100">70%
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6 wow fadeInRight">
                <h2 class="fw-normal">Education</h2>

                @foreach($myResume as $myResume)

                    @if($myResume['type']=='e')

                        <ul class="timeline mt-4 pr-md-5">
                            <li>
                                <div class="title">{{$myResume['time']}}</div>
                                <div class="details">
                                    <h5>{{$myResume['title']}}</h5>
                                    <small class="fg-theme">{{$myResume['organization']}}</small>
                                    <p>{{$myResume['about_exp']}}</p>
                                </div>
                            </li>
                        </ul>

                    @endif

                @endforeach


            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                <h2 class="fw-normal">Experience</h2>

                @foreach($myResume1 as $myResume)
                    @if($myResume->type=='p')
                        <ul class="timeline mt-4 pr-md-5">
                            <li>
                                <div class="title">{{$myResume->time}}</div>
                                <div class="details">
                                    <h5>{{$myResume->title}}</h5>
                                    <small class="fg-theme">{{$myResume->organization}}</small>
                                    <p>{{$myResume->about_exp}}</p>
                                </div>
                            </li>
                        </ul>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="vg-page page-service">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Service</div>
        </div>
        <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
        <div class="row mt-5">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card card-service wow fadeInUp">
                    <div class="icon">
                        <span class="ti-paint-bucket"></span>
                    </div>
                    <div class="caption">
                        <h4 class="fg-theme">App Development</h4>
                        {{--                        <p>There are many variations of passages of Lorem Ipsum available</p>--}}
                    </div>
                </div>
            </div>
            {{--            <div class="col-md-6 col-lg-4 col-xl-3">--}}

            {{--            </div>--}}
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card card-service wow fadeInUp">
                    <div class="icon">
                        <span class="ti-vector"></span>
                    </div>
                    <div class="caption">
                        <h4 class="fg-theme">UI/UX Design</h4>
                        {{--                        <p>There are many variations of passages of Lorem Ipsum available</p>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card card-service wow fadeInUp">
                    <div class="icon">
                        <span class="ti-desktop"></span>
                    </div>
                    <div class="caption">
                        <h4 class="fg-theme">Full Stack Web Development</h4>
                        {{--                        <p>There are many variations of passages of Lorem Ipsum available</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="vg-page page-funfact" style="background-image: url({{url('frontend/img/bg_banner.jpg')}});">
    <div class="container">
        <div class="row section-counter">

            <div class="col-md-6 col-lg-6 py-4 wow fadeIn">
                <h1 class="number" data-number="7">7</h1>
                <span>Project Compleate</span>
            </div>
            <div class="col-md-6 col-lg-6 py-4 wow fadeIn">
                <h1 class="number" data-number="3">3</h1>
                <span>Project Ongoing</span>
            </div>

        </div>
    </div>
</div>

<!-- Portfolio page -->
<div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Portfolio</div>
        </div>
        <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
        <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
            <button class="btn btn-theme-outline selected" data-filter="*">All</button>
            <button class="btn btn-theme-outline" data-filter=".apps">Application</button>
            <button class="btn btn-theme-outline" data-filter=".website">Website</button>
            <button class="btn btn-theme-outline" data-filter=".paper">Research Paper</button>

        </div>

        <div class="gridder my-3">
            <div class="grid-item apps wow zoomIn">
                <div class="img-place" data-src="{{url('images/pharmacy.jpg')}}" style="height: 300px;">
                    <img src="{{url('images/pharmacy.jpg')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Pharmacy Management System</h5>
                        <p>Java Swing Application</p>
                    </div>
                </div>
            </div>

            <div class="grid-item apps wow zoomIn">
                <div class="img-place" data-src="{{url('images/carrent.png')}}" style="height: 300px;">
                    <img src="{{url('images/carrent.png')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Car Rental System</h5>
                        <p>Java Swing Application</p>
                    </div>
                </div>
            </div>

            <div class="grid-item apps wow zoomIn">
                <div class="img-place" data-src="{{url('images/carrent.png')}}" style="height: 300px;">
                    <img src="{{url('images/carrent.png')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Car Management System</h5>
                        <p>Java Swing Application</p>
                    </div>
                </div>
            </div>

            <div class="grid-item apps wow zoomIn">
                <div class="img-place" data-src="{{url('images/calculator.png')}}" style="height: 300px;" >
                    <img src="{{url('images/calculator.png')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Scientific Calculator</h5>
                        <p>Java Swing Application</p>
                    </div>
                </div>
            </div>


            <div class="grid-item template website wow zoomIn">
                <div class="img-place" data-src="{{url('images/farm.jpg')}}" style="height: 300px;" >
                    <img src="{{url('images/farm.jpg')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Farm Store</h5>
                        <p>E-commerce website (Core php) & Mysql</p>
                    </div>
                </div>
            </div>
            <div class="grid-item website wow zoomIn">
                <div class="img-place" data-src="{{url('images/port.png')}}" style="height: 300px;" >
                    <img src="{{url('images/port.png')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Portfolio Website</h5>
                        <p>Laravel 8 & mysql</p>
                    </div>
                </div>
            </div>
            <div class="grid-item graphic website wow zoomIn">
                <div class="img-place" data-src="{{url('frontend/img/work/work-4.jpg')}}" style="height: 300px;">
                    <img src="{{url('frontend/img/work/work-4.jpg')}}" alt="" >
                    <div class="img-caption">
                        <h5 class="fg-theme">Forum Website</h5>
                        <p>Core Php & mysql</p>
                    </div>
                </div>
            </div>
            <div class="grid-item apps website wow zoomIn">
                <div class="img-place" data-src="{{url('images/customer.jpg')}}" style="height: 300px;">
                    <img src="{{url('images/customer.jpg')}}" alt="" >
                    <div class="img-caption">
                        <h5 class="fg-theme">Customer Management System</h5>
                        <p>Java Spring Boot</p>
                    </div>
                </div>
            </div>
            <div class="grid-item graphic website wireframes wow zoomIn">
                <div class="img-place" data-src="{{url('frontend/img/work/work-4.jpg')}}">
                    <img src="{{url('frontend/img/work/work-4.jpg')}}" alt="" style="height: 300px;">
                    <div class="img-caption">
                        <h5 class="fg-theme">Dynamic Carousel</h5>
                        <p>Core php & MySQLi</p>
                    </div>
                </div>
            </div>


            <div class="grid-item graphic paper wireframes wow zoomIn">
                <div class="img-place" data-src="{{url('images/Modern-Agriculture.jpg')}}" style="height: 300px;">
                    <img src="{{url('images/Modern-Agriculture.jpg')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Modern Agricultural Technology</h5>
                        <p>We have recently published another paper which is based recent
                            technology which may help farmer in day to day life.</p>
                    </div>
                </div>
            </div>

            <div class="grid-item graphic paper wireframes wow zoomIn">
                <div class="img-place" data-src="{{url('images/HUMAN-COMPUTER-INTERACTION-1000x500-1.jpg')}}" style="height: 298px;">
                    <img src="{{url('images/HUMAN-COMPUTER-INTERACTION-1000x500-1.jpg')}}" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Human-Computer Interaction</h5>
                        <p>Recently I have completed my first review paper on HCI & my topic
                            was Affective Computing The Real-Time HCI System</p>
                    </div>
                </div>
            </div>


        </div> <!-- End gridder -->
        <div class="text-center wow fadeInUp">
            <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
        </div>
    </div>
</div> <!-- End Portfolio page -->


<!-- hobby -->


<div class="vg-page page-client">
    <h1 class="text-center mb-5">My Hobbies</h1>

    <div class="container">

        <div class="row">

            @foreach ($myHobbies as $myHobby)

                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="card" style="width: 15rem;">
                        <img src="{{asset('images/hobby/'.$myHobby->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{$myHobby->hobbyname}}</h3>
                            <p class="card-text">{{$myHobby->description}}</p>

                        </div>
                    </div>
                </div>

            @endforeach


        </div>

    </div>
</div> <!-- End hobby -->

<!-- Blog -->
@if($sectionData->blogsection==1)
    <div class="vg-page page-blog" id="blog">
        <div class="container">
            <div class="text-center">
                <div class="badge badge-subhead wow fadeInUp">Blog</div>
            </div>
            <h1 class="text-center fw-normal wow fadeInUp">Latest Post</h1>
            <div class="row post-grid">
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="card">
                        <div class="img-place">
                            <img src="{{url('frontend/img/work/work-9.jpg')}}" alt="">
                        </div>
                        <div class="caption">
                            <a href="javascript:void(0)" class="post-category">Technology</a>
                            <a href="#" class="post-title">Invision design forward fund</a>
                            <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="card">
                        <div class="img-place">
                            <img src="{{url('frontend/img/work/work-9.jpg')}}" alt="">
                        </div>
                        <div class="caption">
                            <a href="javascript:void(0)" class="post-category">Business</a>
                            <a href="#" class="post-title">Announcing a plan for small teams</a>
                            <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="card">
                        <div class="img-place">
                            <img src="{{url('frontend/img/work/work-9.jpg')}}" alt="">
                        </div>
                        <div class="caption">
                            <a href="javascript:void(0)" class="post-category">Design</a>
                            <a href="#" class="post-title">5 basic tips for illustrating</a>
                            <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center py-3 wow fadeInUp">
                    <a href="blog-fullbar.html" class="btn btn-theme">See All Post</a>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- End blog -->

<!-- Contact -->
<div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Contact</div>
        </div>
        <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
        <div class="row py-5">
            <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">


                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d58839.61116722817!2d89.50530715204383!3d22.821883587034492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m3!3m2!1d22.8218083!2d89.5403268!4m0!5e0!3m2!1sen!2sbd!4v1657735838636!5m2!1sen!2sbd"
                    width="765" height="450" style="border:1px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
            <div class="col-lg-5">
                <form class="vg-contact-form" action="{{route('send.message')}}" method="post">
                    @csrf
                    <div class="form-row">

                        @if(\Illuminate\Support\Facades\Session::has('sendmail'))

                            <div class="alert alert-success" role="alert">
                                {{\Illuminate\Support\Facades\Session::get('sendmail')}}
                            </div>

                        @endif

                        <div class="col-12 mt-3 wow fadeInUp">
                            <input class="form-control" type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="col-6 mt-3 wow fadeInUp">
                            <input class="form-control" type="text" name="email" placeholder="Email Address">
                        </div>
                        <div class="col-6 mt-3 wow fadeInUp">
                            <input class="form-control" type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-12 mt-3 wow fadeInUp">
                            <textarea class="form-control" name="message" rows="6"
                                      placeholder="Enter message here.."></textarea>
                        </div>
                        <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- End Contact -->

<!-- Footer -->
<div class="vg-footer">
    <h1 class="text-center">Contact Details</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 py-3">
                <div class="footer-info">
                    <p>Where to find me</p>
                    <hr class="divider">
                    <p class="fs-large fg-white">{{$personalInfo->address}}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3">
                <div class="float-lg-right">
                    <p>Follow me</p>
                    <hr class="divider">
                    <ul class="list-unstyled">
                        @if($data->showicon==1)
                            <li><a href="https://www.instagram.com/shykat_roy/"><i
                                        class="fa-brands fa-instagram-square"></i> Instagram</a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-square"></i>
                                    Facebook</a></li>
                            <li><a href="https://twitter.com/shykat_roy"><i class="fa-brands fa-twitter-square"></i>
                                    Twitter</a></li>
                            <li><a href="https://www.linkedin.com/in/shykay-roy/"><i class="fa-brands fa-linkedin"></i>
                                    Linkedin</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 py-3">
                <div class="float-lg-right">
                    <p class="">Contact me</p>
                    <hr class="divider">
                    <ul class="list-unstyled">
                        <li>{{$personalInfo->email}}</li>
                        <li>{{$personalInfo->phone}}</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">

            <div class="col-12">
                <p class="text-center mb-0 mt-4">Copyright &copy;2022. All right reserved</p>

            </div>
        </div>
    </div>
</div> <!-- End footer -->


<script src="{{url('frontend/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('frontend/vendor/owl-carousel/owl.carousel.min.js')}}/"></script>

<script src="{{url('frontend/vendor/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

<script src="{{url('frontend/vendor/isotope/isotope.pkgd.min.js')}}"></script>

<script src="{{url('frontend/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>

<script src="{{url('frontend/vendor/fancybox/js/jquery.fancybox.min.js')}}"></script>

<script src="{{url('frontend/vendor/wow/wow.min.js')}}"></script>

<script src="{{url('frontend/vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>
<script src="{{url('frontend/vendor/animate/animate.css')}}"></script>

<script src="{{url('frontend/vendor/waypoints/jquery.waypoints.min.js')}}"></script>

<script src="{{url('frontend/js/google-maps.js')}}"></script>

<script src="{{url('frontend/js/topbar-virtual.js')}}"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>
