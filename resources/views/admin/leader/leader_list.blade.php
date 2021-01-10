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
                            <h2>Manage Leader</h2>
                            <!-- end page title -->
                            <a href="leader-add" class="btn btn-info" >Add Leaders</a>
                       {{ session('msg') }}
                      
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%" ><h5>ID No.</h5></th>
                                            <th width="10%"><h5>Name</h5></th>
                                            <th width="20%"><h5>Image</h5></th>
                                            <th width="25%"><h5>Position</h5></th> 
                                            <th width="15%"><h5>Action</h5></th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tbody>
                                            <tr>
                                                @foreach ($AllLeader as $list)
                                                 
                                               <tr>
                                                  <th ><h6>{{ $list['id'] }}</h6></th>
                                                  <th ><h6>{{ $list['name'] }}</h6></th>
                                                  <th > <img src="{{asset('uploads/leader').'/'.$list['image']}}" hight="200px" width="150px" ></th>
                                                  <th ><h6>{{ $list['position'] }}</h6></th>
                                                   <th>
                                                     {{-- <a href="{{ url('/leader-edit/'.$list->id) }}" class="btn btn-info">edit</a>  --}}
                                                      <a href="leader-delete/{{ $list->id }}" class="btn btn-danger">Delete</a>
                                                    </th>
                                              </th>
                                             
                                           </tr>
                                             @endforeach
                                       </tr>
                                      </tbody>
                                </table>
                            </div>          
                           <!-- end row -->  
      </div> 
        <!-- Loader -->

@endsection