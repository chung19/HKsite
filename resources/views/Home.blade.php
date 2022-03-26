<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <!-- bootstrap5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
  <!-- vendor -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <!--Stylesheets-->
  <link href="./frontend/css/style.css" rel="stylesheet" />
  <link href="./frontend/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <!-- <section> topbar ============================-->
  <section class="topbar py-2 d-none d-sm-block">
    <nav class="navbar container">
      <div class="row body-topbar">
        <div class="col-5">
          <div class="nav-item">
            <a class="text-reset me-3" href="#">
              <img class="nav-icon" src="./frontend/images/index-img/icons/clock.png" alt="icon">
              Mon-Fri: 09.00 am-06:00 pm</a>
          </div>
        </div>
        <div class="col-7">
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
            <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{'home'}}">Home+</a></li>
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{'service-details'}}">Services+</a></li>
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
              <div class="col-lg-6 text-color-last">CONTACT ME</div>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <!---------------------------------------------------------- end header--------------------------------------------------------- -->

  <!--------------------------------------------------------- banner ----------------------------------------------------------->
  <section>
    <div class="banner">
      <div class="row container ">
        <div class="col-12 col-md-6 col-lg-6 banner-left">
          <div class="body-banner-left">
            <h4 class="mb-3  body-color-frist">Optimize it System</h4>
            <h1>Best <a class="body-color-last">Digital Agency<a></h1>
            <h1>And Business</h1>
            <h4 class="mb-3 children_body_m3">Dynamically exploit resource leveling catalysts for change predominate
              focused
              infrastructures vis a vis efficient is our main focus but everybody is</h4>
            <a><button type="button" class="btn btn-learnMore">LEARN MORE &ensp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
            <a><button type="button" class="btn btn-getIn">GET IN TOUCH &ensp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 banner-right">
          <div class="parent-banner-right">
            <img src="./frontend/images/index-img/banner/bg_banner2.png" class="img-fluid" alt="banner-right">
            <div class="child-banner-right">
              <div class="banner-right-title">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
              </div>
              <div class="banner-right-description">
                <span>100% Client Satisfaction</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--------------------------------------------------------- end banner ----------------------------------------------------------->
  <!-- <section> service ============================-->
  <section class="service">
    <div class="container">
      <div class="row card-service">
        <div class="col-lg-4 col-xl-4 card-besides">
          <div class="row">
            <div class="col-2 col-md-2 mb-2 detail-card-icon">
              <img src="./frontend/images/index-img/icons/androi.png">
            </div>
            <div class=" col-10 col-md-10 mb-10 detail-card-besides">
              <div class="title_service"><span>Android Apps Dev</span></div>
              <div class="description_service">
                <p>Certified Company Assurance yet bed was improving furniture man. Distrusts delighted she listening.
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-xl-4 card-between">
          <div class="row">
            <div class="col-2 col-md-2 mb-2 detail-card-icon">
              <img src="./frontend/images/index-img/icons/command.png">
            </div>
            <div class="col-10 col-md-10 mb-10 detail-card-besides">
              <div class="title_service"><span>Web App Develop</span></div>
              <div class="description_service">
                <p>Certified Company Assurance yet bed was improving furniture man. Distrusts delighted she listening.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-4 card-besides">
          <div class="row">
            <div class="col-2 col-md-2 mb-2 detail-card-icon">
              <img src="./frontend/images/index-img/icons/pend.png">
            </div>
            <div class="col-10 col-md-10 mb-10 detail-card-besides">
              <div class="title_service"><span>Graphics Design</span></div>
              <div class="description_service">
                <p>Certified Company Assurance yet bed was improving furniture man. Distrusts delighted she listening.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end <section> service ============================-->

  <!-- <section> about ============================-->
  <section class="card-about">
    <div class="container-fluid card-servicer">
      <div class="row ">
        <div class="col-12 col-md-6 col-lg-6 col-xl-6 card-about-left">
          <img class="parent-about-left" src="./frontend/images/index-img/about/bg_about_left.png" alt="bg_left_about1" />
          <div class="border-about-left">
            <div class="row child-about-left1">
              <div class="col-4 body-color-frist"><span>10</span></div>
              <div class="col-8 body-color-last"><span>Years of Experience</span></div>
            </div>
          </div>
          <div class="child-about-left2">
            <!-- Button trigger modal -->
            <a href="https://www.youtube.com/watch?v=4sosXZsdy-s" class="glightbox3 play-btn video-btn"></a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-6 card-about-right">
          <div class="row">
            <p class="about-right-first">About BigFox </p>
            <p class="about-right-adjacent">About</p>
            <div class="body-card-about">
              <div class="row">
                <div class="col-1"><img class="card-about-biggest" src="./frontend/images/index-img/about/exclamation_about.png" alt="icon exclamation_about" /></div>
                <div class="col-11 card-about-biggest1"><span> We deal with the aspects of professional <a class="color-Textbig">IT Services</a></span></div>
              </div>
              <div class="row content-card-about">
                <span class="color-Textsmall"> We listen. We advise. We design, together. Happy customers and ongoing
                  relationships are what we strive for. Success is measured by results, the most important being how
                  our clients feel about their experience with us</span>
              </div>

              <div class="row content-card-about1">
                <div class="col-3"><img src="./frontend/images/index-img/icons/messWrite.png" alt="icon"></div>
                <div class="col-9">
                  <div class="row">
                    <span class="color-Textmedium"> Certified Company</span>
                  </div>
                  <div class="row">
                    <span class="color-Textsmall">Assurance yet bed was improving furniture man. Distrusts delighted
                      she listening.</span>
                  </div>
                </div>
                <div class="col-3"><img src="./frontend/images/index-img/icons/win1.png" alt="icon"></div>
                <div class="col-9">
                  <div class="row">
                    <span class="color-Textmedium"> Award Ceremony</span>
                  </div>
                  <div class="row">
                    <span class="color-Textsmall">Assurance yet bed was improving furniture man. Distrusts delighted
                      she listening.</span>
                  </div>
                </div>
              </div>
              <div class="card-about-hr">
                <hr />
              </div>
              <div class="founder">
                <div class="row">
                  <div class="col col-lg-4 col-xl-4">
                    <img src="./frontend/images/index-img/about/signature1.png" alt="signature1" />
                  </div>
                  <div class="col col-lg-8 col-xl-8">
                    <div class="row founder-name">
                      <span class="color-Textmedium ">-MD Noor Islam</span>
                    </div>
                    <div class="row founder-name"><span class="color-Textsmall">Chairman & Founder BigFox</span></div>
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
  <!--  end <section> about ============================-->
  <!-- <section> why choose us ============================-->
  <section>
    <div class="container-fluid card-chooseUs">
      <div class="row container body-card-chooseUs">
        <div class="col-12 col-md-6 col-lg-6 card-chooseUs-left">
          <div class="row parent-chooseUs-left">
            <p class="chooseUs-right-first">Why Choose Us</p>
            <p class="chooseUs-right-adjacent">CHOOSE</p>
            <div class="body-card-about">
              <div class="row">
                <div class="col-1"><img class="card-about-biggest" src="./frontend/images/index-img/why_choose_us/exclamation_choose.png" alt="icon exclamation_about" /></div>
                <div class="col-11 card-chooseUs-biggest1"><span> We deal with the aspects of professional <a class="color-Textbig-chooseUs">IT Services</a></span></div>
              </div>
              <div class="row content-card-about">
                <span class="color-Textsmall-chooseUs"> We listen. We advise. We design, together. Happy customers and
                  ongoing
                  relationships are what we strive for. Success is measured by results, the most important being how
                  our clients feel about their experience with us</span>
              </div>

              <div class="row card-list-chooseUs">
                <div class="col-2"><img src="./frontend/images/index-img/icons/checkbox.png" alt="icon"></div>
                <div class="col-10">
                  <span class="color-Textmedium-chooseUs">Complete software platform development
                  </span>
                </div>
                <div class="col-2"><img src="./frontend/images/index-img/icons/checkbox.png" alt="icon"></div>
                <div class="col-10">
                  <span class="color-Textmedium-chooseUs">Practice maturity in hardware, firmware and
                    middleware.</span>
                </div>
                <div class="col-2"><img src="./frontend/images/index-img/icons/checkbox.png" alt="icon"></div>
                <div class="col-10">
                  <span class="color-Textmedium-chooseUs">Device and field testing for electronics.</span>
                </div>
                <div class="col-2"><img src="./frontend/images/index-img/icons/checkbox.png" alt="icon"></div>
                <div class="col-10">
                  <span class="color-Textmedium-chooseUs">Complete software platform development.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 card-chooseUs-right">
          <div class="content-chooseUs-right">
            <div class="row">
              <div class="col-sm-6 col-lg-6">
                <div class="box">
                  <span>01</span>
                  <img src="./frontend/images/index-img/icons/icon_chooseUs1.png" alt="icon_chooseUs1" />
                  <h4><a href="#">Lifetime Support</a></h4>
                  <p>We use top-notch hardware develop the most efficient</p>
                </div>
              </div>

              <div class="col-sm-6 col-lg-6">
                <div class="box">
                  <span>02</span>
                  <img src="./frontend/images/index-img/icons/icon_chooseUs2.png" alt="icon_chooseUs2" />
                  <h4><a href="#">Secure & Protect</a></h4>
                  <p>Are you searce for a highly pro tection the most efficen</p>
                </div>
              </div>

              <div class="col-sm-6 col-lg-6">
                <div class="box">
                  <span>03</span>
                  <img src="./frontend/images/index-img/icons/icon_chooseUs3.png" alt="icon_chooseUs3" />
                  <h4><a href="#">Business Deal </a></h4>
                  <p>Are you searce for a highly pro tection the most efficen</p>
                </div>
              </div>

              <div class="col-sm-6 col-lg-6">
                <div class="box">
                  <span>04</span>
                  <img src="./frontend/images/index-img/icons/icon_chooseUs4.png" alt="icon_chooseUs4" />
                  <h4><a href="#">Download Free Soft</a></h4>
                  <p>We use top-notch hardware develop the most efficient</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end <section> why choose us ============================-->

  <!-- <section> projects ============================-->
  <section>
    <div class="container">
      <div class="row box-card-project">
        <div class="col-12 col-md-5 col-lg-5 box-card">
          <div class="row textMedium-color-card"><span>Latest Case Studies</span></div>
          <div class="row textDefault-color-card"><span>Introduce Our<a class="textBiggest-color-card">
                Projects</a></span></div>
        </div>
        <div class="col-12 col-md-7 col-lg-7 box-card textSmall-color-card">
          <span>Software development outsourcing is just a tool to achieve business goals. But there is no way to get
            worthwhile results without cooperation and trust between a client company. outsourcing is just a tool to
            achieve business.</span>
        </div>
        <div class="col-md-6 col-lg-4">
          <!-- Bootstrap 5 card box -->
          <div class="card-box">
            <div class="card-thumbnail">
              <img src="./frontend/images/index-img/projects/project_1.png" class="img-fluid" alt="project_1.png">
            </div>
            <div class="row card-box-chill">
              <div class="col-10 card-project-left">
                <div class="text-card-project"><span>Social Media App</span></div>
                <div class="textSmall-color-card"><span> Design-> Softs</span></div>
              </div>
              <div class="col-2 card-project-right"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <!-- Bootstrap 5 card box -->
          <div class="card-box">
            <div class="card-thumbnail">
              <img src="./frontend/images/index-img/projects/project_2.png" class="img-fluid" alt="project_2">
            </div>
            <div class="row  card-box-chill">
              <div class="col-10 card-project-left">
                <div class="text-card-project"><span>Food apps Interface</span></div>
                <div class="textSmall-color-card"><span> Design-> Softs</span></div>
              </div>
              <div class="col-2 card-project-right"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <!-- Bootstrap 5 card box -->
          <div class="card-box">
            <div class="card-thumbnail">
              <img src="./frontend/images/index-img/projects/project_3.png" class="img-fluid" alt="project_3">
            </div>
            <div class="row  card-box-chill">
              <div class="col-10 card-project-left">
                <div class="text-card-project"><span>Mobile Apps Dashboard</span></div>
                <div class="textSmall-color-card"><span> Design-> Softs</span></div>
              </div>
              <div class="col-2 card-project-right"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <!-- Bootstrap 5 card box -->
          <div class="card-box">
            <div class="card-thumbnail">
              <img src="./frontend/images/index-img/projects/project_4.png" class="img-fluid" alt="project_4">
            </div>
            <div class="row  card-box-chill">
              <div class="col-10 card-project-left">
                <div class="text-card-project"><span>Web Application Development</span></div>
                <div class="textSmall-color-card"><span> Design-> Softs</span></div>
              </div>
              <div class="col-2 card-project-right"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <!-- Bootstrap 5 card box -->
          <div class="card-box">
            <div class="card-thumbnail">
              <img src="./frontend/images/index-img/projects/project_5.png" class="img-fluid" alt="project_5">
            </div>
            <div class="row  card-box-chill">
              <div class="col-10 card-project-left">
                <div class="text-card-project"><span>Custom Software Development</span></div>
                <div class="textSmall-color-card"><span> Design-> Softs</span></div>
              </div>
              <div class="col-2 card-project-right"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end <section> projects ============================-->

  <!--  <section> counter ============================-->
  <section>
    <div class="container-fluid card-counter">
      <div class="container">
        <div class="row">
          <div class=" col-md-12 col-lg-6 card-counter-left">
            <div class="row">
              <div class="col-4 col-md-4 col-lg-3">
                <div class="circle1">
                  <div class="circle2 ">
                    <div class="circle3"><span>95</span></div>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-8 col-lg-9">
                <div class="title-counter-left"><span>Project Completed</span></div>
                <div class="description-counter-left"><span>Lorem Ipsom is a dolar site amet which is a large filed in
                    the world but everybody start, his own business in.
                  </span></div>
              </div>
              <div class="col-4 col-md-4 col-lg-3">
                <div class="circle1  ">
                  <div class="circle2 ">
                    <div class="circle3"><span>53</span></div>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-8 col-lg-9">
                <div class="title-counter-left"><span>Happy Clients</span></div>
                <div class="description-counter-left"><span>Lorem Ipsom is a dolar site amet which is a large filed in
                    the world but everybody start, his own business in.</span></div>
              </div>
              <div class="col-4 col-md-4 col-lg-3">
                <div class="circle1">
                  <div class="circle2 ">
                    <div class="circle3"><span>10</span></div>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-8 col-lg-9">
                <div class="title-counter-left"><span>Years of Experience</span></div>
                <div class="description-counter-left"><span>Lorem Ipsom is a dolar site amet which is a large filed in
                    the world but everybody start, his own business in.
                  </span></div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 card-counter-right">
            <img src="./frontend/images/index-img/counter/bg_right_counter.png" class="img-fluid img-right-counter" alt="Responsive image">
            <div class="btn-play-counter">
              <!-- Button trigger modal -->
              <a href="https://www.youtube.com/watch?v=qgY134PA4d8" class="glightbox3 play-btn video-btn"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  end <section> counter ============================-->

  <!--  <section> team ============================-->
  <section>
    <div class="container-fluid box-card-team">
      <div class="row container">
        <div class="col-12 col-md-5 col-lg-5 col-xl-5 box-card">
          <div class="row textMedium-color-card"><span>Meet Our Team</span></div>
          <div class="row textDefault-color-card"><span>Our Leadership<a class="textBiggest-color-card"> Team</a></span>
          </div>
        </div>
        <div class="col-12 col-md-7 col-lg-7 col-xl-7 box-card textSmall-color-card">
          <span>Software development outsourcing is just a tool to achieve business goals. But there is no way to get
            worthwhile results without cooperation and trust between a client company. outsourcing is just a tool to
            achieve business.</span>
        </div>
        <div class="col-12 col-md-6 col-lg-3 customHover">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-team">
            <div class="card-thumbnail ">
              <div class="customMist">
              </div>
              <img src="./frontend/images/index-img/team/team4.png" class=" img-team img-fluid" alt="team1.png">
              <div class="overlay-team">
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_fb.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_tw.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_in.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_add.png"></div>
              </div>
            </div>
            <div class="body-card-team">
              <div class="text-card-team"><span>Social Media App</span></div>
              <div class="textSmall-color-card"><span> Design-> Softs</span></div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 customHover">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-team">
            <div class="card-thumbnail ">
              <div class="customMist">
              </div>
              <img src="./frontend/images/index-img/team/team2.png" class="img-team img-fluid" alt="team1.png">
              <div class="overlay-team">
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_fb.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_tw.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_in.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_add.png"></div>
              </div>
            </div>
            <div class="body-card-team">
              <div class="text-card-team"><span>Social Media App</span></div>
              <div class="textSmall-color-card"><span> Design-> Softs</span></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 customHover">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-team">
            <div class="card-thumbnail ">
              <div class="customMist">
              </div>
              <img src="./frontend/images/index-img/team/team3.png" class="img-team img-fluid" alt="team1.png">
              <div class="overlay-team">
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_fb.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_tw.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_in.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_add.png"></div>
              </div>
            </div>
            <div class="body-card-team">
              <div class="text-card-team"><span>Social Media App</span></div>
              <div class="textSmall-color-card"><span> Design-> Softs</span></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 customHover">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-team">
            <div class="card-thumbnail ">
              <div class="customMist">
              </div>
              <img src="./frontend/images/index-img/team/team4.png" class="img-team img-fluid" alt="team1.png">
              <div class="cover">
              </div>
              <div class="overlay-team">
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_fb.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_tw.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_in.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_add.png"></div>
              </div>
            </div>
            <div class="body-card-team">
              <div class="text-card-team"><span>Social Media App</span></div>
              <div class="textSmall-color-card"><span> Design-> Softs</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--  <section> review ============================-->
  <section>
    <div class="container-fluid">
      <div class="row card-review">
        <div class="col body-card-review">
          <div class="text-center text-review-medium"><span>Client Review</span></div>
          <div class="text-center text-review-biggest"><span>We Deliver Solution with the Goal of A Trusting
              Relationship</span></div>
          <div class="text-center text-review-small"><span>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
              eiusmod has a incididunt ut labore et dolore magna is Ut enim ad minim veniam, quis that </span></div>
          <div class="text-center"><button type="button" class="btn btn-view">VIEW ALL REVIEW</button></div>
        </div>
      </div>
      <div class="team-boxed">
        <div class="container">
          <div class="row people">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 item">
              <div class="box-review-card"><img class="rounded-circle" src="./frontend/images/index-img/review/review1.png">
                <h3 class="name">Anjelina Santha</h3>
                <p class="title"> Graphic Designer</p>
                <p class="description">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod has a
                  incididunt ut labore et dolore magna is Ut enim ad minim veniam, quis that</p>
                <div class="small-ratings"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 item">
              <div class="box-review-card"><img class="rounded-circle" src="./frontend/images/index-img/review/review2.png">
                <h3 class="name">Anjelina Santha</h3>
                <p class="title"> Graphic Designer</p>
                <p class="description">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod has a
                  incididunt ut labore et dolore magna is Ut enim ad minim veniam, quis that</p>
                <div class="small-ratings"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 item">
              <div class="box-review-card"><img class="rounded-circle" src="./frontend/images/index-img/review/review3.png">
                <h3 class="name">Anjelina Santha</h3>
                <p class="title"> Graphic Designer</p>
                <p class="description">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod has a
                  incididunt ut labore et dolore magna is Ut enim ad minim veniam, quis that</p>
                <div class="small-ratings"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  <section> blog ============================-->
  <section>
    <div class="container-fluid box-card-blog">
      <div class="row container">
        <div class="col-12 col-md-5 col-lg-5 col-xl-5 box-card">
          <div class="row textMedium-color-card"><span>Our Latest Blog Post</span></div>
          <div class="row textDefault-color-card"><span>Our Latest Blog Post</span></div>
        </div>
        <div class="col-12 col-md-7 col-lg-7 col-xl-7 box-card textSmall-color-card">
          <span>Software development outsourcing is just a tool to achieve business goals. But there is no way to get
            worthwhile results without cooperation and trust between a client company. outsourcing is just a tool to
            achieve business.</span>
        </div>
        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-blog">
            <div class="card-thumbnail-blog item">
              <img class="box-img-blog" src="./frontend/images/index-img/blog/blog1.png" alt="blog1.png">
              <div class="cover">
              </div>
            </div>
            <div class="name-blog"><span>Benefits Of Apps Develop</span></div>
            <div class="list-inline title-blog">
              <span class="list-inline-item"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Jan 30,
                2021</span>
              <span class="list-inline-item"><i class="fa fa-user" aria-hidden="true"></i> Admin</span>
            </div>
            <div class="description-blog"><span>Competently incentivize multifun with his expertise with holistic users
                main in that Monotonectally product.</span></div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-blog">
            <div class="card-thumbnail-blog item">
              <img class="box-img-blog" src="./frontend/images/index-img/blog/blog2.png" alt="blog2.png">
              <div class="cover">
              </div>
            </div>
            <div class="name-blog"><span>Web Applications Dev</span></div>
            <div class="list-inline title-blog">
              <span class="list-inline-item"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Jan 30,
                2021</span>
              <span class="list-inline-item"><i class="fa fa-user" aria-hidden="true"></i> Admin</span>
            </div>
            <div class="description-blog"><span>Competently incentivize multifun with his expertise with holistic users
                main in that Monotonectally product.</span></div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-blog">
            <div class="card-thumbnail-blog item">
              <img class="box-img-blog" src="./frontend/images/index-img/blog/blog3.png" alt="blog3.png">
              <div class="cover">
              </div>
            </div>
            <div class="name-blog"><span>Hibernate Query Language</span></div>
            <div class="list-inline title-blog">
              <span class="list-inline-item"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Jan 30,
                2021</span>
              <span class="list-inline-item"><i class="fa fa-user" aria-hidden="true"></i> Admin</span>
            </div>
            <div class="description-blog"><span>Competently incentivize multifun with his expertise with holistic users
                main in that Monotonectally product.</span></div>
          </div>
        </div>
        <div class="col-md-12 col-lg-12" id="btn-moveBlog">
          <!-- Bootstrap 5 button Bloge-->
          <div class="text-center"><button type="button" class="btn btn-moveBlog"><i class="fa fa-arrow-right" aria-hidden="true"></i></button></div>
        </div>
        <div class="col-md-12 col-lg-12">
          <!-- Bootstrap 5 button Bloge-->
          <div class="text-center"><button type="button" class="btn btn-blog">VIEW ALL NEWS <i class="fa fa-arrow-right" aria-hidden="true"></i></button></div>
        </div>
      </div>
    </div>
  </section>
  <!--  end <section> blog ============================-->

  <!--  <section> newsletter ============================-->
  <section class="newsletter">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 col-lg-5 col-xl-5 beside-newsletter">
            <span class="newsletter-title">Subscribe Our Newsletter
              <span class="newsletter-description">Please Subscribe our news letter and and get update.</span>
            </span>

          </div>
          <div class="col-12 col-md-2 col-lg-2 col-xl-2">
            <div class="circle1 circle-newsLetter">
              <div class="circle2 ">
                <div class="circle3"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 col-lg-5 col-xl-5 beside-newsletter">
            <div class="input-group input-group-newsletter">
              <input type="email" class="form-control from-control-newsletter" placeholder="Enter your email">
              <span class="input-group-btn">
                <button class="btn btn-newsletter" type="submit">Subscribe</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--  <section> newsletter ============================-->

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
