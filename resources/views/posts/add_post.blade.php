@extends('backend.layout')

@section('content')
    <div class="add__post">

        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif

        <h2>Create Post</h2>

        <a href="{{ url('posts') }}" class="btn btn-danger float-end">BACK</a>

        <form action="{{ url('add-post') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="">Title:</label>
                <input type="text" name="post_title" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Content:</label>
                <input type="text" name="post_content" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Image</label>
                <input type="file" name="post_image" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Category name:</label>
                <select name="Category" id="Category_Id">
                    @foreach ($category as $item)
                        <option>{{ $item -> category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Add Post</button>
            </div>

        </form>


    </div>
    
    @endsection