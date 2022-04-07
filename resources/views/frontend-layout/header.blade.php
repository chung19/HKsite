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
            <li class="nav-item px-2"><a class="nav-link @if (\Request::is('home')|| \Request::is('/')) active  @endif" aria-current="page" href="{{'home'}}">Home+</a></li>
            <li class="nav-item px-2"><a class="nav-link @if (\Request::is('service-details')) active  @endif" aria-current="page" href="{{'service-details'}}">Services+</a></li>
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="web-development.html">Pages +</a>
            </li>
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">Shop +</a></li>
            <li class="nav-item px-2"><a class="nav-link @if (\Request::is('articleList')) active  @endif" aria-current="page" href="{{'articleList'}}">News</a></li>
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{'about'}}">About Us</a>
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
