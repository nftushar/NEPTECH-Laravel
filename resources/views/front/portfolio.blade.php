@extends('front.layout.layout')
@section('content')
     <!-- ==============HERO SECTON START================================== -->
     <section id="hero" class="pt-300 mb-200">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="  col-md-12 col-lg-7">
                    <div class="hero-inner">
                        <div class="hero-text">
                            <h1 class="text-center">Think. Creative. Art</h1>
                            <p>NapTech Games is a part of NapTech Labs Ltd. Based in the <br> United Kingdom and
                                Bangladesh.
                                We
                                implement our</p>

                        </div>
                        <div class="hero-btn mt-50">
                            <a href="#portfolio" class="see-work">See Our Work <i class="fas fa-long-arrow-alt-down"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ==============HERO SECTION END================================== -->

    <!-- ==============PORTFOLIO SECTION START================================== -->

    <section id="portfolio">
        <div class="container">
           <div class="row">
                <!-- one -->
              @foreach ($Allportfolio as $list)
                  <div class="col-md-12 bg-one mb-100" style="background-color:{{ $list['colour'] }} " > 
                    <div class="row">

                        <div class="col-md-12 col-lg-6 ">
                            <div class="portfolio-text  mb-200">
                                <h2>{{ $list['title'] }}</h2>
                                <p>{{ $list['short_desc'] }} </p>
                               
                                <div class="white-row">

                                </div>

                                <div class="portfolio-btn mt-50">

                                  <a href="{{ $list['link'] }}" class="view-app">View app on playstore <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <div class="portfolio-img">
                                <img src="{{ asset('uploads/portfolio/'.$list['image']) }}" alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div> 
              @endforeach
            </div>
        </div>
    </section>

    <!-- ==============PORTFOLIO SECTION END================================== -->

    @endsection