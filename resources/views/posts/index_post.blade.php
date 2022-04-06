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
        <h2>Post</h2>
            <a href="{{ url('add-post') }}" class="btn btn-primary float-end">Add Post</a>
        <br>
        <table class="table__hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Category name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $item)
                <tr>
                    <td>{{ $item -> id}}</td>
                    <td>{{ $item -> post_title}}</td>
                    <td>{{ $item -> post_content}}</td>
                    <td>
                        <img src="{{asset('backend/images/'.$item->post_image) }}" alt="Image">
                    </td>
                    <td>
                    <?php
                        $change = DB::table('categories')
                        ->where('category_id',$item -> category_id)
                        ->first();
                        echo $change -> category_name
                    ?>
                    </td>
                    <td>
                        <a href="{{ url('edit-post/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        {{-- <a href="{{ url('delete-post/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                        <form action="{{ url('delete-post/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

</body>
</html>