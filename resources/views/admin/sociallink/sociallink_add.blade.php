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
    <form method="post" action="{{ url('sociallink-add') }}">
        @csrf
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="title">Facebook</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="facebook" class="form-control" placeholder="Facebook">
                @error('facebok')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="insta">Twitter</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                    @error('twitter')
                        {{$message}}
                        @enderror
            </div> 
       </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="description">Instagram</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="insta" class="form-control" placeholder="Instagram">
                    @error('insta')
                        {{$message}}
                        @enderror
            </div> 
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
          
    <table>
        <tr>
     @foreach ($AllSociallink as $list)
            <tr>
               <th>{{ $list['id'] }}</th><br>
               <th>{{ $list['facebook'] }}</th><br>
               <th>{{ $list['twtter'] }}</th><br>
               <th>{{ $list['insta'] }}</th><br>
        </tr>
    @endforeach
    </table>



@endsection