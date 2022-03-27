<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service</title>
    <!-- bootstrap5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
    <!--Stylesheets-->
    <link href="./frontend/css/style.css" rel="stylesheet" />
    <link href="./frontend/css/responsive.css" rel="stylesheet" />
    <link href="./frontend/css/about.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('./frontend/css/servicedetails.css')}}">
</head>

<body style="background-color: #ffffff;">
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
                        <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{'service-details'}}">Services+</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="web-development.html">Pages +</a>
                        </li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">Shop +</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">News</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">About Us</a>
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
                    <a href="#" style="text-decoration: none; color: #707070;">
                        <i class="fa fa-angle-right" aria-hidden="true" style="color: #707070;"></i>
                        Servicesm
                    </a>
                    <a href="#" style="text-decoration: none">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        Mobile Apps Develop
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="inforService">
        <div class="inforService__content">
            <h1 class="inforService__title">Mobile Apps Development</h1>
            <img class="inforService__banner" src="./frontend/images/servicedetails/bannerMAD.png">
            <p class="inforService__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.
                Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis
                porttitor volutpat. Collaboration and idea-sharing after vertical. <br> <br> <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.
                Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet
            </p>
            <h2 class="inforService__featuresTitle">Key features</h2>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Custom Installation Process</div>
            </div>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Customizable Interface</div>
            </div>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">Improved All Performance</div>
            </div>
            <div class="inforService__features">
                <img src="./frontend/images/servicedetails/check_features.png">
                <div class="inforService__feature">High Usablility</div>
            </div>
        </div>

    </div>

    <div class="pricingPlan">
        <div class="pricingPlan-title">Pricing Plan</div>
        <div class="pricingPlan__type">
            <div class="pricingPlan__card">
                <div class="pricingPlan__cardHeader">
                    <div class="pricingPlan__cardTitleContainer">
                        <div class="pricingPlan__cardNameTag">PRICING TABLE</div>
                        <div class="pricingPlan__cardTitle">BASIC</div>
                        <div class="pricingPlan__cardPrice">
                            <div class="pricingPlan__cardBody-price">
                                <p>$</p>199
                            </div>
                            <div class="pricingPlan__cardBody-durationType">Per Month</div>
                        </div>
                    </div>
                </div>
                <div class="pricingPlan__cardBody">
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Concept Development</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">UI/UX Design</div>
                    </div>
                    <div class="pricingPlan__cardBody-used ">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">Configuration Management</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <button class="pricingPlan__cardBtnBuy">BUY NOW</button>
                    <hr class="pricingPlan__cardLine">
                </div>
            </div>
            <div class="pricingPlan__card">
                <div class="pricingPlan__cardHeader">
                    <div class="pricingPlan__cardTitleContainer">
                        <div class="pricingPlan__cardNameTag">PRICING TABLE</div>
                        <div class="pricingPlan__cardTitle">PREMIUM</div>
                        <div class="pricingPlan__cardPrice">
                            <div class="pricingPlan__cardBody-price">
                                <p>$</p>299
                            </div>
                            <div class="pricingPlan__cardBody-durationType">Per Month</div>
                        </div>
                    </div>
                </div>
                <div class="pricingPlan__cardBody">
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Concept Development</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">UI/UX Design</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">Configuration Management</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked" style="background-color: #bfbebe;">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use" style="color: #bfbebe;">App Integrition</div>
                    </div>
                    <button class="pricingPlan__cardBtnBuy">BUY NOW</button>
                    <hr class="pricingPlan__cardLine">
                </div>
            </div>
            <div class="pricingPlan__card">
                <div class="pricingPlan__cardHeader">
                    <div class="pricingPlan__cardTitleContainer">
                        <div class="pricingPlan__cardNameTag">PRICING TABLE</div>
                        <div class="pricingPlan__cardTitle">GOLDEN</div>
                        <div class="pricingPlan__cardPrice">
                            <div class="pricingPlan__cardBody-price">
                                <p>$</p>590
                            </div>
                            <div class="pricingPlan__cardBody-durationType">Per Month</div>
                        </div>
                    </div>
                </div>
                <div class="pricingPlan__cardBody">
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Concept Development</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">UI/UX Design</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">Configuration Management</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">App Integrition</div>
                    </div>
                    <div class="pricingPlan__cardBody-used">
                        <div class="pricingPlan__cardBody-checked">
                            <img src="./frontend/images/servicedetails/check.png">
                        </div>
                        <div class="pricingPlan__cardBody-use">App Integrition</div>
                    </div>
                    <button class="pricingPlan__cardBtnBuy">BUY NOW</button>
                    <hr class="pricingPlan__cardLine">
                </div>
            </div>
        </div>
    </div>

    <div class="allServices">
        <h1 class="allServices__title">All Services</h1>
        <div class="allServices__content">
            <div class="allServices__row">
                <div class="allServices__container">
                    <div>
                        <img src="./frontend/images/servicedetails/service1.webp">
                    </div>
                    <div class="allServices__overlay">
                        <div class="allServices__text">
                            <h2 class="allServices__textTitle">Digital Marketing</h2>
                            <p class="allServices__textContent">Conveniently predominate sticky alignm than low risk high yield methods of emp brand superior techno</p>
                        </div>
                        <button class="allServices__btn"><img src="./frontend/images/servicedetails/next.png"></button>
                    </div>
                </div>

                <div class="allServices__container">
                    <img src="./frontend/images/servicedetails/bannerMAD.png">
                    <div class="allServices__overlay">
                        <div class="allServices__text">
                            <h2 class="allServices__textTitle">Digital Marketing</h2>
                            <p class="allServices__textContent">Conveniently predominate sticky alignm than low risk high yield methods of emp brand superior techno</p>
                        </div>
                        <button class="allServices__btn"><img src="./frontend/images/servicedetails/next.png"></button>
                    </div>
                </div>

                <div class="allServices__container">
                    <img src="./frontend/images/servicedetails/service3.png">
                    <div class="allServices__overlay">
                        <div class="allServices__text">
                            <h2 class="allServices__textTitle">Digital Marketing</h2>
                            <p class="allServices__textContent">Conveniently predominate sticky alignm than low risk high yield methods of emp brand superior techno</p>
                        </div>
                        <button class="allServices__btn"><img src="./frontend/images/servicedetails/next.png"></button>
                    </div>
                </div>

            </div>
            <div class="allServices__row">
                <div class="allServices__container">
                    <img src="./frontend/images/servicedetails/service4.png">
                    <div class="allServices__overlay">
                        <div class="allServices__text">
                            <h2 class="allServices__textTitle">Digital Marketing</h2>
                            <p class="allServices__textContent">Conveniently predominate sticky alignm than low risk high yield methods of emp brand superior techno</p>
                        </div>
                        <button class="allServices__btn"><img src="./frontend/images/servicedetails/next.png"></button>
                    </div>
                </div>

                <div class="allServices__container">
                    <img src="./frontend/images/servicedetails/service5.png">
                    <div class="allServices__overlay">
                        <div class="allServices__text">
                            <h2 class="allServices__textTitle">Digital Marketing</h2>
                            <p class="allServices__textContent">Conveniently predominate sticky alignm than low risk high yield methods of emp brand superior techno</p>
                        </div>
                        <button class="allServices__btn"><img src="./frontend/images/servicedetails/next.png"></button>
                    </div>
                </div>

                <div class="allServices__container">
                    <img src="./frontend/images/servicedetails/service6.png">
                    <div class="allServices__overlay">
                        <div class="allServices__text">
                            <h2 class="allServices__textTitle">Digital Marketing</h2>
                            <p class="allServices__textContent">Conveniently predominate sticky alignm than low risk high yield methods of emp brand superior techno</p>
                        </div>
                        <button class="allServices__btn"><img src="./frontend/images/servicedetails/next.png"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
