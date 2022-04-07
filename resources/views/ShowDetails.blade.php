<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service</title>
    <!-- bootstrap5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
    <!--Stylesheets-->
    <link href="../frontend/css/header.css" rel="stylesheet" />
    <link href="../frontend/css/footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('../frontend/css/servicedetails.css')}}">
    <link rel="stylesheet" href="{{asset('../frontend/css/contact.css')}}">
</head>

<body style="background-color: #ffffff;">

    <!---------------------------------------------------------- header--------------------------------------------------------- -->
    @include("frontend-layout.header")
    <!---------------------------------------------------------- end header--------------------------------------------------------- -->


    <div class="inforService">
        <div class="inforService__content">
            <h1 class="inforService__title">{{ $service->title }}</h1>
            <img class="inforService__banner inforService_image" src="/image/{{ $service->image }}">
            <p class="inforService__text">{!! $service->content !!}
            </p>
            <h2 class="inforService__featuresTitle">Key features</h2>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Custom Installation Process</div>
            </div>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Customizable Interface</div>
            </div>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Improved All Performance</div>
            </div>
            <div class="inforService__features">
                <img src="../frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">High Usablility</div>
            </div>
        </div>
    </div>

      <!--  <section> footer ============================-->
      @include("frontend-layout.footer")
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
