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
    
<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:03 GMT -->
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



        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!-- Basic Page Needs
        ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Specific Meta
        ================================================== -->
       
        
        <!-- Titles
        ================================================== -->
        <title>skepsistella - Couple Dashboard</title>

        <!-- Favicons
        ================================================== -->
        <link rel="apple-touch-icon" href="<?php echo e(asset('site_assets/img/favicon/apple-touch-icon.png')); ?>" sizes="180x180">
        <link rel="icon" href="<?php echo e(asset('site_assets/img/favicon/favicon-32x32.png')); ?>" sizes="32x32" type="image/png">
        <link rel="icon" href="<?php echo e(asset('site_assets/img/favicon/favicon-16x16.png')); ?>" sizes="16x16" type="image/png">
        <link rel="icon" href="<?php echo e(asset('site_assets/img/favicon/favicon.ico')); ?>">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  

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
            <img src="<?php echo e(asset('site_assets/img/logo_light.svg')); ?>" alt="">
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
    <!--  WeddingDir top -->

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
                        <a href="couple-chat"><i class="bi bi-chat-dots-fill"></i> Chat</a>
                    </li>
                    <li>
                        <a href="couple-profile"><i class="bi bi-person-square"></i> My Profile</a>
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

                    <!-- Couple Info Section -->
                    <div class="card-shadow">
                        <div class="card-shadow-body p-0">
                            <div class="row">
                                <div class="col-lg-6 col-xl-5">
                                    <div class="d-flex align-items-center h-100">
                                        <div class="couple-img">
                                            <img src="<?php echo e(asset('site_assets/img/dashboard/couple_img.jpg')); ?>" class="hidden-desktop" alt="">
                                            <div class="couple-btn">
                                                <a href="javascript:" class="btn btn-outline-white"><i class="fa fa-camera"></i> Photo</a>
                                                <span class="dropdown hover_out">
                                                    <a class="btn btn-outline-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-share-alt"></i> Share
                                                    </a>
                                                
                                                    <span class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:"><i class="fa fa-facebook-f"></i> Facebook</a>
                                                        <a class="dropdown-item" href="javascript:"><i class="fa fa-twitter"></i> Twitter</a>
                                                        <a class="dropdown-item" href="javascript:"><i class="fa fa-instagram"></i> Instagram</a>
                                                        <a class="dropdown-item" href="javascript:"><i class="fa fa-envelope-o"></i> Email</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="couple-counter">
                                            <ul id="wedding-countdown" class="list-unstyled list-inline">
                                                <li class="list-inline-item"><span class="days">00</span><div class="days_text">Days</div></li>
                                                <li class="list-inline-item"><span class="hours">00</span><div class="hours_text">Hours</div></li>
                                                <li class="list-inline-item"><span class="minutes">00</span><div class="minutes_text">Minutes</div></li>
                                                <li class="list-inline-item"><span class="seconds">00</span><div class="seconds_text">Seconds</div></li>
                                            </ul>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="col-lg-6 col-xl-7">
                                    <div class="couple-info">
                                        <div class="edit-btn">
                                            <a href="couple-dashboard-profile.html" class="btn btn-outline-white btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                        </div>
                                        <div class="text-center">
                                            <div class="couple-avatar">
                                                <img src="<?php echo e(asset('site_assets/img/dashboard/avatar_img.jpg')); ?>" alt="">
                                                <img src="<?php echo e(asset('site_assets/img/dashboard/avatar_2_img.jpg')); ?>" alt="">

                                            </div>
                                            <h2>Hitesh & Priyanka</h2>
                                            <span class="save-date"><i class="fa fa-calendar"></i> 11/12/2020</span>
                                        </div>

                                        <div class="couple-status">
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%"></div>
                                            </div>
                                            <div class="small-text">
                                                <span>Status</span>
                                                <span>Just said yes? Let's get started!</span>
                                            </div>
                                        </div>

                                        <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2">
                                            <div class="col">
                                                <div class="couple-status-item">
                                                    <div class="counter">
                                                        0
                                                    </div>
                                                    <div class="text">
                                                        <strong>Out of 21</strong>
                                                        <small>services hired</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="couple-status-item">
                                                    <div class="counter">
                                                        0
                                                    </div>
                                                    <div class="text">
                                                        <strong>Out of 81</strong>
                                                        <small>Tasks completed</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="couple-status-item">
                                                    <div class="counter">
                                                        2
                                                    </div>
                                                    <div class="text">
                                                        <strong>Out of 02</strong>
                                                        <small>Guests attending</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="couple-status-item">
                                                    <div class="counter">
                                                        2
                                                    </div>
                                                    <div class="text">
                                                        <strong>Out of 02</strong>
                                                        <small>Guests Seated</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Couple Info Section -->

                    <div class="row">
                        <div class="col-xl-8">
                            <!-- Vendor Team -->
                            <div class="card-shadow">
                                <div class="card-shadow-header">
                                    <div class="dashboard-head">
                                        <h3>
                                            <span>of 21 categories hired</span>
                                            Your vendor team
                                        </h3>
                                        <div class="links">
                                            <a href="couple-dashboard-vendor-manager.html">View all my vendors <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-light">
                                    <div class="card-shadow-body">
                                        <div class="row align-items-center">
                                            <div class="col-md mb-3 mb-md-0">
                                                <input type="text" class="form-control form-light" placeholder="Start your search">
                                            </div>
                                            <div class="col-md mb-3 mb-md-0">
                                                <input type="text" class="form-control form-light" placeholder="Where">
                                            </div>
                                            <div class="col-md-auto">
                                                <a href="right-side-map-listing.html" class="btn btn-default">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-shadow-body pb-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="dash-categories selected" style="background-image: url(<?php echo e(asset('site_asset/img/dashboard/dash_category.jpg')); ?>) no-repeat; background-size: cover;">
                                                <div class="edit">
                                                    <a href="javascript:"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="head">
                                                    <i class="weddingdir_location_heart"></i>
                                                    Venue
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dash-categories">
                                                <div class="edit">
                                                    <a href="javascript:"><i class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="head">
                                                    <i class="weddingdir_pheras"></i>
                                                    Wedding Pheras
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dash-categories">
                                                <div class="edit">
                                                    <a href="javascript:"><i class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="head">
                                                    <i class="weddingdir_location_heart"></i>
                                                    Videographer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dash-categories">
                                                <div class="edit">
                                                    <a href="javascript:"><i class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="head">
                                                    <i class="weddingdir_heart_envelope"></i>
                                                    Invitations
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dash-categories">
                                                <div class="edit">
                                                    <a href="javascript:"><i class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="head">
                                                    <i class="weddingdir_love_gift"></i>
                                                    Favors & Gifts
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dash-categories">
                                                <div class="edit">
                                                    <a href="javascript:"><i class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="head">
                                                    <i class="weddingdir_cake"></i>
                                                    Wedding Cake
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Vendor Team -->

                            <!-- Wedding details -->
                            <div class="card-shadow">
                                <div class="card-shadow-header">
                                    <div class="dashboard-head">
                                        <h3>Wedding details</h3>
                                    </div>
                                </div>

                                <div class="card-shadow-body">
                                    <div class="wedding-detail-wrap row">
                                        <div class="wedding-details-popups col">
                                            <div class="wedding-details-items">
                                                <div class="wedding-color-theme purple">
                                                    &nbsp;
                                                </div>                                    
                                                <div>
                                                    <small>Color</small>
                                                    <div class="head">Purple</div>
                                                    <span class="count">9,489 couples</span>
                                                </div>

                                                
                                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fa fa-pencil"></i></button>
                                                <div class="dropdown-menu">
                                                    <div class="droplayer">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme black">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Black</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme blue">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Blue</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme blush">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Blush</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme brown">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Brown</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme burgundy">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Burgundy</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme champagne">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Champagne</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme glod">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Gold</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme gray">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Gray</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme green">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Green</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme ivory">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Ivory</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme orange">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Orange</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme pink">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Pink</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div class="wedding-color-theme red">
                                                                        &nbsp;
                                                                    </div>  
                                                                    <span>Red</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="wedding-details-popups col">
                                            <div class="wedding-details-items">
                                                <div class="question">
                                                    <i class="fa fa-question"></i>
                                                </div>                                
                                                <div>
                                                    <small>Season</small>
                                                    <div class="head">...</div>
                                                    <span class="count">&nbsp;</span>
                                                </div>

                                                
                                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fa fa-pencil"></i></button>
                                                <div class="dropdown-menu season-icons">
                                                    <div class="p-3">
                                                        <ul class="list-unstyled ">
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/winter_icon.svg')); ?>" alt=""></div>
                                                                    <span>Winter</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/spring_icon.svg')); ?>" alt=""></div>
                                                                    <span>Spring</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/summer_icon.svg')); ?>" alt=""></div>
                                                                    <span>Summer</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/fall_icon.svg')); ?>" alt=""></div>
                                                                    <span>Fall</span>
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="wedding-details-popups col">
                                            <div class="wedding-details-items">
                                                <div class="question">
                                                    <i class="fa fa-question"></i>
                                                </div>                                
                                                <div>
                                                    <small>Style</small>
                                                    <div class="head">...</div>
                                                    <span class="count">&nbsp;</span>
                                                </div>

                                                
                                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fa fa-pencil"></i></button>
                                                <div class="dropdown-menu style-icons">
                                                    <div class="p-3">
                                                        <ul class="list-unstyled ">
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/beach_icon.svg')); ?>" alt=""></div>
                                                                    <span>Beach</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/bohemian_icon.svg')); ?>" alt=""></div>
                                                                    <span>Bohemian</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/casual_icon.svg')); ?>" alt=""></div>
                                                                    <span>Casual</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/classic_icon.svg')); ?>" alt=""></div>
                                                                    <span>Classic</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/elegant_icon.svg')); ?>" alt=""></div>
                                                                    <span>Elegant</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/formal_icon.svg')); ?>" alt=""></div>
                                                                    <span>Formal</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/glam_icon.svg')); ?>" alt=""></div>
                                                                    <span>Glam</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/industrial_icon.svg')); ?>" alt=""></div>
                                                                    <span>Industrial</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/modern_icon.svg')); ?>" alt=""></div>
                                                                    <span>Modern</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/romantic_icon.svg')); ?>" alt=""></div>
                                                                    <span>Romantic</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/rustic_icon.svg')); ?>" alt=""></div>
                                                                    <span>Rustic</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:">
                                                                    <div><img src="<?php echo e(asset('site_assets/img/dashboard/vintage_icon.svg')); ?>" alt=""></div>
                                                                    <span>Vintage</span>
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="wedding-details-popups col">
                                            <div class="wedding-details-items">
                                                <div class="question">
                                                    <i class="fa fa-question"></i>
                                                </div>                                
                                                <div>
                                                    <small>Dress</small>
                                                    <div class="head">...</div>
                                                    <span class="count">&nbsp;</span>
                                                </div>

                                                
                                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fa fa-pencil"></i></button>
                                                <div class="dropdown-menu season-icons dropdown-menu-right">
                                                    <div class="p-3">
                                                        <p><strong>Designer's Name</strong></p>
                                                        <input type="text" class="form-control" placeholder="Find your designer">
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="wedding-details-popups col">
                                            <div class="wedding-details-items">
                                                <div class="question">
                                                    <i class="fa fa-question"></i>
                                                </div>                                
                                                <div>
                                                    <small>Honeymoon</small>
                                                    <div class="head">...</div>
                                                    <span class="count">&nbsp;</span>
                                                </div>

                                                
                                                <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fa fa-pencil"></i></button>
                                                <div class="dropdown-menu season-icons dropdown-menu-right">
                                                    <div class="p-3">
                                                        <p><strong>Honeymoon Destination</strong></p>
                                                        <input type="text" class="form-control" placeholder="Enter a Honeymoon destination">
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Wedding details -->

                            <div class="card-shadow"></div>
                        </div>

                        <div class="col-xl-4">
                            <!-- Upcoming tasks -->
                            <div class="card-shadow">
                                <div class="card-shadow-header">
                                    <div class="dashboard-head">
                                        <h3>
                                            <span>0 of 80 completed</span>
                                            Upcoming tasks
                                        </h3>
                                        <div class="links">
                                            <a href="couple-dashboard-todo-list.html">View all tasks <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-shadow-body p-0">
                                    <div class="upcoming-task">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="custom-control custom-checkbox form-dark">
                                                        <input type="checkbox" class="custom-control-input option-input" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3">
                                                            <span class="label-text"> Plan your engagement party</span>
                                                            <small>Engagement</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="custom-control custom-checkbox form-dark">
                                                        <input type="checkbox" class="custom-control-input option-input" id="customCheck4">
                                                        <label class="custom-control-label" for="customCheck4">
                                                            <span class="label-text"> Plan your engagement party</span>
                                                            <small>Engagement</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>                                
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Upcoming tasks -->

                            <!-- Guest List -->
                            <div class="card-shadow">
                                <div class="card-shadow-header">
                                    <div class="dashboard-head">
                                        <h3>
                                            Guest List
                                        </h3>
                                        <div class="links">
                                            <a href="couple-dashboard-guest-manager.html">See Guest List <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-shadow-body">
                                    <div class="empty-guest-list">
                                        <i class="weddingdir_guest_member"></i>
                                        <p>You haven't added any guests yet</p>
                                        <a class="btn btn-outline-default btn-rounded" href="couple-dashboard-guest-manager.html">Add guest</a>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Guest List -->

                            <!-- Budget -->
                            <div class="card-shadow">
                                <div class="card-shadow-header">
                                    <div class="dashboard-head">
                                        <h3>
                                            Budget
                                        </h3>
                                        <div class="links">
                                            <a href="couple-dashboard-budget.html">View Budget <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-shadow-body">
                                    <div class="budget-estimation">
                                        <div class="d-flex w-100">
                                            <div class="etimated-cost">
                                                <div class="icon"><i class="weddingdir_saving_money"></i></div> 
                                                <p class="cost-price">$18000</p>
                                                <div>Estimated cost</div>
                                            </div>
                                            <div class="etimated-cost">
                                                <div class="icon"><i class="weddingdir_money_stack"></i></div>
                                                <p class="cost-price final">$0</p>
                                                <div>Final cost</div>
                                            </div>
                                        </div>
                                        
                                        <a class="btn btn-outline-default btn-rounded" href="couple-dashboard-budget.html">Manage expenses</a>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Budget -->
                        </div>
                    </div>
                    


                    
                </div>
            </div>
          <!-- ======= Footer ======= -->
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
      Developed by <a href="http://www.towais.com">TOWAIS</a>
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
                                <input type="text" class="form-control" data-toggle="datepicker"  placeholder="Choose Date" />
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

    <!-- Modal -->
    <div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="login_form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h2 class="m-0" >Sign In</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    
                    <ul class="nav nav-pills mb-3 horizontal-tab-second justify-content-center nav-fill pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active show" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Log In</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-register-tab" data-toggle="pill" href="#pills-hr-vendor" role="tab" aria-controls="pills-hr-vendor" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="p-3 px-4 pt-0">
                        
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <form>
                                    <div class="form-group">
                                        <div class="alert alert-primary" role="alert">
                                            Username: <strong>vendor</strong> / <strong>couple</strong><br>
                                            Password: <strong>test</strong>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username/Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox form-dark">
                                            <input type="checkbox" class="custom-control-input" id="customCheck112">
                                            <label class="custom-control-label" for="customCheck112">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-rounded mt-3">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-hr-vendor" role="tabpanel" aria-labelledby="pills-register-tab">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="dgest" name="dgest" class="custom-control-input">
                                                    <label class="custom-control-label" for="dgest">Couple</label>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="owner" name="dgest" class="custom-control-input">
                                                    <label class="custom-control-label" for="owner">Vendor</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" id="username2" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password" id="password1">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text" name="first_name" id="first-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text" name="last_name" id="last-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email Address" name="email" id="email" value="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-rounded mt-3">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- All The JS Files
      ================================================== -->
    <script src="<?php echo e(asset('site_assets/assets/library/jquery/jquery-min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/bootstrap/js/bootstrap-dropdownhover.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/owlcarousel/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/select2/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/jquery-ui/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/jquery-ui/js/jquery.ui.touch-punch.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>  
    <script src="<?php echo e(asset('site_assets/assets/library/isotope-layout/isotope.pkgd.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('site_assets/assets/library/datepicker/js/datepicker.js')); ?>"></script> 
    <script src="<?php echo e(asset('site_assets/assets/library/countdown/js/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/perfect-scrollbars/perfect-scrollbar.min.js')); ?>"></script>    
    <script src="<?php echo e(asset('site_assets/assets/js/dashboard.js')); ?>"></script>

</body>

<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:15 GMT -->
</html><?php /**PATH D:\xampp\htdocs\laravel\wedding\resources\views/couple_dashboard.blade.php ENDPATH**/ ?>