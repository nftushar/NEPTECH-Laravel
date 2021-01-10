@extends('admin/layout.layout')

@section('page_title','Manage page')

@section('content')

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
</div>

<div class="container">
    <h2>Manage Page</h2>
    @if (Session::has('message_sent'))
<div class="alert alert-success" roll="alert">
    {{ Session::get('msg') }}
</div>
@endif
  <a href="page_list" class="btn btn-info" >Back to Pgae List</a>
    <form method="post" action="{{ url('page_submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="title">Name </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="name" class="form-control" placeholder="Name">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="slug">Slug</label>
            <div class="col-md-6 col-sm-6 ">
                <textarea name="slug"  var ='slug'  id="slug" cols="100" rows="7"> {!!$var='slug'!!} </textarea>
                
            </div>
            @error('slug')
                {{$message}}
                @enderror
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="description">Description</label>
            <div class="col-md-6 col-sm-6 ">
                <textarea name="description"  id="description" cols="100" rows="11"> {!!$var='description'!!} </textarea>
            </div>
            @error('description')
                {{$message}}
                @enderror
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
</div>
@endsection

@section('E-style')
<link href="{{ asset('admin_assets/css/summernote-bs4.css')}}" rel="stylesheet" type="text/css">  
{{-- <link href="{{ asset('admin_assets/ckeditor/css/style.css')}}" rel="stylesheet" type="text/css">   --}}

@endsection

@section('E-script')
<script src="{{ asset('admin_assets/js/summernote-bs4.js')}}"></script>
{{-- <script src="{{ asset('admin_assets/ckeditor/ckeditor.js')}}"></script> --}}
    
<script>
    $('#slug').summernote({
        placeholder: 'Slug',
        tabsize: 5,
        height: 100
    });
</script>

<script>
    $('#description').summernote({
        placeholder: 'Description',
        tabsize: 5,
        height: 150
    });
</script>


@endsection