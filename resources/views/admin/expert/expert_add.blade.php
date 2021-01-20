@extends('admin.layout.layout')
@section('content')

       <div class="container">
                            <h2>Manage Expert</h2> 
                            <a href="/expert-list" class="btn btn-info" >Back to List</a>
                            @if (Session::has('message_sent'))
                        <div class="alert alert-success" roll="alert">
                            {{ Session::get('msg') }}
                        </div>
                        @endif
                         
                            <form method="post" action="{{ url('expert-add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="name">Name </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Name">
                                        @error('name')
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
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="position">position </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="position" class="form-control" autocomplete="off" placeholder="position">
                                        @error('position')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="facebook">Add facebook Link</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="facebook" class="form-control" autocomplete="off" placeholder="facebook">
                                        @error('facebook')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="linkedin">Add Linkedin Link</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="linkedin" class="form-control" autocomplete="off" placeholder="Linkedin">
                                        @error('linkedin')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="twitter">Add twitter Link</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="twitter" class="form-control" autocomplete="off" placeholder="twitter">
                                        @error('twitter')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="envelope">Add envelope Link</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="envelope" class="form-control" autocomplete="off" placeholder="envelope">
                                        @error('envelope')
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
