@extends('front.layout.layout')
@section('content')
    <!--============== CARRIER-BANNER START =============== -->

    <section id="carrier-banner" class="pt-300 mb-100 Nap">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-md-12 col-lg-7">
                    <div class="carrier-heading ">
                        <h1 class="text-center mt-80 text-white c-heading">Connect to Nap Tech Labs</h1>
                    </div>
                </div>
            </div>
    </section>

    <!--============== CARRIER-BANNER END =============== -->

    <!--============== CONNECT SECTION START =============== -->

    <section id="connect" class=" mb-100  info ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="connect-information">
                        <img src="{{ asset('assets/images/title-logo.png')}}" alt="title-logo" class="c-m">
                        <h2 class="c-h2 ">Contact Information</h2>

                        <div class="connect-inform">
                            <div class="connect-getting">
                                <div class="connect-info-icon">
                                    <i class="fas fa-map-marker-alt"></i><span>Location</span>
                                </div>
                                <div class="connect-info">
                                    Head Office <br>
                                    Nahar Plaza (Suite-703A), 26 <br> Sonargaon road, Hatirpool, <br> Dhaka-1000, Bangladesh.
                                </div>
                            </div>
                            <div class="connect-getting">
                                <div class="connect-info-icon">
                                    <i class="fas fa-envelope-open"></i><span>Get In Touch</span>
                                </div>
                                <div class="connect-info">
                                    Contact@naptechgames.com
                                </div>
                            </div>

                            <div class="connect-getting">
                                <div class="connect-info-icon">
                                    <i class="fas fa-phone"></i><span>Contact Us</span>
                                </div>
                                <div class="connect-info">
                                    +8801946009040
                                </div>
                            </div>
                            {{-- <div class="connect-getting">
                                <div class="connect-info-icon">
                                    <i class="fab fa-linkedin"></i><span>Connect With Linkdin</span>
                                </div>
                                <div class="connect-info">
                                    https://www.linkedin.com/company/naptech-games/
                                </div>

                            </div> --}}
                        </div>

                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="google-map-connect">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d456.51270064260376!2d90.392126!3d23.7437559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7400e68e8a2f857c!2sNahar%20Plaza!5e0!3m2!1sen!2sbd!4v1602593015406!5m2!1sen!2sbd" width=600" height="640" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============== CONNECT SECTION END =============== -->
    @endsection