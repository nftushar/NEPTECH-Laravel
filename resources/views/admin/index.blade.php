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
                            <!-- end page title -->

                       
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><h5>ID No.</h5></th>
                                            <th><h5>Name</h5></th>
                                            <th><h5>Email</h5></th>
                                            <th><h5>Website</h5></th>
                                            <th><h5>Message</h5></th>
                                            <th><h5>Action Now</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                         @foreach ($contactx as $contact)
                                         <tr>
                                            <th><h5>{{ $contact['id'] }}</h5></th>
                                            <th><h5>{{ $contact['name'] }}</h5></th>
                                            <th><h5>{{ $contact['email'] }}</h5></th>
                                            <th><h5>{{ $contact['website'] }}</h5></th>
                                            <th><h5>{{ $contact['message'] }}</h5></th>
                                            <th><h5>{{ $contact['action'] }}</h5></th>
                                           
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