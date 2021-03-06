<!DOCTYPE html>
<!--

**********************************************************************************************************
Copyright (c) 2020
**********************************************************************************************************  

Template Name: WeddingDir - HTML Template
Version: 1.0.0
Author: wp-organic

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]>
-->
<html lang="en">
    <!-- <![endif]-->
    <!-- head -->
    
<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard-vendor-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:15 GMT -->
<head>


<style>
header{
  background:#000000;
}
header ul{
  background:#000000;
}
#navbar{
background:#000000;
}
.couple-img {
    position: relative;
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    background: url("<?php echo e(asset('site_assets/img/dashboard/couple_img.jpg')); ?>") no-repeat top center;
    background-size: cover;
    width: 100%;
    height: 100%;
}
</style>

<link rel="apple-touch-icon" href="<?php echo e(asset('site_assets/img/favicon/apple-touch-icon.png')); ?>" sizes="180x180">
        <link rel="icon" href="<?php echo e(asset('site_assets/img/favicon/favicon-32x32.png')); ?>" sizes="32x32" type="image/png">
        <link rel="icon" href="<?php echo e(asset('site_assets/img/favicon/favicon-16x16.png')); ?>" sizes="16x16" type="image/png">
        <link rel="icon" href="<?php echo e(asset('site_assets/img/favicon/favicon.ico')); ?>">


        <!-- CSS ( Bootstrap + Owlcarouses + Fontawesome + Animate + Select2 + Custom Style )
        ======================================================================================= -->
        <!-- <link href="assets/css/base.css" rel="stylesheet"> -->
        <link href="<?php echo e(asset('site_assets/assets/library/animate/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/bootstrap/css/bootstrap-dropdownhover.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/select2/css/select2.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/animate/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/magnific-popup/magnific-popup.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/jquery-ui/css/jquery-ui.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/fontawesome/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/datepicker/css/datepicker.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/owlcarousel/css/owl.carousel.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/library/perfect-scrollbars/perfect-scrollbar.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
        
        <!-- Dashbaord Main Style -->
        <link href="<?php echo e(asset('site_assets/assets/css/dashboard.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/css/style2.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/css/style3.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('site_assets/assets/css/base.css')); ?>" rel="stylesheet">
        

        
    </head>
    <!-- end head -->
    <!--body start-->
    <body class="open">    

    <!-- preloader -->
    <div class="preloader">
        <div class="status">
            <img src="assets/images/logo_light.svg" alt="">
        </div>
    </div>
    <!-- end preloader -->

    <!--  WeddingDir top -->
    <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html" >Skepsi stella</a></h1>
    
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="about">About</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" class="bi bi-list-check">Checklist</a></li>
              <li><a href="#" class="bi bi-people-fill">Guests</a></li>
              <li><a href="#" class="bi bi-cash-coin">Budget</a></li>
             
              <li><a href="#">Event Website</a></li>
              <li><a href="#">Community</a></li>
            </ul>
          </li>


          <li class="dropdown"><a href="#"><span>Event Venders</span> <i class="bi bi-chevron-down"></i></a>
            
            <ul>
             
               <li><a href="catering" class="bi bi-list-check">Catering</a></li>
              <li><a href="photography" class="bi bi-list-check">Photography</a></li>
              <li><a href="tent_house" class="bi bi-list-check">Tent House</a></li>
              <li><a href="decoration" class="bi bi-list-check">Decoration</a></li>
              <li><a href="music" class="bi bi-list-check">Music</a></li>
              <li><a href="entairtainment" class="bi bi-list-check">Entairtainment</a></li>
              <li><a href="videography" class="bi bi-list-check">Videography</a></li>
              <li><a href="cake" class="bi bi-list-check">Cake</a></li>
              <li><a href="choreographers" class="bi bi-list-check">Choreographers</a></li>
              <li><a href="florists" class="bi bi-list-check">Florists</a></li>
              <li><a href="dj" class="bi bi-list-check">DJ</a></li>
              <li><a href="party_lounge" class="bi bi-list-check">Party Lounge</a></li>
              <li><a href="photobooth" class="bi bi-list-check">PhotoBooth</a></li>




            
            </ul>
            
        
            
            
            </li>



          <li><a href="blog.html">Blog</a></li>
         
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     
      <li class="nav-item dropdown user-profile" style="margin-top:-30px;">
                            <a class="nav-link" href="index.html" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="<?php echo e(asset('site_assets/img/dashboard/avatar_img.jpg')); ?>" alt="" width="30" height="30" style="border-radius:50%">
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdownhover-bottom dropdown-menu-right" aria-labelledby="dropdown04">
                                <li><a class="dropdown-item" href="couple-dashboard.html">Dashboard</a></li>
                                <li><a class="dropdown-item" href="couple-dashboard-todo-list.html">Checklist</a></li>
                                <li><a class="dropdown-item" href="couple-dashboard-vendor-manager.html">Vendor Manager</a></li>
                                <li><a class="dropdown-item" href="couple-dashboard-guest-manager.html">Guest List</a></li>
                                <li><a class="dropdown-item" href="couple-dashboard-budget.html">Budget</a></li>
                                <li><a class="dropdown-item" href="couple-dashboard-realwedding.html">RealWedding</a></li>
                                <li><a class="dropdown-item" href="javascript:">Seating Chart</a></li>
                                <li><a class="dropdown-item" href="javascript:">Registry</a></li>
                                <li><a class="dropdown-item" href="javascript:">Chat</a></li>
                                <li><a class="dropdown-item" href="couple-dashboard-profile.html">My Profile</a></li>
                                <li><a class="dropdown-item" href="javascript:">Wedding Website</a></li>            
                                <li><a class="dropdown-item" href="javascript:">Logout</a></li>
                            </ul>
                        </li>
                    </ul>




    </div>
  </header><!-- End Header -->

    <!-- =============================
       *
       *   Page Content Start
       *
    =============================== -->
    <main>
        <aside class="offcanvas-collapse">
            <div class="avatar-wrap">
                <img src="<?php echo e(asset('site_assets/img/dashboard/avatar_img.jpg')); ?>" alt="">
                <h3>Hitesh Mahavar</h3>                
            </div>
            <div class="sidebar-nav">
                <ul class="list-unstyled">
                <li>
                        <a href="couple-dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="couple-checklist"><i class="bi bi-card-checklist"></i> Checklist</a>
                    </li>
                    <li class="active">
                        <a href="couple-vendor"><i class="bi bi-person-circle"></i> Vendor Manager</a>
                    </li>
                    <li>
                        <a href="couple-gust-list"><i class="bi bi-person-check-fill"></i> Guest List</a>
                    </li>
                    <li>
                        <a href="couple-budget"><i class="bi bi-cash"></i> Budget</a>
                    </li>
                    <li>
                        <a href="couple-wedding"><i class="weddingdir_dove"></i> RealWedding</a>
                    </li>
                    <li>
                        <a href="couple-seatingchart"><i class="bi bi-bar-chart-line-fill"></i> Seating Chart</a>
                    </li>
                    <li>
                        <a href="couple-registry"><i class="bi bi-journal-text"></i> Registry</a>
                    </li>
                    <li>
                        <a href="couple-chat"><i class="bi bi-chat-dots-fill"></i> Chat</a>
                    </li>
                    <li>
                        <a href="couple-profile"><i class="bi bi-person-square"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="couple-wedding-website"><i class="bi bi-globe2"></i> Wedding Website</a>
                    </li>

                    <li>
                        <a href="first"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="body-content">
            <div class="main-contaner">
                <div class="container">
                    <!-- Page Heading -->
                    <div class="section-title">
                        <h2>Vendor Manager</h2>
                    </div>
                    <!-- Page Heading -->

                    <div class="row">
                        <!-- Budget Start -->
                        <div class="col-12 col-xl-3">
                            <div class="d-flex flex-column flex-xl-column-reverse">
                                
                                <div class="widget-wrap">
                                    <div class="widget-box">
                                        <p><strong>Status</strong> </p>

                                        <ul class="list-unstyled status-list">
                                            <li>
                                                <a href="javascript:"><span class="badge badge-success">&nbsp;</span> Hired <span class="ml-auto">1</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:"><span class="badge badge-warning">&nbsp;</span> Not a Good Fit <span class="ml-auto">2</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:"><span class="badge badge-danger">&nbsp;</span> Evaluating <span class="ml-auto">4</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:"><span class="badge badge-info">&nbsp;</span> Unavailable <span class="ml-auto">1</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-wrap">
                                    <div class="widget-box">
                                        <div class="view-by">
                                            <p><strong>View By</strong> </p>
                                            <a href="javascript:" class="selected-tags">New York <span>X</span></a>
                                            <a href="javascript:" class="selected-tags">Buffalo <span>X</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav flex-column nav-pills theme-tabbing-vertical budget-tab mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-venue-tab" data-toggle="pill" href="#v-pills-venue" role="tab"
                                    aria-controls="v-pills-venue" aria-selected="true"><i class="bi bi-geo-alt-fill"></i> Venue</a>
                                    <a class="nav-link" id="v-pills-photographer-tab" data-toggle="pill" href="#v-pills-photographer" role="tab"
                                    aria-controls="v-pills-photographer" aria-selected="true"><i class="bi bi-camera-fill"></i> Photographer</a>
                                    <a class="nav-link" id="v-pills-cake-tab" data-toggle="pill" href="#v-pills-cake" role="tab"
                                    aria-controls="v-pills-cake" aria-selected="true"><i class="bi bi-emoji-smile"></i> Cake</a>
                                    <a class="nav-link" id="v-pills-band-tab" data-toggle="pill" href="#v-pills-band" role="tab"
                                    aria-controls="v-pills-band" aria-selected="true"><i class="bi bi-kanban"></i> Band</a>
                                    <a class="nav-link" id="v-pills-florist-tab" data-toggle="pill" href="#v-pills-florist" role="tab"
                                    aria-controls="v-pills-florist" aria-selected="true"><i class="bi bi-flower1"></i> Florist</a>
                                </div>
                            </div>
                            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

                        </div>
                        <div class="col-12 col-xl-9">
                            <div class="tab-content budget-tab-content" id="v-pills-tabContent">

                                <!-- Venue -->
                                <div class="tab-pane fade show active" id="v-pills-venue" role="tabpanel" aria-labelledby="v-pills-venue-tab">                                    
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2">
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_1.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_3.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Venue -->

                                <!-- Photographer -->
                                <div class="tab-pane fade" id="v-pills-photographer" role="tabpanel" aria-labelledby="v-pills-photographer-tab">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2">
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_2.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_4.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Photographer -->
                                
                                <!-- Cake -->
                                <div class="tab-pane fade" id="v-pills-cake" role="tabpanel" aria-labelledby="v-pills-cake-tab">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2">
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_5.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_6.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cake -->

                                <!-- Band -->
                                <div class="tab-pane fade" id="v-pills-band" role="tabpanel" aria-labelledby="v-pills-band-tab">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2">
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_7.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_8.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Band -->

                                <!-- Florist -->
                                <div class="tab-pane fade" id="v-pills-florist" role="tabpanel" aria-labelledby="v-pills-florist-tab">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2">
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_9.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="wedding-listing">
                                                <div class="img">
                                                    <a href="listing-singular.html">
                                                        <img src="<?php echo e(asset('site_assets/img/vendors/vendor_img_10.jpg')); ?>" alt="">
                                                    </a>
                                                    <div class="img-content">
                                                        <div class="top text-right">                                                           
                                                            <a class="favorite" href="javascript:">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="reviews">
                                                                <span class="stars">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                    <i class="fa fa-star-o"></i>                                    
                                                                </span>
                                                                2662
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="gap">
                                                        <h4><a href="listing-singular.html">Happy Wedding Fashions</a></h4>
                                                        <p><i class="fa fa-map-marker"></i> Surat, Gujrat, India</p>

                                                        <div class="form-group">
                                                            <select class="theme-combo" name="state" style="width: 100%;">
                                                                <option>Unavailable</option>
                                                                <option>Not a Good Fit</option>
                                                                <option>Evaluating</option>
                                                                <option>Hired</option>
                                                            </select>
                                                        </div>

                                                        <div class="d-flex align-items-center row no-gutters">
                                                            <div class="col-9">
                                                                <label>Overall fit</label>
                                                                <div class="rating-stars">
                                                                    <a href="#5" title="Give 5 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#4" title="Give 4 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#3" title="Give 3 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#2" title="Give 2 stars"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#1" title="Give 1 star"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <div><label>Price</label></div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mr-2">$</span>
                                                                    <input type="text" class="form-control price-wedding" placeholder="0">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <label>Notes</label>
                                                            <textarea class="form-control" placeholder="Text here" rows="3">Text here</textarea>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="bottom-footer">
                                                        <span><a href="javascript:"><i class="fa fa-phone"></i> Phone number</a></span>
                                                        <span><a href="javascript:" data-toggle="modal" data-target="#request_quote"><i class="fa fa-envelope-o"></i> Contact</a></span>
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Florist -->
                
                            </div>
                        </div>
                        <!-- Budget End -->
                    </div>

                    
                </div>
            </div>
            <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Skepsi stella</h3>
        <p>
          Chitkara University <br>
          Rajpura, Punjab 140401<br>
          India <br><br>
          <strong>Phone:</strong> +91-7082243914<br>
          <strong>Email:</strong> skepsistella@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Checklist</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Guests</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Butget</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Event Vendor</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Event Website</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Community</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Skepsi stella will provide latest information about the events at your place</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Skepsi stella</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
      Developed by <a href="http://www.towais.com" target="_blank">TOWAIS</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->
        </div>        
    </main>

    
    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Request Quote Modal -->
    <div class="modal fade" id="request_quote" tabindex="-1" aria-labelledby="request_quote" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h3 class="m-0" >Request A Quote</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-3 px-4 pt-0">
                        <div class="request-quote-form">
                            <div class="form-group">
                                <input type="text" placeholder="First and last name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Phone Number" class="form-control" />
                            </div>
                            <div class="form-group pos-rel">
                                <input type="text" class="form-control" data-toggle="datepicker" placeholder="Choose Date" />
                            </div>
                            <div class="form-group">
                                <textarea rows="6" placeholder="Your message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <p><strong><small class="txt-orange">Preferred Contact Method</small></strong></p>

                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Call</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Email</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3">Video call</label>
                                </div>
                            </div>
                            <div class="form-group">
                               <small class="form-text text-muted">By clicking <span class="txt-orange">'Request pricing'</span>, I agree to WeddingDir???s <a href="javascript:" class="text-underline">Privacy Policy</a> and <a href="javascript:">Terms of Use</a> </small> 
                            </div>
                            <button type="button" class="btn btn-primary">Request Pricing</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Quote Modal -->

    
    <!-- All The JS Files
      ================================================== -->
      <script src="<?php echo e(asset('site_assets/assets/library/jquery/jquery-min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/bootstrap/js/bootstrap-dropdownhover.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/owlcarousel/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/select2/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/library/jquery-ui/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/jquery-ui/js/jquery.ui.touch-punch.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>  
    <script src="<?php echo e(asset('site_assets/assets/library/isotope-layout/isotope.pkgd.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('site_assets/assets/library/datepicker/js/datepicker.js')); ?>"></script> 
    <script src="<?php echo e(asset('site_assets/assets/library/countdown/js/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/perfect-scrollbars/perfect-scrollbar.min.js')); ?>"></script>    
    <script src="<?php echo e(asset('site_assets/assets/library/slide-reveal/jquery.slidereveal.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/js/dashboard.js')); ?>"></script>
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard-vendor-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:16 GMT -->
</html><?php /**PATH D:\xampp\htdocs\laravel\wedding\resources\views/couple_vendor.blade.php ENDPATH**/ ?>