@extends('backend.layout')
@section('content')

<div class="col-md-12">

    @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif

    

    <div class="card">
        <div class="card-header">
            <h4>Edit Post
                <a href="{{ url('posts') }}" class="btn btn-danger float-end">BACK</a>
            </h4>
        </div>
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
        <div class="card-body">

            <form action="{{ url('update-post/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="">Title:</label>
                    <input type="text" name="post_title" class="form-control" value="{{$post->post_title}}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Content:</label>
                    <input type="text" name="post_content" class="form-control" value="{{$post->post_content}}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Image</label>
                    <input type="file" name="post_image" class="form-control" value="{{$post->post_image}}">
                    <img src="{{asset('storage/images/thumbnail/large_'.$post->post_image) }}" alt="Image">
                </div>
                <label for="Category_Id">
                    <div class="nameRow">Category name:</div>
                    <select name="category_id" id="Category_Id">
                        @foreach ($category as $item)
                            <option {{ $item->category_id == $post->category_id ? 'selected' : '' }}>{{ $item -> category_name }}</option>
                        @endforeach
                    </select>
                </label>
                <input type="text" name="post_date" style="display: none;" class="form-control" placeholder="Title" value="{{Carbon\Carbon::now()->toFormattedDateString()}}">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">                    
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </div>


            </form>

        </div>
    </div>
</div>

@endsection


