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
    

</body>
</html>