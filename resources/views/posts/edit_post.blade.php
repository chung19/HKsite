<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Manage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
    <!--Stylesheets-->
    <link href="./frontend/css/header.css" rel="stylesheet" />
    <link href="./frontend/css/footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('./backend/css/post.css')}}">
</head>
<body>

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
                            <img src="{{asset('backend/images/'.$post->post_image) }}" alt="Image">
                        </div>
                        <label for="Category_Id">
                            <div class="nameRow">Category name:</div>
                            <select name="Category" id="Category_Id">
                                @foreach ($category as $item)
                                    <option {{ $item->category_id == $post->category_id ? 'selected' : '' }}>{{ $item -> category_name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    

</body>
</html>