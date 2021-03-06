@extends('admin.layout.layout')
@section('content')
{{-- 
       <div class="container-fluid "> 

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">Dashboard</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings mr-1"></i> Settings
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div> 
       </div> --}}
       <div class="container">
                            <h2>Manage Post</h2>
                            {{-- @if (Session::has('message_sent'))
                        <div class="alert alert-success" roll="alert">
                            {{ Session::get('msg') }}
                        </div>
                        @endif --}}
                          <a href="list" class="btn btn-info" >Back to List</a>
                            <form method="post" action="{{ url('PostSubmit') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="title">Title </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Title">
                                        @error('title')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="short_desc">Short Desc</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea name="short_desc" id="short_desc" cols="90" rows="6"></textarea>  
                                    </div>
                                    @error('short_desc')
                                        {{$message}}
                                        @enderror
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align"  for="lond_desc">Long Desc</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea name="lond_desc" id="lond_desc"  cols="90" rows="10"></textarea>  
                                    </div>
                                    @error('lond_desc')
                                        {{$message}}
                                        @enderror
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align">Image </label>
        
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" name="image">
                                        @error('image')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                          
                                <div class="item form-group">
                                    <label class="col-form-label  col-md-3 col-sm-3 col-lg-12 label-align">Added on </label>
        
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="date" name="added_on" class="form-control">
                                        @error('added_on')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label  col-md-3 col-sm-3 col-lg-12 label-align">Post Date </label>
        
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="date" name="post_date" class="form-control">
                                        @error('post_date')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
        
                            </form>
                        </div>             
                           <!-- end row -->  
      </div> 
        <!-- Loader -->
@endsection

@section('E-style')
<link href="{{ asset('admin_assets/css/summernote-bs4.css')}}" rel="stylesheet" type="text/css">  
@endsection

@section('E-script')
<script src="{{ asset('admin_assets/js/summernote-bs4.js')}}"></script>





<script>
    $('#short_desc').summernote({
        placeholder: 'Short Desctiption',
        width: 800,
        height: 250
    });
</script>

<script>
    $('#lond_desc').summernote({
        placeholder: 'Long Desctiption',
        width: 800,
        height: 300
    });
</script>
@endsection

@if(Session::has('message_sent'))

<script>
    toastr.success("{!! section::get(message_sent) !!}");
</script>

@endif

@if(Session::has('message_sent'))
<section>
    swal("Congratulation!", "{!! Session::get('message_sent') !!}", "Success",{
        buutton:"OK"
    })
</section>

@endif