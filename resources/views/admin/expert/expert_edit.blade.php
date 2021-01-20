@extends('admin.layout.layout')
@section('content')

    <div class="container"> 
        <h2>Edit Post</h2>
        @if (Session::has('msg'))
            <div class="alert alert-success" roll="alert">
                {{ Session::get('msg') }}
            </div>
        @endif

  <a href="expert-list" class="btn btn-info" >Back to List</a>
    <form method="post" action="{{ route('admin.expert.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT');
        <input type="hidden" name="id" value="{{ $data->id}}">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="name">Name </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="name" class="form-control" value="{{ $data->name }}" placeholder="Name">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
        
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="position">position </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="position" class="form-control" value="{{ $data->position }}" placeholder="position">
                @error('position')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="facebook">facebook link</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="facebook" class="form-control" value="{{ $data->facebook }}" placeholder="facebook">
                @error('facebook')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="linkedin">linkedin link</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="linkedin" class="form-control" value="{{ $data->linkedin }}" placeholder="linkedin">
                @error('linkedin')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="twitter">twitter link</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="twitter" class="form-control" value="{{ $data->twitter }}" placeholder="twitter">
                @error('twitter')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align" for="twitter">envelope link</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" name="envelope" class="form-control" value="{{ $data->envelope }}" placeholder="envelope">
                @error('envelope')
                {{$message}}
                @enderror
            </div>
        </div>
        
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 col-lg-12 label-align">Image </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="file" name="image">
                <img src="{{ asset('uploads/expertTeam/'.$data['image']) }}"  hight="200px" width="150px" >
                @if($errors->first('image')) <span class="text-danger">{{ $errors->first('image') }}</span> @endif
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