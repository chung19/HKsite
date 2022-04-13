@extends('backend.layout')
@section('content')

<div class="add__post">

    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="pull-left">
                <h2>Add New Post</h2>
            </div>
            <div class="pull-right">
                <a href="{{ url('posts') }}" class="btn btn-danger float-end">BACK</a>
            </div>
        </div>
    </div>

    @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('add-post') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="">Title:</label>
            <input type="text" name="post_title" class="form-control" value="{{old('post_title')}}" placeholder="Title">
        </div>
        <div class="form-group mb-3">
            <label for="">Content:</label>
            <textarea name="post_content" rows="6" class="form-control" placeholder="Content">{{old('post_content')}}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="">Image</label>
            <input type="file" name="post_image" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Category name:</label>
            <select name="category_id" id="Category_Id">
                @foreach ($category as $item)
                    <option>{{ $item -> category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Add Post</button>
        </div>
        <input type="text" name="post_date" style="display: none;" class="form-control" placeholder="Title" value="{{Carbon\Carbon::now()->toFormattedDateString()}}">

    </form>


</div>

@endsection

