<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị viên</title>
       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('frontend/font/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('../frontend/css/servicedetails.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('./backend/css/post.css')}}">
    <link rel="stylesheet" href="{{asset('./backend/css/categorypost.css')}}">

</head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"><img src="{{ asset('./frontend/images/index-img/team/team4.png') }}" class="img-fluid" alt="Responsive image">
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                    <div class="nav_list">
                         <a href="{{ url('back-end')}}" class="nav_link @if (\Request::is('back-end')) active  @endif"><i class="fa fa-tachometer" aria-hidden="true"></i><span class="nav_name">Dashboard</span> </a>
                         <a href="{{ url('projects')}}" class="nav_link @if (\Request::is('projects')) active  @endif"><i class="fa fa-product-hunt" aria-hidden="true"></i><span class="nav_name">Project</span> </a>
                         <a href="{{ url('team')}}" class="nav_link @if (\Request::is('team')) active  @endif"><i class="fa fa-users" aria-hidden="true"></i> <span class="nav_name">Team</span> </a>
                         <a href="{{ url('reviews')}}" class="nav_link @if (\Request::is('reviews')) active  @endif"><i class="fa fa-renren" aria-hidden="true"></i><span class="nav_name">Review</span> </a>
                         <a href="{{ url('posts')}}" class="nav_link @if (\Request::is('posts')) active  @endif"><i class="fa fa-rss" aria-hidden="true"></i><span class="nav_name">Blog</span> </a>
                         <a href="{{ url('services')}}" class="nav_link @if (\Request::is('services')) active  @endif"><i class="fa fa-server" aria-hidden="true"></i><span class="nav_name">Service</span> </a>
                         <a href="{{ url('category-post')}}" class="nav_link @if (\Request::is('category-post')) active  @endif"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Category post</span> </a>
                         <a href="{{ url('showcontacts')}}" class="nav_link @if (\Request::is('showcontacts')) active  @endif"> <i class="fa fa-address-book" aria-hidden="true"></i> <span class="nav_name">Show contacts</span> </a>
                         <a href="{{url('newsletters ')}}" class="nav_link @if (\Request::is('newsletters')) active  @endif"> <i class="fa fa-solid fa-envelope" aria-hidden="true"></i> <span class="nav_name">Newsletter</span> </a>
                         <a href="{{url('gallerys ')}}" class="nav_link @if (\Request::is('gallerys')) active  @endif"> <i class="fa fa-solid fa-image" aria-hidden="true"></i> <span class="nav_name">Gallery</span> </a>
                        </div>
                </div>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="height-100 ">
              @yield('content')
        </div>
        <!--Container Main end-->
          <!--    JavaScripts-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/sidebarMenu.js') }}"></script>
        <script src="{{ asset('backend/ckeditor/ckeditor.js')}}"></script>
        <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
        </script>
    </body>
</html>
