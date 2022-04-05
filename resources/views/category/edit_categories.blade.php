<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
    <!--Stylesheets-->
    <link href="./frontend/css/header.css" rel="stylesheet" />
    <link href="./frontend/css/footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('./backend/css/categorypost.css')}}">
</head>
<body>

    @include("frontend-layout.header")

    <div class="add__categorypost">
        <h2>{{$Title}} | Category</h2>

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

        <form action="{{route('update-category-post')}}" method="post" class="form__add__categorypost">
            <input type="hidden" name="id" value= "{{ $Info ->category_id }}">
            @csrf
            <label for="Id">
                Id: 
                <!-- <div>{{ $Info ->category_id }}</div> -->
                <input type="text" name="category_id" value="{{ $Info ->category_id }}"><br>
                <span style="color:red;">@error('category_id'){{ $message }} @enderror</span>
            </label><br><br>
            <label for="Name">
                <div class="nameRow">Name:</div>
                <input type="text" name="category_name" value="{{ $Info ->category_name }}"><br>
                <span style="color:red;">@error('category_name'){{ $message }} @enderror</span>
            </label><br><br>
            <button type="submit">Update</button>
        </form>

        <br>

    </div>
    

</body>
</html>