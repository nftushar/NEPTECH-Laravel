@extends('admin/layout.layout')

@section('page_title','Manage page')

@section('container')

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>{{@config('constants/site_name')}}</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">

                <div class="x_content">
                    <br />
                    <form method="post" action="{{url('/admin/page_update/'.$result['0']->id)}}">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">name </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" value="{{$result['0']->name}}" class="form-control" placeholder="name">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">

                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="slug" value="{{$result['0']->slug}}" class="form-control" placeholder="slug">

                                @error('slug')
                                {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description</label>
                            <input type="text" name="description" value="{{$result['0']->description}}" class="form-control" placeholder="Long Desc">

                            @error('description')
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
            </div>
        </div>
    </div>
    <!-- /page content -->


@endsection