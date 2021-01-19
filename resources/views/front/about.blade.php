@extends('front.layout.layout')
@section('content')

    <!--============== ABOUT SECTION START =============== -->

    <section id="about" class="pt-300 ">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-md-12 col-lg-7">
                    <div class="about-heading">
                        <h1 class="text-center mt-80">ABOUT NAPTECH LABS</h1>
                    </div>
                </div>
            </div>
    </section>

    <!--============== ABOUT SECTION END =============== -->
    <!--============== ABOUT INFORAMTION SECTION START =============== -->

    <section id="about-infromation" class="mb-100">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-company">
                        <img src="{{ asset('assets/images/title-logo.png')}}" alt="title-logo" class="c-m">
                        <h2 class="c-h2 ">Who We Are</h2>
                        <p>
                            NapTech Labs Ltd. is a new growing IT company based in the United Kingdom and Bangladesh. When the whole world was shut down because of COVID-19, we grew. We start work with the logic, "Do your work with napping at home.”Our focus is on creating innovative real-life solutions through the latest smart technology for Mobile, Tablet, PC, & Web platforms. We believe that to be meaningful, and in style, we need to embrace our passion for taking innovative and future technologies to the next level.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="creative-it-agency">
                        <img src="{{ asset('assets/images/creative-it-agency.jpg')}}" alt="" class="img-fluid">
                        <h2 class="text-white text-center p-3 fs-24">We Are Creative IT Agency</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============== ABOUT INFORAMTION SECTION END =============== -->

    <!--============== LEADERS SECTION START =============== -->

    <section id="leaders" class="mb-100">
        <div class="container">
            <img src="{{ asset('assets/images/title-logo.png')}}" alt="title-logo" class="c-m">
            <h2 class="c-h2 ">Leaders of Nap Tech Labs</h2>
            <div class="row justify-content-md-center">
                <!-- one -->
                @foreach ($AllLeader as $data)
                  <div class="col-md-6 col-sm-12 col-lg-4">
                    <div class="info-card">
                        <div class="card-content">
                            <h2 class="name">{{ $data['name'] }}</h2>
                            <h5 class="prof">{{ $data['position'] }}</h5>
                            <div class="devider"></div>

                            <div class="socail-info">
                                <a href="{{ $data['facebook'] }}"> <i class="fab fa-facebook"></i></a>
                                <a href="{{ $data['linkedin'] }}"> <i class="fab fa-linkedin "></i></a>
                                <a href="{{ $data['twitter'] }}"> <i class="fab fa-twitter "></i></a>
                                <a href="{{ $data['envelope'] }}"> <i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                        
                        <div class="photos" style="background-image: url({{asset('uploads/leader').'/'.$data['image']}});"></div>
                        <div class="sub-info">
                            <h2 class="name">{{ $data['name'] }}</h2>
                            <h4>{{ $data['position'] }}</h4>
                        </div>
                     </div>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--============== LEADERS SECTION END =============== -->

    <!--============== MISSION-VISSION SECTION START =============== -->
        <section id="mission" class="mb-100">
                <div class="container">
                    <!-- mission -->
                    <div class="row mb-100">
                        <div class="col-md-6">
                            <div class="creative-it-agency">
                                <img src="{{ asset('assets/images/creative-it-agency.jpg')}}" alt="" class="img-fluid">
                                <h2 class="text-white text-center p-3 fs-24">We Are Creative IT Agency</h2>
                            </div>
                        </div>
                        <div class="col-md-6"><br>
                            <div class="about-company">
                                <img src="{{ asset('assets/images/title-logo.png')}}" alt="title-logo" class="c-m">
                                <h2 class="c-h2 ">Mission of Nap Tech Labs</h2>
                                <p>
                                    With a mission to provide a new different look on IT Industries, We are producing innovative, attractive IT services and AR/VR solutions using our ingenious specialist and giving a flexible environment to all our employees to have the freedom to hone their skills and imagination.
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- mission -->

                    <!-- vission -->
                    <div class="row">
                        <div class="col-md-6 d-md-none d-sm-block">
                            <div class="creative-it-agency">
                                <img src="{{ asset('assets/images/creative-it-agency.jpg')}}" alt="" class="img-fluid">
                                <h2 class="text-white text-center p-3 fs-24">We Are Creative IT Agency</h2>
                            </div>
                        </div>
                        <div class="col-md-6"><br>
                            <div class="about-company">
                                <img src="{{ asset('assets/images/title-logo.png')}}" alt="title-logo" class="c-m">
                                <h2 class="c-h2 ">Vission of Nap Tech Labs</h2>
                                <p>
                                    Our clear vision is followed with persistence and determination and whose goal is to provide the best IT products and services with the best possible entertainment value. This approach seeks to achieve quality and service excellence while maintaining the team's highest talent.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="creative-it-agency">
                                <img src="{{ asset('assets/images/creative-it-agency.jpg')}}" alt="" class="img-fluid">
                                <h2 class="text-white text-center p-3 fs-24">We Are Creative IT Agency</h2>
                            </div>
                        </div>
                    </div>
                    <!-- vission -->
                </div>
        </section> 
    <!--============== MISSION-VISSION SECTION END =============== -->
    <!--============== TECH EXPERTS SECTION START =============== -->

    <section id="team" class="mb-100">
        <div class="container" id="">
            <img src="{{ asset('assets/images/title-logo.png')}}" alt="title-logo" class="c-m">
            <h2 class="c-h2 ">Some Tech Experts of Nap Tech Labs</h2>
            <div class="row">

             @foreach ($AllExpert as $list)
                <div class="col-md-6 col-sm-12 col-lg-4">
                    <div class="info-card">
                        <div class="card-content">
                            <h2 class="name">{{ $list['name'] }}</h2>
                            <h5 class="prof">{{ $list['position'] }}</h5>
                            <div class="devider">
                                
                            </div>
                            <div class="socail-info">
                                <a href="{{ $list['facebook'] }}"> <i class="fab fa-facebook"></i></a>
                                <a href="{{ $list['linkedin'] }}"> <i class="fab fa-linkedin "></i></a>
                                <a href="{{ $list['twitter'] }}"> <i class="fab fa-twitter "></i></a>
                                <a href="{{ $list['envelope'] }}"> <i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                        <img src="{{asset('public/storage/expert').'/'.$list['image']}}" alt="image">
                        <div class="photos" style="background-image: url({{asset('uploads/expertTeam').'/'.$list['image']}});"></div>
                        <div class="sub-info">
                            <h2 class="name">{{ $list['name'] }}</h2>
                            <h4>{{ $list['position'] }}</h4>
                        </div>

                    </div>
                </div>
            @endforeach
       
            </div>
        </div>
    </section>
    <!--============== TECH EXPERTS SECTION END =============== -->

    @endsection