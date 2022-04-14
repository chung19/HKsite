
 <!--  <section> footer ============================-->
 <section>
    <footer class="footer">
      <div class="container-fluid footer__wrapper-content">
        <div class="container footer_top">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
              <a class="footer_top-logo-link" href="{{'home'}}"><img src="{{asset('./frontend/images/footer/logo.png')}}" alt="logo" class="footer_top-contact-logo" /></a>
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
                    <?php
                    $randPost = DB::table('posts')
                                    ->inRandomOrder()->limit(2)->get();
                  ?>
                  @foreach ($randPost as $item)
                    <div class="popular_posts_content_item">
                      <div class="popular_posts_content_img">
                        <img src="./backend/images/{{ $item -> post_image}}" alt="" />
                      </div>
                      <div class="popular_posts_contentinformation">
                        <div class="contentinformation_heading_popular_post fontcolor">
                        {{ $item -> post_title}}
                        </div>
                        <p class="contentinformation_time">{{ $item -> post_date}}</p>
                      </div>
                    </div>
                  @endforeach


                  <!-- <div class="popular_posts_content_item">
                    <div class="popular_posts_content_img">
                      <img src="{{asset('./frontend/images/footer/anh_16.png')}}" alt="" />
                    </div>
                    <div class="popular_posts_contentinformation">
                      <div class="contentinformation_heading_popular_post fontcolor">
                        Android Application Program-2021
                      </div>
                      <p class="contentinformation_time">August 24, 2021</p>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 pdl-30 mt60">
              <h5 class="footer_top-posts-title">Our Contacts</h5>
              <div class="our_contact_content">
                <div class="our_contact_content_item">
                  <div class="our_contact_content_img">
                    <img src="{{asset('./frontend/images/footer/icon-address.png')}}" alt="" />
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
                    <img src="{{asset('./frontend/images/footer/icon-phone.png')}}" alt="" />
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
                    <img src="{{asset('./frontend/images/footer/icon-email.png')}}" alt="" />
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
            <p class="text-top-left">
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
