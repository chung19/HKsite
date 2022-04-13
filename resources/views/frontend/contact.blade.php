<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liên hệ</title>
    <!-- bootstrap5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300@400@500&family=Rubik:wght@500&display=swap" rel="stylesheet">
    <!--Stylesheets-->
    <link href="./frontend/css/header.css" rel="stylesheet" />
    <link href="./frontend/css/footer.css" rel="stylesheet" />
    <link href="./frontend/css/contact.css" rel="stylesheet" />

</head>

<body>
    <!---------------------------------------------------------- header--------------------------------------------------------- -->
    @include("frontend/layout.header")
    <!---------------------------------------------------------- end header--------------------------------------------------------- -->
    <section>
        <!-- HEADER -->
        <div class="container-fluid header">
            <div class="container">
                <div class="row" style="height: 80px;">
                    <div class="col-6 contact-us">
                        <i class="fa fa-circle" aria-hidden="true" style="color: #0a8bfa; font-size: smaller"></i>
                        <b>
                            Contact Us
                        </b>
                    </div>
                    <div class="col-6 menu-contact-us">
                        Home
                        <a href="#" style="text-decoration: none">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- CONTACT WITH US -->
        <div class="container contact-with-us mt-5 mb-5">
            <div class="row">
                <div class="col-12 our-contact-info">OUR CONTACT INFO</div>
            </div>
            <div class="row mb-4">
                <div class="col-12 contact-with-us">Contact with Us</div>
            </div>
            <div class="body-contact">
                <div class="row row-body-contact">
                    <!-- MAP -->
                    <div class="col-8 map me-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.5250429877615!2d106.65537731436098!3d10.847612992273264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529bc96bc31d5%3A0xb45cb7e22ebf8fda!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIFRow7RuZyBUaW4gVsOgIFRydXnhu4FuIFRow7RuZyBIb8OgbmcgS2hhbmc!5e0!3m2!1sen!2s!4v1649417486866!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- INFO -->
                    <div class="col-4 info">

                        <p class="info-label">Address</p>
                        <p class="info-text">
                            132 BaiPail Street, Sandigo
                            <br>
                            California, USA
                        </p>

                        <p class="info-label">Phone

                            <br>
                        <p class="info-text">
                            +880 321 569 098
                            <br>+880 321 569 098

                        </p>

                        <p class="info-label">Email

                            <br>
                        <p class="info-text">
                            bigfox@gmail.com

                            <br>
                            support121@yahoo.com

                        </p>

                        <p class="info-label">Social</p>
                        <p class="info-label" style="margin-top: 7px;">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>&ensp;&ensp;
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>&ensp;&ensp;
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>&ensp;&ensp;
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- GET IN TOUCH -->
        <div class="container-fluid get-in-touch pt-5 pb-5">
            <p class="title-get-in-touch">Get in Touch</p>
            <p class="text-center" style="font-size: smaller; color: #a0a0a0 ;margin-bottom:40px;">
                Interactively seize focused methodologies for extensive <br />
                growth strategies. Professionally
            </p>
            <!-- FORM -->
            <div class="container">
                <!-- Success message -->
                {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
            </div>
            @endif --}}
            @if($message =Session::has('success'))
            <div class="alert alert-success">
                {{$message =Session::get('success')}}
                <p>{{ $message }}</p>
            </div>
            @endif
            <!-- Success message end -->
            {{-- Laravel Contact Form Validation  --}}
            <form action="" method="post" action="{{ route('contact.store') }}">
                <!-- CROSS Site Request Forgery Protection -->
                @csrf
                <form class="form-info">
                    <div class="container-fluid" style="width: 60%; height: auto">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control setting-padding{{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Your Name" /><br />
                                <!-- Error -->
                                @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control setting-padding{{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Your Email" /><br />
                                @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control setting-padding{{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Phone" /><br />
                                @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-6">
                                <select class="form-select {{ $errors->has('address') ? 'error' : '' }}" name="address" id="address">
                                    <option selected>Position option</option>
                                    <option> Leader</option>
                                    <option>Project Management </option>
                                    <option> Tester</option>
                                    <option> Staff</option>
                                </select><br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control setting-padding{{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" placeholder="Subject" /><br />
                                @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control setting-padding{{ $errors->has('message') ? 'error' : '' }}" name="message" id="message " placeholder="You Message: " style="height: 140px; padding-top:22px;"></textarea><br />
                                @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn  form-control" style="
                                        background: linear-gradient(to right, #0397fd , #01affc)!important;
                                        border: #61bafb;
                                        font-weight: 300;
                                        color:white;
                                        font-size: 13px;
                                        height: 40px;
                                    ">
                                    SEND MESSAGE
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        </div>
    </section>
    <!--  <section> footer ============================-->
    @include("frontend/layout.footer")
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>