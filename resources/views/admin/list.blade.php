@extends('admin.layout.layout')
@section('content')

 
                            <!-- end page title -->
                            <a href="PostSubmit" class="btn btn-info" >Add Post</a>
                            @if (Session::has('successmsg'))
                            <div class="alert alert-success" roll="alert">
                                {{ Session::get('successmsg') }}
                            </div>
                            @endif
                      
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%" ><h5>ID No.</h5></th>
                                            <th width="10%"><h5>Title</h5></th>
                                            <th width="20%"><h5>Short Desc</h5></th>
                                            {{-- <th width="25%"><h5>Long Desc</h5></th> --}}
                                            <th width="15%"><h5>Image</h5></th>
                                            <th width="10%"><h5>Post Date</h5></th>
                                            <th width="15%"><h5>Action</h5></th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                         @foreach ($AllPosts as $list)
                                         <tr>
                                            <th ><h6>{{ $list['id'] }}</h6></th>
                                            <th ><h6>{{ $list['title'] }}</h6></th>
                                            <th ><h6>{!! $list['short_desc'] !!}</h6></th>
                                            {{-- <th ><h6>{!! $list['lond_desc'] !!}</h6></th> --}}
                                            <th > <img src="{{ asset('uploads/post/'.$list->image) }}"  hight="200px" width="150px" ></th>
                                            <th ><h6>{{ $list['post_date'] }}</h6></th>
                                            
                                            <th> 
                                                {{-- <a href="{{ url('/edit/'.$list->id) }}" class="btn btn-info">edit</a>  --}}
                                                <a href="edit/{{ $list->id }}" class="btn btn-info">edit</a> 
                                                <a href="delete/{{ $list->id }}" class="btn btn-danger">Delete</a>
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

@section('E-script')
            @if(Session::has('msg'))

                <script>
                    toastr.success("{!! Session::get('msg') !!}");
                </script>

            @endif

                @if(Session::has('msg'))
                    <section>
                        swal("Congratulation!", "{!! Session::get('msg') !!}", "Success",{
                            buutton:"OK"
                        });
                    </section>

                @endif

 @endsection