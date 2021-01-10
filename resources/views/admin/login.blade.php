        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
                <title>Admin Login</title>
                <meta content="Admin Dashboard" name="description" />
                <meta content="ThemeDesign" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <link rel="shortcut icon" href="{{ asset('admin_assets/images/favicon.ico')}}">
                <!-- morris css -->
                 <link rel="stylesheet" href="{{ asset('admin_assets/plugins/morris/morris.css')}}"> 
     
                <link href="{{ asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
                <link href="{{ asset('admin_assets/css/icons.css')}}" rel="stylesheet" type="text/css">
                 <link href="{{ asset('admin_assets/css/style.css')}}" rel="stylesheet" type="text/css">    
                 
                 <style>
                     .login{
                         padding-top: 10rem;
                         padding-left: 24rem;
                     }
                 </style>
                 
            </head>
        <body>
       
     <div class="container">      
               
            <div class="login" > 
                <h2>Login form</h2>
                @if (Session::has('BLOG_USER_ID'))
                    <div class="alert alert-success" roll="alert">
                        {{ Session::get('msg') }}
                    </div>
                @endif
                <form method="post" action="{{ url('login-submit') }}">
                    @csrf
                    <div class="item form-group" >
                        <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="title">Enter UserName </label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="username"  class="form-control" autocomplete="off" placeholder="Enter UserName">
                            @error('username')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="short_desc">Enter Password</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="password" name="password" class="form-control" placeholder="Enert Password"> 
                        </div>
                        @error('password')
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
    </body>
 </html>