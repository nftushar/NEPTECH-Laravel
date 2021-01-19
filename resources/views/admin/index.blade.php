@extends('admin.layout.layout')
@section('content')

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