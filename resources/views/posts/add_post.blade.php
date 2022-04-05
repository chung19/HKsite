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
        <h2>Create Post</h2>

        @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
        @endif

        <form action="/add-post" method="post" class="form__add__post" enctype="multipart/form-data">
            @csrf
            <label for="Id">
                <div class="nameRow">Id:</div>
                <input type="text" name="post_id" value="{{ old('post_id') }}" class="post-input"><br>
                <span style="color:red;">@error('post_id'){{ $message }} @enderror</span>
            </label><br><br>
            <label for="Title">
                <div class="nameRow">Title:</div>
                <input type="text" name="post_title" value="{{ old('post_title') }}" class="post-input"><br>
                <span style="color:red;">@error('post_title'){{ $message }} @enderror</span>
            </label><br><br>
            <label for="Content">
                <div class="nameRow">Content:</div>
                <textarea type="text" name="post_content" value="{{ old('post_content') }}" class="post-input" rows=5></textarea><br>
                <span style="color:red;">@error('post_content'){{ $message }} @enderror</span>
            </label><br><br>
            <label for="Image">
                <div class="nameRow">Image:</div>
                <input type="file" name="post_image" value="{{ old('post_image') }}" class="post-input"><br>
                <span style="color:red;">@error('post_image'){{ $message }} @enderror</span>
            </label><br><br>
            <label for="Category_Id">
                <div class="nameRow">Category name:</div>
                <input type="text" name="category_id" value="{{ old('category_id') }}" class="post-input"><br>
                <span style="color:red;">@error('Category_Name'){{ $message }} @enderror</span>
            </label><br><br>
            <button type="submit">Add</button>
        </form>

        <br>

        <table class="table__hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Post</th>
                    <th>Action</th>
                    <th>Category Post</th>
                    <th>Category Post</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listposts as $item)
                <tr>
                    <td>{{ $item -> post_id}}</td>
                    <td>{{ $item -> post_title}}</td>
                    <td>{{ $item -> post_content}}</td>
                    <td>{{ $item -> post_image}}</td>
                    <td>{{ $item -> category_id}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="/edit-post/{{ $item->post_id }}" class="btn-edit">Edit</a>
                            <a href="/delete-post/{{ $item->post_id }}" class="btn-delete">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

</body>
</html>