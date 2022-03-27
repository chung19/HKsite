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
    <link href="./frontend/css/style.css" rel="stylesheet" />
    <link href="./frontend/css/contact.css" rel="stylesheet" />
    <link href="./frontend/css/responsive.css" rel="stylesheet" />

</head>

<body>
    <!-- <section> topbar ============================-->
    <section class="topbar py-2 d-none d-sm-block">
        <nav class="navbar container">
            <div class="row body-topbar">
                <div class="col-5 topbar-left">
                    <div class="nav-item">
                        <a class="text-reset me-3" href="#">
                            <img class="nav-icon" src="./frontend/images/index-img/icons/clock.png" alt="icon">
                            Mon-Fri: 09.00 am-06:00 pm</a>
                    </div>
                </div>
                <div class="col-7 topbar-right">
                    <!-- Collapsible wrapper -->

                    <!-- Right elements -->
                    <div class="d-flex align-items-center">
                        <!-- Icon -->
                        <a class="text-reset me-3" href="#">
                            <img class="nav-icon" src="./frontend/images/index-img/icons/call.png" alt="icon">
                            Call Us +156984538
                        </a>
                        <a class="text-reset text-reset-right me-3" href="#">
                            <img class="nav-icon" src="./frontend/images/index-img/icons/mail.png" alt="icon">
                            e-mail us
                        </a>
                        <div class="dropdown">
                            <a class="text-reset text-reset-right me-3 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="nav-icon" src="./frontend/images/index-img/icons/flag.png" alt="icon">
                                ENGLISH
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- end <section> topbar ============================-->
    <!---------------------------------------------------------- header--------------------------------------------------------- -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="{{'home'}}"><img src="./frontend/images/index-img/logo.png" height="45" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse  border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{'home'}}">Home+</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{'service-details'}}">Services+</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="web-development.html">Pages +</a>
                        </li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">Shop +</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{'articleList'}}">News</a></li>
                        <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{'about'}}">About Us</a>
                        </li>
                        <form class="d-flex my-3 d-block d-lg-none">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                        <div class="dropdown d-none d-lg-block">
                            <div class="dropdown">
                                <button class="btn btn-outline-light ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><input class="form-control" type="search" placeholder="Search" aria-label="Search" /></li>
                                </ul>
                            </div>
                        </div>
                        <li class="nav-item nav-item-vertical px-2"><a class="nav-link" aria-current="page" href="user-research.html"><img src="./frontend/images/index-img/icons/mess.png" alt="icon"></a></li>
                        <div class="row navbar-contact ">
                            <div class="col-lg-6 text-color-above">Do you need help?</div>
                            <div class="col-lg-6 text-color-last"><a class="nav-link" href="{{'contact-me'}}">CONTACT ME</a></div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d377213.7506651207!2d77.09716780735864!3d28.552991686641374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2zTml1IMSQw6otbGksIERlbGhpLCDhuqRuIMSQ4buZ!5e0!3m2!1svi!2s!4v1646802623139!5m2!1svi!2s" width="80%" height="443" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
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
                <form class="form-info">
                    <div class="container-fluid" style="width: 60%; height: auto">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control setting-padding" placeholder="Your Name" /><br />
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control setting-padding" placeholder="Your Email" /><br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control setting-padding" placeholder="Phone" /><br />
                            </div>
                            <div class="col-6">
                                <select class="form-select">
                                    <option selected>---</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select><br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control setting-padding" placeholder="Subject" /><br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control setting-padding " placeholder="You Message: " style="height: 140px; padding-top:22px;"></textarea><br />
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
    <section>
        <footer class="footer">
            <div class="container-fluid footer__wrapper-content">
                <div class="container footer_top">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <a class="footer_top-logo-link" href="{{'home'}}"><img src="./frontend/images/footer/logo.png" alt="logo" class="footer_top-contact-logo" /></a>
                            <span class="footer_top-contact-desc">Our Company has been developing high-quality and reliable
                                software for corporate nees since 2008. We are renowned
                                professionals of software develeopmnent.</span>
                            <div class="footer_icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 pdl-30 mt60">
                            <h5 class="footer_top-posts-title">Quick Links</h5>
                            <div class="footer_top-posts-info">
                                <a href="#" class="footer_top-posts-place"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</a>
                            </div>
                            <div class="footer_top-posts-info">
                                <a href="#" class="footer_topt-posts-place"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Our Services</a>
                            </div>
                            <div class="footer_top-posts-info">
                                <a href="#" class="footer_top-posts-place"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Pricing Plan</a>
                            </div>
                            <div class="footer_top-posts-info">
                                <a href="#" class="footer_top-posts-place"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blog Classic</a>
                            </div>
                            <div class="footer_top-posts-info">
                                <a href="#" class="footer_top-posts-place"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</a>
                            </div>
                            <div class="footer_top-posts-info">
                                <a href="#" class="footer_top-posts-place"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Faqs</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt60">
                            <h5 class="footer_top-posts-title">Popular Post</h5>
                            <div class="content_right_our_contact">
                                <div class="popular_posts_content">
                                    <div class="popular_posts_content_item">
                                        <div class="popular_posts_content_img">
                                            <img src="./frontend/images/footer/anh_16.png" alt="" />
                                        </div>
                                        <div class="popular_posts_contentinformation">
                                            <div class="contentinformation_heading_popular_post fontcolor">
                                                Android Application Program-2021
                                            </div>
                                            <p class="contentinformation_time">August 24, 2021</p>
                                        </div>
                                    </div>
                                    <div class="popular_posts_content_item">
                                        <div class="popular_posts_content_img">
                                            <img src="./frontend/images/footer/anh_16.png" alt="" />
                                        </div>
                                        <div class="popular_posts_contentinformation">
                                            <div class="contentinformation_heading_popular_post fontcolor">
                                                Android Application Program-2021
                                            </div>
                                            <p class="contentinformation_time">August 24, 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 pdl-30 mt60">
                            <h5 class="footer_top-posts-title">Our Contacts</h5>
                            <div class="our_contact_content">
                                <div class="our_contact_content_item">
                                    <div class="our_contact_content_img">
                                        <img src="./frontend/images/footer/icon-address.png" alt="" />
                                    </div>
                                    <div class="our_contact_contentinformation">
                                        <div class="contentinformation_heading_our_contact">
                                            Address
                                        </div>
                                        <p class="contentinformation_contact">
                                            125, Suitland Street, USA
                                        </p>
                                    </div>
                                </div>
                                <div class="our_contact_content_item">
                                    <div class="our_contact_content_img">
                                        <img src="./frontend/images/footer/icon-phone.png" alt="" />
                                    </div>
                                    <div class="our_contact_contentinformation">
                                        <div class="contentinformation_heading_our_contact">
                                            Phone
                                        </div>
                                        <p class="contentinformation_contact">+ 786 875 864 75</p>
                                    </div>
                                </div>
                                <div class="our_contact_content_item">
                                    <div class="our_contact_content_img">
                                        <img src="./frontend/images/footer/icon-email.png" alt="" />
                                    </div>
                                    <div class="our_contact_contentinformation">
                                        <div class="contentinformation_heading_our_contact">
                                            E-Mail
                                        </div>
                                        <p class="contentinformation_contact">support@bigfox.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="row container body-footer-bottom">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <p>
                            &COPY; Copyright 2021. All Rights Reserved. Design by
                            <span> <a class="footer_bottom_text" href="#">Dream IT</a></span>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="footer_right">
                            <p class="text-bottom-right">
                                Powered by
                                <span> <a class="footer_bottom_text" href="#">Wordpress</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./frontend/js/btnPlay.js"></script>
</body>

</html>
