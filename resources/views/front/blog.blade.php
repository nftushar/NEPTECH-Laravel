@extends('front.layout.layout')
@section('content')
<!-- blog content part start -->
<section id="blogcontent">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">

               @foreach ($UserPost as $item)

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
                        {{-- <div class="blogcontent__left__info mb-80">
                            <a class="blogcontent__left__text fs-16">
                                {!! $item['lond_desc'] !!}
                            </a>
                            <span class="date__time"><a href="#"><i class="far fa-clock"></i> &nbsp;  {{ $item['added_on'] }} </a>
                            </span>
                            <span class="post__author"><a href="#"><i class="far fa-user"></i> &nbsp;Mahmudul
                                </a>
                            </span>

                        </div> --}}
                    </div>
                </div>
              @endforeach

                
                <div class="blog__post mt-100">
                    @foreach ($UserPost as $item)
                 
                            <div class="blog__content">
                                <div class="row ">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="blog__post__img">
                                        
                                            <img src="{{asset('uploads/post').'/'.$item['image']}}" alt="" class="img-fluid  rounded">

                                                
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="blog__post__text">
                                            <a href="#">
                                                <h2> {!! $item['title'] !!} </h2>
                                                
                                            </a>
                                            <p class="fs-16">
                                                {!! $item['short_desc'] !!}

                                            </p>
                                            <div class="blogcontent__left__info mb-80">
                                                <span class="date__time"><a href="#"><i class="far fa-clock"></i> &nbsp; {{ $item['added_on'] }} </a>
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
                            <br>
                    @endforeach 
                </div>
            </div>

{{-- //search start --}}

            <div class="col-lg-5 col-md-12">
                <div class="blogcontent__right">
                    <div class="search__bar mb-80">

                      <form action="">
                        <input type="text" id="post_search" name="post_search" class="searh--field search" placeholder="Search Here...">
                        <button type="submit" class="btn__img"><img src="{{ asset('assets/images/blog/search-icon.svg')}}" alt=""
                                class="search--icon"></button>
                      </form>
                      
                    </div>
                    <div class="recent__post">
                        <div class="recent__posttitle">
                            <h3>Recent Post</h3>
                            <div class="devider"></div>
                        </div>
                        <div class="recent__poststatus">
                            <!-- one -->

                            @foreach ($UserPost as $item)
                                <!-- two -->
                                <div class="recent_postbox">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="recent__postimg">
                                                <img src="{{asset('uploads/post').'/'.$item['image']}}" alt="" class="img-fluid rounded">       
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="blogcontent__left__info mt-100">
                                                &nbsp; {{ $item['title'] }}    </a>                                                          
                                                  </div>
                                            <div class="recent__postcontent">
                                                {{-- <a href="#">
                                                    <h2>You can browse napTech lab
                                                        with mobile phone.</h2>
                                              
                                                </a> --}}
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
                        </div>
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

@section('E-script')
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


@endsection


@section('E-script')

<section type="text/javascript">
 

    <script src="{{ asset('auto.js') }}"></script>


            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script type="text/javascript">

    <script src="{{ asset('assets/auto.js') }}"></script>
                  

           </script>
</section>



{{-- <script>
    $(document).ready(function(){
       function fetch_data(search=""){
    //        $.ajex({
    //            url:BASE_URL+"/blog_manage_ajex?search="+search,
    //            success:function(data){
    //                $('.recent__poststatus div).html(data)');
    //            }
                
    //        )}
    //    }

        //        $(document).on('keyup', '#post_search', function(){
        //           var search = $('#post_search').val();
        //           fetch_data(search);
        //        });
           });
      --}}
{{-- </script> --}}

@endsection