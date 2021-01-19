@extends('admin.layout.layout')
@section('content')

       <div class="container "> 

                         
                            <h2>Manage Expert</h2>
                            <!-- end page title -->
                            <a href="expert-add" class="btn btn-info" >Add experts</a>
                       {{ session('msg') }}
                      
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%" ><h5>ID No.</h5></th>
                                            <th width="10%"><h5>Name</h5></th>
                                            <th width="35%"><h5>Image</h5></th>
                                            <th width="25%"><h5>Position</h5></th> 
                                            <th width="25%"><h5>Action</h5></th>
                                        </tr>
                                    </thead>                                  
                                    <tbody>                                                                                  
                                                @foreach ($AllExpert as $list)
                                                 
                                               <tr>
                                                  <th ><h6>{{ $list['id'] }}</h6></th>
                                                  <th ><h6>{{ $list['name'] }}</h6></th>
                                                  <th > <img src="{{asset('uploads/expertTeam').'/'.$list['image']}}"  hight="200px" width="150px" ></th>
                                                  <th ><h6>{{ $list['position'] }}</h6></th>
                                                  {{-- <th >{{ $list['facebook'] }}</th> --}}
                                                  {{-- <th >{{ $list['linkedin'] }}</th>
                                                  <th >{{ $list['twitter'] }}</th>
                                                  <th >{{ $list['envelope'] }}</th> --}}
                                                   <th>
                                                     <a href="{{ url('/expert-edit/'.$list->id) }}" class="btn btn-info">edit</a> 
                                                      <a href="expert-delete/{{ $list->id }}" class="btn btn-danger">Delete</a>
                                                    </th>
                                              
                                             
                                           </tr>
                                             @endforeach             
                                </table>
                            </div>          
                           <!-- end row -->  
      </div> 
        <!-- Loader -->

@endsection