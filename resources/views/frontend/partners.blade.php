<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner</title>
    {{-- responsive cho IE từ 1 tới 9 (auto load file) --}}
    <!--[if IE lt 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"
integrity="sha512-BWbLJlfp8hzXlxT6K5KLdxPVAj+4Zn2e4FVq5P7NSFH/mkAJ18UiZRQUD4anR3jyp0/WYkeZ0Zmq5EWWrDxneQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<! [endif] -->
    {{-- responsive cho IE từ 6 tới 9 (auto load file) --}}
    {{-- dùng chung header footer --}}
    <!--carousel  -->
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- carousel -->
    <!-- bootstrap5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        el="stylesheet">
    <!-- vendor -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    {{-- dùng chung header footer --}}
    <link href="./frontend/css/header.css" rel="stylesheet" />
    <link href="./frontend/css/footer.css" rel="stylesheet" />
    {{-- dùng chung header footer --}}
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('./frontend/css/partners.css') }}">
    <link rel="stylesheet" href="{{ asset('./frontend/css/responsive-serviceLists_partners.css') }}">
    {{-- style css --}}
    {{-- font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;600;800&display=swap"
        rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/myriad-pro" rel="stylesheet">
    {{-- font --}}
</head>

<body>
    <!---------------------------------------------------------- header--------------------------------------------------------- -->
    @include("frontend/layout.header")
    <!---------------------------------------------------------- end header--------------------------------------------------------- -->
    <!-- phần thêm code của bạn -->
    <!-- start main partner -->
    <div class="main-partners ">
        <div class="gird">

            <!-- Backgrond main partner -->
            <div class="bg-img-head-partner">
                <div class="text-content-head-partner">
                    <div class="text-heading-heading-partner">Brand</div>
                    <div class="text-description-head-partner">Home / Brand</div>
                </div>
            </div>
            <!-- Background main partner -->
            <div class="customer-area-heading-main-partner">
                <div class="section-heading-main-partner">
                    <P>CUSTOMER AREA</P>
                </div>
                <div class="sub-heading-main-partner">
                    <p> Our Customers</p>
                </div>
            </div>
            <!-- customer-items-main-partner  start -->
            <!-- item-customer-partner start -->
            <div class="item-customer-partner container-fluid">
                <!-- row 1 item -->
                <div class="row row-no-gutterss">
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">

                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item1"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/11.png' }}" alt=""></div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item2"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/12.png' }}" alt=""></div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item3"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/13.png' }}" alt=""></div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item4"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/14.png' }}" alt=""></div>
                        </a>
                    </div>
                </div>
                <!-- row 1 item -->
                <!-- row 2 item -->
                <div class="row row-no-gutterss ">
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item5"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/15.png' }}" alt=""></div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item6"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/16.png' }}" alt=""></div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item7"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/17.png' }}" alt=""></div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 col-xl-3">
                        <a href="https://getbootstrap.com/docs/5.0/layout/grid/">
                            <div class="box-item-partner border-item8"><img class="img-item-partner"
                                    src="{{ 'frontend/img/brand/18.png' }}" alt=""></div>
                        </a>
                    </div>
                </div>
                <!-- row 2 item -->
            </div>
            <!-- item-customer-partner end -->
            <!-- customer-items-main-partner  end -->
            <!-- carosel silde start -->
            <div class="bg-slide-main-partners">
                <div class="carousel-main-partner">
                    <!-- heding main partner -->
                    <div class="heading-main-partner">
                        <div class="section-heading-main-partner">
                            <p>VALUABLE PARTERS</p>
                        </div>
                        <div class="sub-heading-main-partner ">
                            <p>Our Partners</p>
                        </div>
                    </div>

                    <!-- heding main partner end-->
                    <!-- carousel -->
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-10    mx-auto col-mobile">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                                    <!-- Carousel indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol>
                                    <!-- Wrapper for carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <!-- row 1 -->

                                            <div class="row">
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive "
                                                        src="{{ 'frontend/img/logo/c1.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c2.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c3.png' }}" alt="""">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c4.png' }}" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- row 1 end -->
                                        <div class="carousel-item">
                                            <!-- row 2-->
                                            <div class="row">
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c4.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c3.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c2.png' }}" alt="""">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c1.png' }}" alt="">
                                                </div>
                                            </div>
                                            <!-- row 2 end -->
                                        </div>
                                        <div class="carousel-item">
                                            <!-- row  3 -->
                                            <div class="row">
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c3.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c2.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c4.png' }}" alt="""">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c1.png' }}" alt="">
                                                </div>
                                            </div>
                                            <!-- row 3 end -->
                                        </div>
                                        <div class="carousel-item">
                                            <!-- row 4  -->
                                            <div class="row">
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c4.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c2.png' }}" alt="">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c1.png' }}" alt="""">
                                                </div>
                                                <div class="col-12 col-sm-3 col-carousel-partners_custom">
                                                    <img class="box-carousel-partner img-fluid  img-responsive"
                                                        src="{{ 'frontend/img/logo/c3.png' }}" alt="">
                                                </div>
                                            </div>
                                            <!-- row 4 end -->
                                        </div>
                                    </div>
                                    <!-- Carousel controls -->
                                 {{-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i> 
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>  --}}
                                            <!-- Carousel controls end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- carousel -->
                </div>
            </div>
            <!-- carosel silde end -->
            <!-- end main parter -->

        </div>
    </div>

    <!-- phần thêm code của bạn -->
    <!--  <section> footer ============================-->
    @include("frontend/layout.footer")
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
