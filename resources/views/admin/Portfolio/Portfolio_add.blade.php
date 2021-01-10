@extends('admin.layout.layout')
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
                            <h2>Manage Portfolio</h2> 
                            <a href="/portfolio-list" class="btn btn-info" >Back to List</a>
                            @if (Session::has('message_sent'))
                        <div class="alert alert-success" roll="alert">
                            {{ Session::get('msg') }}
                        </div>
                        @endif
                         
                            <form method="post" action="{{ url('portfolio-add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="title">Title</label>
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
                                        <input type="text" name="short_desc" class="form-control" autocomplete="off" placeholder="Short Desc">
                                        @error('short_desc')
                                        {{$message}}
                                        @enderror
                                    </div>
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
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="position">Add Link</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="link" class="form-control" autocomplete="off" placeholder="Link">
                                        @error('link')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="colour">Select BG colour</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="color" name="colour" class="form-control" autocomplete="off" placeholder="Colour">
                                        @error('colour')
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
@endsection
