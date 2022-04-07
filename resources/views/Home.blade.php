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
  <link href="./frontend/css/header.css" rel="stylesheet" />
  <link href="./frontend/css/footer.css" rel="stylesheet" />
  <link href="./frontend/css/home.css" rel="stylesheet" />
  <link href="./frontend/css/home_responsive.css" rel="stylesheet" />
</head>

<body>

  <!---------------------------------------------------------- header--------------------------------------------------------- -->
  @include("frontend-layout.header")
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
        @foreach ($projects as $key => $project)
        @if ($key< 3 ) <div class="col-md-6 col-lg-4">
          <!-- Bootstrap 5 card box -->
          <div class="card-box">
            <div class="card-thumbnail">
              <img src="/image/{{ $project->image }}" class="img-fluid" alt="project_1.png">
            </div>
            <div class="row card-box-chill">
              <div class="col-10 card-project-left">
                <div class="text-card-project"><span>{{ $project->title }}</span></div>
                <div class="textSmall-color-card"><span> Design-> Softs</span></div>
              </div>
              <div class="col-2 card-project-right"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
      </div>
      @endif
      @if ($key >= 3 )
      <div class="col-md-6 col-lg-6">
        <!-- Bootstrap 5 card box -->
        <div class="card-box">
          <div class="card-thumbnail">
            <img src="/image/{{ $project->image }}" class="img-fluid" alt="project_4">
          </div>
          <div class="row  card-box-chill">
            <div class="col-10 card-project-left">
              <div class="text-card-project"><span>{{ $project->title }}</span></div>
              <div class="textSmall-color-card"><span> Design-> Softs</span></div>
            </div>
            <div class="col-2 card-project-right"><a><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
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
        @foreach ($teams as $team)
        <div class="col-12 col-md-6 col-lg-3 customHover">
          <!-- Bootstrap 5 card box -->
          <div class="card-box-team">
            <div class="card-thumbnail ">
              <div class="customMist">
              </div>
              <img src="/image/{{ $team->image }}" class=" img-team img-fluid" alt="imgTeam">
              <div class="overlay-team">
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_fb.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_tw.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_in.png"></div>
                <div class="list-icon-team"><img src="./frontend/images/index-img/icons/icon_add.png"></div>
              </div>
            </div>
            <div class="body-card-team">
              <div class="text-card-team"><span>{{ $team->title }}</span></div>
              <div class="textSmall-color-card"><span> Design-> {{ $team->category }}</span></div>
            </div>
          </div>
        </div>
        @endforeach
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
          @foreach ($reviews as $review)
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 item">
              <div class="box-review-card"><img class="rounded-circle" src="/image/{{ $review->image }}">
                <h3 class="name">{{ $review->name }}</h3>
                <p class="title"> {{ $review->position }}</p>
                <p class="description">{{ $review->content }}</p>
                <div class="small-ratings">
                    @for($i=1; $i<=$review->star; $i++)
                    <span><i class="fa fa-star"></i></span>
                    @endfor</i>
                 </div>
              </div>
            </div>
            @endforeach
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
          <div class="text-center">
          <a  href="{{'articleList'}}">
            <button class="btn btn-blog">
            VIEW ALL NEWS <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </button></a></div>
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
  @include("frontend-layout.footer")
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="./frontend/js/btnPlay.js"></script>
</body>

</html>
