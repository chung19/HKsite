<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Danh sách bài viết</title>
  <!-- bootstrap5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
  <link href="./frontend/css/style.css" rel="stylesheet" />
  <link href="./frontend/css/responsive.css" rel="stylesheet" />
  <!-- Font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('./assets/css/articleList.css')}}">
  <link rel="stylesheet" href="{{asset('./assets/css/responsive.css')}}">
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
          <div class="d-flex ">
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
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{'articleList'}}">News</a></li>
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
  <section>
    <div class="articles_list">
      <div class="articles_list_content container">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="articles_list_content_left">
                <div class="articles_list_content_left_title">
                  <h6>UPDATE NEWS</h6>
                  <h1>Latest News</h1>
                </div>
                <div class="item d-flex ">
                  <div class="image">
                    <img src="./assets/image/anh_1.png" alt="..." class="img-fluid" />
                  </div>
                  <div class="text">
                    <div class="articles_list_text_title">
                      <a href="#">
                        <h3 class="h5">Benefits of App Developed</h3>
                      </a>
                    </div>
                    <div class="articles_list_text_date">
                      <div class="icon">
                        <img src="./assets/image/icon-calendar-check.png" alt="" />
                        <span> 31 Dec, 2021 By</span>
                        <a href="#">John Doe</a>
                      </div>
                    </div>

                    <div class="articles_list_text_sub">
                      <p>
                        Compellingly aggregate proactive core competencies
                        lever visualize resource maximizing architectures
                        without front core development compet.
                      </p>
                    </div>
                    <div class="submit">
                      <a href="#">READ MORE
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                      </a>
                    </div>
                  </div>
                </div>
                <div class="item d-flex ">
                  <div class="image">
                    <img src="./assets/image/anh_1.png" alt="..." class="img-fluid" />
                  </div>
                  <div class="text">
                    <div class="articles_list_text_title">
                      <a href="#">
                        <h3 class="h5">UI/UX Design Services</h3>
                      </a>
                    </div>
                    <div class="articles_list_text_date">
                      <div class="icon">
                        <img src="./assets/image/icon-calendar-check.png" alt="" />
                        <span> 31 Dec, 2021 By</span>
                        <a href="#">John Doe</a>
                      </div>
                    </div>

                    <div class="articles_list_text_sub">
                      <p>
                        Appropriately syndircate end-to-end functionalities
                        after visualize resource maximizing architectures
                        without front highly efficient partnerships with
                      </p>
                    </div>
                    <div class="submit">
                      <a href="#">READ MORE
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                      </a>
                    </div>
                  </div>
                </div>
                <div class="item d-flex ">
                  <div class="image">
                    <img src="./assets/image/anh_1.png" alt="..." class="img-fluid" />
                  </div>
                  <div class="text">
                    <div class="articles_list_text_title">
                      <a href="#">
                        <h3 class="h5">Higher Programming Consult</h3>
                      </a>
                    </div>
                    <div class="articles_list_text_date">
                      <div class="icon">
                        <img src="./assets/image/icon-calendar-check.png" alt="" />
                        <span> 31 Dec, 2021 By</span>
                        <a href="#">John Doe</a>
                      </div>
                    </div>

                    <div class="articles_list_text_sub">
                      <p>
                        Compellingly aggregate proactive core competencies
                        lever visualize resource maximizing architectures
                        without front core development compet.
                      </p>
                    </div>
                    <div class="submit">
                      <a href="#">READ MORE
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                      </a>
                    </div>
                  </div>
                </div>
                <div class="item d-flex">
                  <div class="image">
                    <img src="./assets/image/anh_1.png" alt="..." class="img-fluid" />
                  </div>
                  <div class="text">
                    <div class="articles_list_text_title">
                      <a href="#">
                        <h3 class="h5">Benefits of App Developed</h3>
                      </a>
                    </div>
                    <div class="articles_list_text_date">
                      <div class="icon">
                        <img src="./assets/image/icon-calendar-check.png" alt="" />
                        <span> 31 Dec, 2021 By</span>
                        <a href="#">John Doe</a>
                      </div>
                    </div>

                    <div class="articles_list_text_sub">
                      <p>
                        Compellingly aggregate proactive core competencies
                        lever visualize resource maximizing architectures
                        without front core development compet.
                      </p>
                    </div>
                    <div class="submit">
                      <a href="#">READ MORE
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                      </a>
                    </div>
                  </div>
                </div>
                <div class="item d-flex ">
                  <div class="image">
                    <img src="./assets/image/anh_1.png" alt="..." class="img-fluid" />
                  </div>
                  <div class="text">
                    <div class="articles_list_text_title">
                      <a href="#">
                        <h3 class="h5">UI/UX Design Services</h3>
                      </a>
                    </div>
                    <div class="articles_list_text_date">
                      <div class="icon">
                        <img src="./assets/image/icon-calendar-check.png" alt="" />
                        <span> 31 Dec, 2021 By</span>
                        <a href="#">John Doe</a>
                      </div>
                    </div>

                    <div class="articles_list_text_sub">
                      <p>
                        Appropriately syndircate end-to-end functionalities
                        after visualize resource maximizing architectures
                        without front highly efficient partnerships with
                      </p>
                    </div>
                    <div class="submit">
                      <a href="#">READ MORE
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                      </a>
                    </div>
                  </div>
                </div>
                <div class="item d-flex ">
                  <div class="image">
                    <img src="./assets/image/anh_1.png" alt="..." class="img-fluid" />
                  </div>
                  <div class="text">
                    <div class="articles_list_text_title">
                      <a href="#">
                        <h3 class="h5">Higher Programming Consult</h3>
                      </a>
                    </div>
                    <div class="articles_list_text_date">
                      <div class="icon">
                        <img src="./assets/image/icon-calendar-check.png" alt="" />
                        <span> 31 Dec, 2021 By</span>
                        <a href="#">John Doe</a>
                      </div>
                    </div>

                    <div class="articles_list_text_sub">
                      <p>
                        Compellingly aggregate proactive core competencies
                        lever visualize resource maximizing architectures
                        without front core development compet.
                      </p>
                    </div>
                    <div class="submit">
                      <a href="#">READ MORE
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                      </a>
                    </div>
                  </div>
                </div>
                <button type="submit" class="button-loadMore btn btn-primary">
                  Load More
                </button>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="articles_list_content_left">
                <div class="input-group mb-3">
                  <div class="search border">
                    <input type="text" class="form-control border-0" placeholder="Search here..." aria-label="Search here..." aria-describedby="basic-addon2" />
                    <div class="input-group-append bg-white">
                      <button class="btn border-0" type="button">
                        <div class="search_icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="articles_list_content_right_form d-flex">
                  <form>
                    <h3 class="mb-3">Sign Up to News</h3>
                    <span>
                      Subscribe to our news to get the lasest updates and
                      offers
                    </span>
                    <div class="form-group mb-3 mt-3">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" />
                    </div>
                    <button type="submit" class="button-message w-100">
                      Send Message
                    </button>
                  </form>
                </div>
                <div class="content_right_recent_posts">
                  <h4 class="popular_recent_heading">Recent Post</h4>
                  <div class="recent_posts_content">
                    <div class="recent_posts_content_item">
                      <div class="recent_posts_content_img">
                        <img src="./assets/image/anh_7.png" alt="" />
                      </div>
                      <div class="recent_posts_contentinformation">
                        <div class="contentinformation_heading">
                          <p>
                            Participate in staff meet ingness manage dedicated
                          </p>
                        </div>
                        <p class="recect_contentinformation_time">
                          <span class="recent_post_icon">
                            <img src="./assets/image/icon-clock.png" alt="" />
                          </span>
                          24 Jan, 2021
                        </p>
                      </div>
                    </div>
                    <div class="recent_posts_content_item">
                      <div class="recent_posts_content_img">
                        <img src="./assets/image/anh_8.png" alt="" />
                      </div>
                      <div class="recent_posts_contentinformation">
                        <div class="contentinformation_heading">
                          <p>
                            Dramatically provide access schemas without
                            extensive back compatiple
                          </p>
                        </div>
                        <p class="recect_contentinformation_time">
                          <span class="recent_post_icon">
                            <img src="./assets/image/icon-clock.png" alt="" />
                          </span>
                          18 Dec, 2021
                        </p>
                      </div>
                    </div>
                    <div class="recent_posts_content_item">
                      <div class="recent_posts_content_img">
                        <img src="./assets/image/anh_9.png" alt="" />
                      </div>
                      <div class="recent_posts_contentinformation">
                        <div class="contentinformation_heading">
                          <p>
                            Participate in staff meet ingness manage dedicated
                          </p>
                        </div>
                        <p class="recect_contentinformation_time">
                          <span class="recent_post_icon">
                            <img src="./assets/image/icon-clock.png" alt="" />
                          </span>
                          Tháng 3, 2021
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content_right_catagory_posts">
                  <h4 class="popular_catagory_heading">Catagory List</h4>
                  <div class="popular_posts_content">
                    <ul class="popular_posts_content_list">
                      <li class="popular_catagory_content_item">
                        National <span>(69)</span>
                      </li>
                      <li class="popular_catagory_content_item">
                        Computer <span>(85)</span>
                      </li>
                      <li class="popular_catagory_content_item">
                        Product items <span>(90)</span>
                      </li>
                      <li class="popular_catagory_content_item">
                        Sports <span>(56)</span>
                      </li>
                      <li class="popular_catagory_content_item">
                        Magazine <span>(29)</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="content_right_galary_posts">
                  <h4 class="popular_galary_heading">Galary</h4>
                  <div class="popular_posts_content">
                    <div class="popular_galary_content_item">
                      <img src="./assets/image/anh_10.png" alt="" />
                    </div>
                    <div class="popular_galary_content_item">
                      <img src="./assets/image/anh_11.png" alt="" />
                    </div>
                    <div class="popular_galary_content_item">
                      <img src="./assets/image/anh_12.png" alt="" />
                    </div>
                    <div class="popular_galary_content_item">
                      <img src="./assets/image/anh_13.png" alt="" />
                    </div>
                    <div class="popular_galary_content_item">
                      <img src="./assets/image/anh_14.png" alt="" />
                    </div>
                    <div class="popular_galary_content_item">
                      <img src="./assets/image/anh_15.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="content_right_archives_posts">
                  <h4 class="popular_archives_heading">Archives</h4>
                  <div class="popular_posts_content">
                    <ul class="popular_posts_content_list">
                      <li class="popular_archives_content_item">
                        <img src="./assets/image/icon-folder-open.png" alt="" />
                        <span>Sep 2020</span>
                      </li>
                      <li class="popular_archives_content_item">
                        <img src="./assets/image/icon-folder-open.png" alt="" />
                        <span>Oct 2021</span>
                      </li>
                      <li class="popular_archives_content_item">
                        <img src="./assets/image/icon-folder-open.png" alt="" />
                        <span>Jan 2020</span>
                      </li>
                      <li class="popular_archives_content_item">
                        <img src="./assets/image/icon-folder-open.png" alt="" />
                        <span>Nov 2019</span>
                      </li>
                      <li class="popular_archives_content_item">
                        <img src="./assets/image/icon-folder-open.png" alt="" />
                        <span>Dec 2018</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="content_right_followUs_posts">
                  <h4 class="popular_followUs_heading">Follow Us</h4>
                  <div class="popular_followUs_content_icon">
                    <ul class="popular_followUs_content_list_icon">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </ul>
                  </div>
                </div>
                <div class="content_right_tags_posts">
                  <h4 class="popular_tags_heading">Tags</h4>
                  <div class="popular_tags_content">
                    <div class="popular_tags_content_item">
                      <p class="testButton">Fashion</p>
                    </div>
                    <div class="popular_tags_content_item">
                      <p class="testButton">Nation</p>
                    </div>
                    <div class="popular_tags_content_item">
                      <p class="testButton">Company</p>
                    </div>
                    <div class="popular_tags_content_item">
                      <p class="testButton">Business</p>
                    </div>
                    <div class="popular_tags_content_item">
                      <p class="testButton">Computer</p>
                    </div>
                    <div class="popular_tags_content_item">
                      <p class="testButton">Travell</p>
                    </div>
                    <div class="popular_tags_content_item">
                      <p class="testButton">Company</p>
                    </div>
                    <div class="popular_tags_content_item">
                      <p class="testButton">Science</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
