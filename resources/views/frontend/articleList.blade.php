<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>News</title>
  <!-- bootstrap5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link href="./frontend/css/header.css" rel="stylesheet" />
  <link href="./frontend/css/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="./frontend/css/articleList.css">
  <link rel="stylesheet" href="./frontend/css/articleList_responsive.css">
</head>

<body>
  <!---------------------------------------------------------- header--------------------------------------------------------- -->
  @include("frontend/layout.header")
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

                @foreach($post as $item)
                <div class="item d-flex ">
                  <div class="image">
                    <img src="./backend/images/{{ $item -> post_image}}" class="img-fluid" />
                  </div>
                  <div class="text">
                    <div class="articles_list_text_title">
                      <a href="#">
                        <h3 class="h5">{{ $item -> post_title}}</h3>
                      </a>
                    </div>
                    <div class="articles_list_text_date">
                      <div class="icon">
                        <img src="./assets/image/icon-calendar-check.png" alt="" />
                        <span> {{ $item -> post_date}} By</span>
                        <a href="#">John Doe</a>
                      </div>
                    </div>

                    <div class="articles_list_text_sub">
                      <p>
                        {{ $item -> post_content}}
                      </p>
                    </div>
                    <div class="submit">
                      <a href="#">READ MORE
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                @endforeach

                <a href="{{ url('/articleList?page=3')}}">
                  <button class="button-loadMore btn btn-primary" href="{{ url('/articleList?page=3')}}">
                    Load More
                  </button>
                </a>
              </div>
                <div>{{$post->onEachSide(1)->links()}}</div>
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
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                  {{ $message }}
                </div>
                @endif
                <div class="articles_list_content_right_form d-flex">
                  <form action="{{ route('articleList.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="mb-3">Sign Up to News</h3>
                    <span>
                      Subscribe to our news to get the lasest updates and
                      offers
                    </span>
                    <div class="form-group mb-3 mt-3">
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" />
                    </div>
                    <button type="submit" class="button-message w-100">
                      Send Message
                    </button>
                  </form>
                </div>
                <div class="content_right_recent_posts">
                  <h4 class="popular_recent_heading">Recent Post</h4>
                  <div class="recent_posts_content">
                    @foreach ($recent as $item)
                      <div class="recent_posts_content_item">
                        <div class="recent_posts_content_img">
                          <img src="./backend/images/{{ $item -> post_image }}" alt="" />
                        </div>
                        <div class="recent_posts_contentinformation">
                          <div class="contentinformation_heading">
                            <p>
                            {{ $item -> post_title }}
                            </p>
                          </div>
                          <p class="recect_contentinformation_time">
                            <span class="recent_post_icon">
                              <img src="./assets/image/icon-clock.png" alt="" />
                            </span>
                            {{ $item -> post_date }}
                          </p>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="content_right_catagory_posts">
                  <h4 class="popular_catagory_heading">Catagory List</h4>
                  <div class="popular_posts_content">
                    <ul class="popular_posts_content_list">

                      @foreach ($category as $item)
                      <li class="popular_catagory_content_item">
                        {{ $item -> category_name}}
                        <span>
                          (<?php
                            $id = DB::table('categories')
                              ->where('category_name', $item->category_name)
                              ->first();
                            $change = DB::table('posts')
                              ->where('category_id', $id->id)
                              ->count();
                            echo $change;
                            ?>)
                        </span>
                      </li>
                      @endforeach

                      <!-- <li class="popular_catagory_content_item">
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
                      </li> -->
                    </ul>
                  </div>
                </div>
                <div class="content_right_galary_posts">
                  <h4 class="popular_galary_heading">Galary</h4>
                  <div class="popular_posts_content">
                    @foreach ($randPhoto as $item)
                    <div class="popular_galary_content_item">
                      <img src="./image/{{$item -> image}}" alt="" />
                    </div>
                    @endforeach
                    
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
  @include("frontend/layout.footer")
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script>
$(document).ready(function(){
  document.addEventListener("DOMContentLoaded", function(){
    var btn = document.getElementById("myBtn");
    var element = document.getElementById("myToast");

    /* Create toast instance */
    var myToast = new bootstrap.Toast(element, {
        delay: 1000
    });

    btn.addEventListener("click", function(){
        myToast.show();
    });
});
</script>
</body>

</html>