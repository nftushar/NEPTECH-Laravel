
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NapTechLabs</title>
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/images/favicon.ico') }}">
    <!-- google fonts cdn link -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Poppins:wght@300;400;500;700&family=Roboto&display=swap"
        rel="stylesheet">
    <!-- flaticon link -->
    <link rel="stylesheet" href="{{ asset('assets/flaticon/font/flaticon.css') }}">
    <!-- fontawsome link -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- bootstarp css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- home page css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- about page css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <!-- blog page style sheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
    <!-- blog page style sheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bloganother.css')}}">
    {{-- services --}}
    <link rel="stylesheet" href="{{ asset('assets/css/service.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/connect.css')}}">
    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/carrier.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/apply.css') }}">



</head>

<body>
    <!--============== HEADER SECTION START =============== -->  .
    <header id="header" class=" fixed-top">
        <div class="container text-center">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="logo" class="logo img-fluid">
                </a>
                <button class="navbar-toggler " type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('portfolio')}}">Portfolio</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" class="nav-link" href="{{url('service')}}">Services</a>
                        </li>

                        <div class="visit"> <a href="https://naptechgames.com">Visit Us</a> </div>
                        <li class="nav-item">
                            <a class="nav-link" href="https://naptechgames.com" target="_blank"> Games</a>
                        </li>

                       {{-- <li class="nav-item">
                            <a href="{{url('apply-now')}}">Apply</a>
                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('career')}}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('blog')}}">Blog</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{url('contact-us')}}">Blog Another</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('connect')}}">Connect</a>
                        </li> 
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--============== HEADER SECTION END =============== -->
    <div class="container-fluid">
        <div class="row">

            @yield('content')

        </div>
    </div>

    <section id="contact" class="mb-100">
        <div class="container">
          <section>
            <div class="container">
                <div class="row m-auto">
                    <div class="col-md-12 col-lg-6 mb-5">
                        <div class="form__area">
                            <h2>Get A free Consultation</h2>
                            <p>Get a Guranted call Back In 24 Ours</p>
                            <form action="#" class="form">
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name" class="input__field" required>
                                    <i class="fa fa-user form__icon"></i>
    
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="input__field" required>
                                    <i class="fa fa-envelope form__icon"></i>
    
                                </div>
                                <div class="form-group">
                                    <input type="number" placeholder="Passswod" class="input__field" required>
                                    <i class="fa fa-phone form__icon"></i>
    
                                </div>
    
                                <div class="form-group">
                                    <span id="filename">Upload Your File</span>
                                    <label for="file-upload" class="upload"><i
                                            class="fas fa-cloud-upload-alt msg"></i>&nbsp;
                                        Browse <input type="file" id="file-upload">
                                    </label>
                                </div>
                                <input type="submit" value="submit" class="sub__btn form-control">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 image">
                        <img src="assets/images/blog/consult__img.png" alt="" class="img-fluid">
                    </div>
                </div>
    
            </div>
        </section>
    
    
    
        </div>
        </div>
    </section>
    <!--============== CONTACT SECTION END =============== -->
    
    <!-- ================COUNTRY SECTION START=================================== -->
    <section id="country" class="mb-50">
    
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="usa-flag">
                        <img src="assets/images/usa-flag.png" alt="usa flag">
                        <div class="details">
                            <h5>RAVENDALE COURT 143-145 PAYNES ROAD,</h5>
                            <h5>HAMPSHIRE, SOUTHAMPTON, UK</h5>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="bd-flag">
                        <img src="assets/images/bd-flag.png" alt=" bd flag">
                        <div class="details">
                            <h5>NAHAR PLAZA (SUITE-703A), 26 SONARGAON ROAD, HATIRPOOL,</h5>
                            <h5>DHAKA-1000, BANGLADESH.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- ================COUNTRY SECTION END=================================== -->
    


    <!-- ================FOOTER SECTION START=================================== -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3 mb-25">
                    <div class="naptech-white-logo">
                        <img src="{{ asset('assets/images/white-logo.png')}}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-12 col-lg-3 mb-25">
                    <div class="help-list">
                        <ul>
                            <p class="footer-heading">Quick Navigation</p>

                            <li><a href="{{url('about')}}">Who We Are</a></li>
                            <li><a href="{{url('about#team')}}">Team</a></li>

                            <li><a href="https://naptechgames.com" target="_blank">Games</a></li>
                            <li><a href="{{url('career')}}">We’re Hiring</a></li>
                            <li><a href="#">Thoughts</a></li>
                            <li><a href="{{url('connect')}}">Let’s Talk</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 mb-25">
                    <div class="help-list">
                        <ul>
                            <p class="footer-heading">Service</p>
                            <li><a href="#">iOS App Developement</a></li>
                            <li><a href="#">Android App Development</a></li>
                            <li><a href="#">UX/UI Strategy & Design</a></li>
                            <li><a href="#">Mobile game Developement</a></li>
                            <li><a href="#">Web platform</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-lg-3">
                    <div class="register">
                        <div>
                            <h5>Register for our Newsletter now</h5>
                        </div>
                        <div>
                            <p>We are always ready to welcome you!</p>
                        </div>

                        <form action="#"  method="POST" class="register-form">
                            @csrf
                            <div class="email-data col-md-12 col-sm-6">
                                <div class="form-group d-flex mb-25">
                                    <input type="email" placeholder="Enter your Email address "
                                        class="regi-data" required>
                                    <label for="sub" class="register-icon"><i class="fas fa-envelope"></i></label>
                                    <input type="submit" id="sub">

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <hr class="gray-row">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-25">
                            <span class="copyright">&copy2021 NapTech Labs LTD. All Rights Reserved </span>
                        </div>
                     @foreach ($social as $item)
                        <div class="col-md-12 col-lg-6 d-flex justify-content-end">
                            <div class="footer-socail">
                                <a href="{{ $item['facebook'] }}" target="_blank">
                                       <i class="fab fa-facebook  round"></i></a>
                                <a href="{{ $item['twitter'] }}" target="_blank">
                                       <i class="fab fa-twitter round"></i></a>
                                <a href="{{ $item['insta'] }}" target="_blank">
                                    <i class="fab fa-instagram round"></i></a>
                            </div>
                        </div>
                     @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================FOOTER SECTION END=================================== -->
    <!-- js files here -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('https://www.google.com/recaptcha/api.js')}}" async defer></script>

</body>

</html>

{{-- <div class="col-md-12 col-lg-6 d-flex justify-content-end">
    <div class="footer-socail">
        <a href="https://www.facebook.com/naptechlabs" target="_blank"><i
                class="fab fa-facebook  round"></i></a>
        <a href="https://twitter.com/naptechgames" target="_blank"><i
                class="fab fa-twitter round"></i></a>
        <a href="https://www.instagram.com/naptechgames/" target="_blank"><i
                class="fab fa-instagram round"></i></a>

    </div>
</div> --}}