@extends('admin.layout.layout')
@section('content')


        <h2>Edit Post</h2>
        @if (Session::has('msg'))
            <div class="alert alert-success" roll="alert">
                {{ Session::get('msg') }}
            </div>
        @endif


  <a href="PostList" class="btn btn-info" >Back to List</a>
    <form method="post" action="{{ route('admin.post.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $data->id}}">

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="title">Title </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Title" value="{{ $data->title }}" >
                @if($errors->first('title')) <span class="text-danger">{{ $errors->first('title') }}</span> @endif

            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="short_desc">Short Desc</label>
            <div class="col-md-6 col-sm-6 ">
                <textarea name="short_desc" id="short_desc" cols="90" rows="6">{{ $data->short_desc }}</textarea>  
            </div>
            @if($errors->first('short_desc')) <span class="text-danger">{{ $errors->first('short_desc') }}</span> @endif
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align"  for="lond_desc">Long Desc</label>
            <div class="col-md-6 col-sm-6 ">
                <textarea name="lond_desc" id="lond_desc"  cols="90" rows="10">{{ $data->lond_desc }}</textarea>  
            </div>
            @if($errors->first('lond_desc')) <span class="text-danger">{{ $errors->first('lond_desc') }}</span> @endif

        </div>
        <div class="item form-group">
            <label class="col-form-labelel col-md-3 col-sm-3 col-lg-12 label-align"  >Image </label>

            <div class="col-md-6 col-sm-6">
                <input type="file" name="image">
                <img src="{{ asset('uploads/post/'.$data['image']) }}"  hight="200px" width="150px" >
                @if($errors->first('image')) <span class="text-danger">{{ $errors->first('image') }}</span> @endif

            </div>
        </div>
     
        <div class="item form-group">
            <label class="col-form-label  col-md-3 col-sm-3 col-lg-12 label-align">Added on </label>

            <div class="col-md-6 col-sm-6 ">
                <input type="date" name="added_on" class="form-control" value="{{ $data['added_on'] }}" >
                @if($errors->first('added_on')) <span class="text-danger">{{ $errors->first('added_on') }}</span> @endif

            </div>
        </div>
        {{-- <div class="item form-group">
            <label class="col-form-label  col-md-3 col-sm-3 col-lg-12 label-align">Post Date </label>

            <div class="col-md-6 col-sm-6 ">
                <input type="date" name="post_date" class="form-control" value="{{ $data['post_date'] }}" >
                @error('post_date')
                {{$message}}
                @enderror
            </div>
        </div> --}}

        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>
</div>             
   <!-- end row -->  
</div> 
<!-- Loader -->


@endsection

@section('E-style')
<link href="{{ asset('admin_assets/css/summernote-bs4.css')}}" rel="stylesheet" type="text/css">  
{{-- <link href="{{ asset('admin_assets/css/summernote-bs4.css')}}" rel="stylesheet" type="text/css">   --}}
@endsection

@section('E-script')
<script src="{{ asset('admin_assets/js/summernote-bs4.js')}}"></script>

  
<script>
    $('#short_desc').summernote({
        placeholder: 'Short Desctiption',
        width: 1000,
        height: 250
    });
</script>

<script>
    $('#lond_desc').summernote({
        placeholder: 'Long Desctiption',
        width: 1000,
        height: 300
    });
</script>
@endsection