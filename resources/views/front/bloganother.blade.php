@extends('front.layout.layout')
@section('content')
<!-- blog content part start -->
<section id="blogcontent">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ">

                @foreach ($AnotherPosts as $item)

                <div class="blogcontent__left">

                    <div class="blogcontent__left__img">
                        <img src="{{asset('uploads/post').'/'.$item['image']}}" alt="" class="img-fluid  rounded">
                    </div>
                    <div class="blogcontent__left__title">
                        <a href="#">
                          {{ $item['title'] }} <br>
                        </a>
                        <a class="blogcontent__left__text fs-16">
                            {!! $item['short_desc'] !!}
                         
                        </a>
                        <div class="blogcontent__left__info mb-80">
                            <a class="blogcontent__left__text fs-16">
                                {!! $item['lond_desc'] !!}
                            </a>
                            <span class="date__time"><a href="#"><i class="far fa-clock"></i> &nbsp;  {{ $item['added_on'] }} </a>
                            </span>
                            <span class="post__author"><a href="#"><i class="far fa-user"></i> &nbsp;Mahmudul
                                </a>
                            </span>

                        </div>
                    </div>
                </div>
              @endforeach


                {{-- <div class="blogcontent__left">

                    <div class="blogcontent__left__img">
                        <img src="{{ asset('assets/images/blog/large_psot_one.jpg')}}" alt=""
                            class="img-fluid  rounded">
                    </div>
                    <div class="blogcontent__left__title">
                        <a href="#">
                            You can browse naptechlab with mobile phone.
                        </a>
                        <p class="blogcontent__left__text fs-16">
                            Lorem Ipsum has been the industry's
                             standard dummy text
                            ever since the 1500s, when an
                            unknown printer took a galley of
                            type and scrambled it to make a type ...
                        </p>
                        <div class="blogcontent__left__info mb-80">
                            <span class="date__time"><a href="#"><i class="far fa-clock"></i> &nbsp; 20 Decembor
                                    2020</a>
                            </span>
                            <span class="post__author"><a href="#"><i class="far fa-user"></i> &nbsp;Mahmudul
                                </a>
                            </span>

                        </div>
                    </div>

                </div> --}}

           
            </div>
        
            <div class="col-lg-5 col-md-12">

                <div class="blogcontent__right">
                    <div class="search__bar mb-80">
                        <input type="text" class="searh--field" placeholder="Search Here...">
                        <button type="submit" class="btn__img">
                             <img src="{{ asset('assets/images/blog/search-icon.svg')}}" 
                             alt="" class="search--icon"></button>
                    </div>
                    <div class="recent__post">
                        <div class="recent__posttitle">
                            <h3>Recent Post</h3>
                            <div class="devider"></div>
                        </div>
                       @foreach ($AnotherPosts as $item)

                         
                        <!-- two -->
                        <div class="recent_postbox">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="recent__postimg">
                                        <img src="{{asset('uploads/post').'/'.$item['image']}}" alt="" class="img-fluid rounded">
                                           
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="recent__postcontent">
                                        <a href="#">
                                            <h2>You can browse napTech lab
                                                with mobile phone.</h2>
                                        </a>
                                        <div class="blogcontent__left__info mt-100">
                                            <span class="date__time"><a href="#"><i class="far fa-clock"></i>
                                                    &nbsp; {{ $item['added_on'] }}    </a>
                                                  
                                            </span>
                                            <span class="post__author"><a href="#"><i class="far fa-user"></i>
                                                    &nbsp;Mahmudul
                                                </a>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        {{-- <div class="recent__poststatus">
                            <!-- one -->

                            <div class="recent_postbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="recent__postimg">
                                            <img src="{{ asset('assets/images/blog/recent_post_one.jpg')}}" alt=""
                                                class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="recent__postcontent">
                                            <a href="#">
                                                <h2>You can browse napTech lab
                                                    with mobile phone.</h2>
                                            </a>
                                            <div class="blogcontent__left__info mt-100">
                                                <span class="date__time"><a href="#"><i class="far fa-clock"></i>
                                                        &nbsp;
                                                        20
                                                        Decembor
                                                        2020</a>
                                                </span>
                                                <span class="post__author"><a href="#"><i class="far fa-user"></i>
                                                        &nbsp;Mahmudul
                                                    </a>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- two -->
                            <div class="recent_postbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="recent__postimg">
                                            <img src="{{ asset('assets/images/blog/recent_post_two.jpg')}}" alt=""
                                                class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="recent__postcontent">
                                            <a href="#">
                                                <h2>You can browse napTech lab
                                                    with mobile phone.</h2>
                                            </a>
                                            <div class="blogcontent__left__info mt-100">
                                                <span class="date__time"><a href="#"><i class="far fa-clock"></i>
                                                        &nbsp;
                                                        20
                                                        Decembor
                                                        2020</a>
                                                </span>
                                                <span class="post__author"><a href="#"><i class="far fa-user"></i>
                                                        &nbsp;Mahmudul
                                                    </a>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- two -->
                            <div class="recent_postbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="recent__postimg">
                                            <img src="{{ asset('assets/images/blog/recent_post_three.jpg')}}" alt=""
                                                class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="recent__postcontent">
                                            <a href="#">
                                                <h2>You can browse napTech lab
                                                    with mobile phone.</h2>
                                            </a>
                                            <div class="blogcontent__left__info mt-100">
                                                <span class="date__time"><a href="#"><i class="far fa-clock"></i>
                                                        &nbsp;
                                                        20
                                                        Decembor
                                                        2020</a>
                                                </span>
                                                <span class="post__author"><a href="#"><i class="far fa-user"></i>
                                                        &nbsp;Mahmudul
                                                    </a>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- two -->
                            <div class="recent_postbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="recent__postimg">
                                            <img src="{{ asset('assets/images/blog/recent_post_four.jpg')}}" alt=""
                                                class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="recent__postcontent">
                                            <a href="#">
                                                <h2>You can browse napTech lab
                                                    with mobile phone.</h2>
                                            </a>
                                            <div class="blogcontent__left__info mt-100">
                                                <span class="date__time"><a href="#"><i class="far fa-clock"></i>
                                                        &nbsp;
                                                        20
                                                        Decembor
                                                        2020</a>
                                                </span>
                                                <span class="post__author"><a href="#"><i class="far fa-user"></i>
                                                        &nbsp;Mahmudul
                                                    </a>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- five -->
                            <div class="recent_postbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="recent__postimg">
                                            <img src="{{ asset('assets/images/blog/recent_post_five.jpg')}}" alt=""
                                                class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="recent__postcontent">
                                            <a href="#">
                                                <h2>You can browse napTech lab
                                                    with mobile phone.</h2>
                                            </a>
                                            <div class="blogcontent__left__info mt-100">
                                                <span class="date__time"><a href="#"><i class="far fa-clock"></i>
                                                        &nbsp;
                                                        20
                                                        Decembor
                                                        2020</a>
                                                </span>
                                                <span class="post__author"><a href="#"><i class="far fa-user"></i>
                                                        &nbsp;Mahmudul
                                                    </a>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}
                    </div>

                    <div class="recent__posttitle">
                        <h3>Category</h3>
                        <div class="devider mb-3"></div>
                    </div>
                    <div class="badge text-left ">
                        <P class="badge-link">
                            <a href="#">Games</a>
                        </P>
                        <P class="badge-link">
                            <a href="#">Android Apps</a>
                        </P>
                        <P class="badge-link">
                            <a href="#">Website</a>
                        </P>
                        <P class="badge-link">
                            <a href="#">Tech News</a>
                        </P>
                        <P class="badge-link">
                            <a href="#">Notice</a>
                        </P>
                    </div>

                </div>
            </div> 
            
        </div>
    </div>
</section>

<!-- blog content part start -->
@endsection