<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>serviceLists</title>
{{-- responsive cho IE từ 1 tới 9 (auto load file) --}}
  <!--[if IE lt 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" integrity="sha512-BWbLJlfp8hzXlxT6K5KLdxPVAj+4Zn2e4FVq5P7NSFH/mkAJ18UiZRQUD4anR3jyp0/WYkeZ0Zmq5EWWrDxneQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<! [endif] -->
{{-- responsive cho IE từ 6 tới 9 (auto load file) --}}
 <!-- bootstrap5 css -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="./frontend/font/font-awesome-4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" el="stylesheet">
 <!-- vendor -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
 <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
{{-- dùng chung header footer --}}
<link href="./frontend/css/header.css" rel="stylesheet" />
<link href="./frontend/css/footer.css" rel="stylesheet" />
{{-- dùng chung header footer --}}
{{-- css style --}}
<link rel="stylesheet" href="{{asset('./frontend/css/serviceLists.css')}}">
<link rel="stylesheet" href="{{asset('./frontend/css/responsive-serviceLists_partners.css')}}">
 {{-- css style --}}

 {{-- font --}}
<link
    href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;600;800&display=swap"
    rel="stylesheet">
  <link href="http://fonts.cdnfonts.com/css/myriad-pro" rel="stylesheet">

<body>
 <!---------------------------------------------------------- header--------------------------------------------------------- -->
 @include("frontend.header")
 <!---------------------------------------------------------- end header--------------------------------------------------------- -->
  <!-- phần thêm code của bạn -->

   <!-- nav-serviceList head Start -->
   <ul class="  nav nav-serviceList  containerd-fluid-xl">
    <li class="nav-item item-left_1 ">
      <a class="nav-link nav-link-color" href="#">
        <span> <img class="nav-icon-size" src="{{('./frontend/img/icons/i1.png')}}" alt="Icon 1" /></span>
        <span class="font-Regular">Services</span>
      </a>
    </li>
    <li class="nav-item  item-left_2">
      <a class="nav-link nav-link-color2" href="#">Home <span class="nav-link-color3">
          <span> <img src="{{ ('./frontend/img/icons/i2.png') }}" alt="Icons 2" /></span>
          Services</span></a>
    </li>
  </ul>
  <!-- nav-serviceList End -->
  <!-- main-serviceList start -->
  <div class=" main-serviceList containers">
    <!-- heading-seviceLists Start -->
    <div class="heading-seviceLists">
      <div class="section-heading-seviceLists">WHAT WE SERVES</div>
      <div class="sub-heading-seviceLists">
        <h3 class="sub-heading-strong">Our Services</h3>
      </div>
    </div>
    <!-- heading-seviceLists Start -->
    <!-- box-content-serviceList start -->
    <!-- box content img -->
    <div class="box-content-serviceList">
      <div class="box-container">
        <!-- box 1 -->
      
      <div class="box-serviceList">
       <a class="bg-color-serviceList" href="https://cs.symfony.com/">
          <div class="boxCurved-serviceList box-icon-serviceList"></div>
              <div class="boxCurved-serviceList2 "></div>
          <span><i class=" filtered3  icon-position-serviceList"></i></span>
          <div class="heading-serviceList ">
             <div class="tittle-serviceList">
               <p>
               <h4 class="title-strong">Digital Marketing</h4>
               </p>
             </div>
             <div class="content-serviceList">
               <p> Distinctively communicate areexcellent </p>
               <p> content and ubiquileApp have become</p>
               <p> Synergistically with</p>
             </div>
           </div>
           <div class="hide-img-box-serviceList"></div>
           <span class="circle-chevron-right-serviceList"> <img src="{{ ('./frontend/img/icons/i2.png') }}"
            alt="Icons 2" /></i></span>
          </a>
        </div>
           <!-- box 1 end -->
               <!-- box 2 -->
      <div class="box-serviceList2">
       <a class="bg-color-serviceList" href="https://cs.symfony.com/">
          <div class="boxCurved-serviceList box-icon-serviceList"></div>
              <div class="boxCurved-serviceList2 "></div>
          <span><i class=" filtered4  icon-position-serviceList"></i></span>
          <div class="heading-serviceList ">
             <div class="tittle-serviceList">
               <p>
               <h4 class="title-strong">Web Development </h4>
               </p>
             </div>
             <div class="content-serviceList">
               <p>Conveniently predominate sticky ali</p>
               <p>than low risk high yield methods of emp</p>
               <p> brand superior techno</p>
             </div>
             <div class="hide-img-box-serviceList"></div>
           </div>
           <span class="circle-chevron-right-serviceList"> <img src="{{ ('./frontend/img/icons/i2.png') }}"
            alt="Icons 2" /></i></span>
          </a>
          </div>
              <!-- box2 end -->
                  <!-- box 3 -->
      <div class="box-serviceList">
       <a class="bg-color-serviceList" href="https://cs.symfony.com/">
          <div class="boxCurved-serviceList box-icon-serviceList"></div>
              <div class="boxCurved-serviceList2 "></div>
          <span><i class=" filtered5  icon-position-serviceList"></i></span>
          <div class="heading-serviceList ">
             <div class="tittle-serviceList">
               <p>
               <h4 class="title-strong">App Designs</h4>
               </p>
             </div>
             <div class="content-serviceList">
               <p> Energistically target dynamic technolog </p>
               <p> content and ubiquileApp have become</p>
               <p> future-proof value</p>
             </div>
           </div>
           <span class="circle-chevron-right-serviceList"> <img src="{{ ('./frontend/img/icons/i2.png') }}"
             alt="Icons 2" /></i></span>
          </a>
          </div>
              <!-- box 3 end -->
                  <!-- box 4 -->
      <div class="box-serviceList">
       <a class="bg-color-serviceList" href="https://cs.symfony.com/">
          <div class="boxCurved-serviceList box-icon-serviceList"></div>
              <div class="boxCurved-serviceList2 "></div>
          <span><i class=" filtered6  icon-position-serviceList"></i></span>
          <div class="heading-serviceList ">
             <div class="tittle-serviceList">
               <p>
               <h4 class="title-strong">Graphic Design</h4>
               </p>
             </div>
             <div class="content-serviceList">
               <p> Conveniently predominate sticky ali </p>
               <p> than low risk high yield methods of emp</p>
               <p> brand superior techno</p>
             </div>
           </div>
           <span class="circle-chevron-right-serviceList"> <img src="{{ ('./frontend/img/icons/i2.png') }}"
             alt="Icons 2" /></i></span>
          </a>
          </div>
              <!-- box 4 end -->
                  <!-- box 5 -->
      <div class="box-serviceList">
       <a class="bg-color-serviceList" href="https://cs.symfony.com/">
          <div class="boxCurved-serviceList box-icon-serviceList"></div>
              <div class="boxCurved-serviceList2 "></div>
          <span><i class=" filtered7  icon-position-serviceList"></i></span>
          <div class="heading-serviceList ">
             <div class="tittle-serviceList">
               <p>
               <h4 class="title-strong">Custom Soft Dev</h4>
               </p>
             </div>
             <div class="content-serviceList">
               <p> Holisticly strategize standardized manu </p>
               <p> products for dynamic expertise. Rapidio</p>
               <p> equity invested synergy</p>
             </div>
           </div>
           <span class="circle-chevron-right-serviceList"> <img src="{{ ('./frontend/img/icons/i2.png') }}"
             alt="Icons 2" /></i></span>
         </a>
          </div>
              <!-- box 5 end -->
                  <!-- box 6 -->
      <div class="box-serviceList">
       <a class="bg-color-serviceList" href="https://cs.symfony.com/">
          <div class="boxCurved-serviceList box-icon-serviceList"></div>
              <div class="boxCurved-serviceList2 "></div>
          <span><i class=" filtered8  icon-position-serviceList"></i></span>
       
          <div class="heading-serviceList ">
             <div class="tittle-serviceList">
               <p>
               <h4 class="title-strong">e-Commerce Service</h4>
               </p>
             </div>
             <div class="content-serviceList">
               <p> Distinctively communicate areexcellent </p>
               <p> content and ubiquileApp have become</p>
               <p> Synergistically with</p>
             </div>
           </div>
           <span class="circle-chevron-right-serviceList"> <img src="{{ ('./frontend/img/icons/i2.png') }}"
             alt="Icons 2" /></i></span>
          </a>
          </div>
              <!-- box 6 end -->
      </div>
    </div>
  </div>
  <!-- box content img -->
  <!-- box-content-serviceList  -->
  </div>
  <!-- main-serviceList End -->
  
     <!-- phần thêm code của bạn -->
 
  <!--  <section> footer ============================-->
    @include("frontend.footer")
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>