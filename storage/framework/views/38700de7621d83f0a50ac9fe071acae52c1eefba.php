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
    
<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard-budget.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:16 GMT -->
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











    	
      .apexcharts-legend {	
        display: flex;	
        overflow: auto;	
        padding: 0 10px;	
      }	
      .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {	
        flex-wrap: wrap	
      }	
      .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
        flex-direction: column;	
        bottom: 0;	
      }	
      .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
        justify-content: flex-start;	
      }	
      .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {	
        justify-content: center;  	
      }	
      .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {	
        justify-content: flex-end;	
      }	
      .apexcharts-legend-series {	
        cursor: pointer;	
        line-height: normal;	
      }	
      .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{	
        display: flex;	
        align-items: center;	
      }	
      .apexcharts-legend-text {	
        position: relative;	
        font-size: 14px;	
      }	
      .apexcharts-legend-text *, .apexcharts-legend-marker * {	
        pointer-events: none;	
      }	
      .apexcharts-legend-marker {	
        position: relative;	
        display: inline-block;	
        cursor: pointer;	
        margin-right: 3px;	
        border-style: solid;
      }	
      	
      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
        display: inline-block;	
      }	
      .apexcharts-legend-series.apexcharts-no-click {	
        cursor: auto;	
      }	
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
        display: none !important;	
      }	
      .apexcharts-inactive-legend {	
        opacity: 0.45;	
      }</style>

























        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!-- Basic Page Needs
        ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Specific Meta
        ================================================== -->
       
        
        <!-- Titles
        ================================================== -->
        <title>WeddingDir - Wedding Directory HTML Template</title>

        <!-- Favicons
        ================================================== -->
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
                    <!-- Page Heading -->
                    <div class="section-title">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <h2>My Budget</h2>
                            <button class="btn btn-default" id="add_new_budget_button"><i class="fa fa-plus"></i> New Category</button>
                        </div>
                    </div>
                    <!-- Page Heading -->

























                    





























                    <div class="card-shadow">
                        <div class="card-shadow-body">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <div id="donut"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="budget-estimation">
                                        <div class="d-flex w-100">
                                            <div class="etimated-cost">
                                                <h3 class="mb-3">Expenses</h3>
                                                <div class="icon"><i class="weddingdir_saving_money"></i></div> 
                                                <p class="cost-price">$18000</p>
                                                <div>Estimated cost</div>
                                                <div class="mt-3">
                                                    <a class="btn btn-link-primary p-0" href="javascript:"><i class="fa fa-pencil"></i>  Edit Budget</a>
                                                </div>
                                            </div>
                                            <div class="etimated-cost border-left">
                                                <h3 class="mb-3">Budget</h3>
                                                <div class="icon"><i class="weddingdir_money_stack"></i></div>
                                                <p class="cost-price final">$0</p>
                                                <div>Final cost</div>
                                                <div class="mt-3">
                                                    Paid: <strong>$ 0</strong> Pending: <strong>$ 0</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Budget Start -->
                        <div class="col-12 col-lg-3">
                            <div class="nav flex-column nav-pills theme-tabbing-vertical budget-tab" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-venue-tab" data-toggle="pill" href="#v-pills-venue" role="tab"
                                aria-controls="v-pills-venue" aria-selected="true"><i class="weddingdir_location_heart"></i> Venue</a>
                                <a class="nav-link" id="v-pills-videographer-tab" data-toggle="pill" href="#v-pills-videographer" role="tab"
                                aria-controls="v-pills-videographer" aria-selected="true"><i class="weddingdir_videographer"></i> Videographer</a>
                                <a class="nav-link" id="v-pills-invitations-tab" data-toggle="pill" href="#v-pills-invitations" role="tab"
                                aria-controls="v-pills-invitations" aria-selected="true"><i class="weddingdir_heart_envelope"></i> Invitations</a>
                                <a class="nav-link" id="v-pills-favors-gifts-tab" data-toggle="pill" href="#v-pills-favors-gifts" role="tab"
                                aria-controls="v-pills-favors-gifts" aria-selected="true"><i class="weddingdir_love_gift"></i> Favors and Gifts</a>
                                <a class="nav-link" id="v-pills-cake-tab" data-toggle="pill" href="#v-pills-cake" role="tab"
                                aria-controls="v-pills-cake" aria-selected="true"><i class="weddingdir_cake_floor"></i> Cake</a>
                                <a class="nav-link" id="v-pills-dress-attire-tab" data-toggle="pill" href="#v-pills-dress-attire" role="tab"
                                aria-controls="v-pills-dress-attire" aria-selected="true"><i class="weddingdir_fashion"></i> Dress and Attire</a>
                                <a class="nav-link" id="v-pills-band-tab" data-toggle="pill" href="#v-pills-band" role="tab"
                                aria-controls="v-pills-band" aria-selected="true"><i class="weddingdir_guitar"></i> Band</a>
                                <a class="nav-link" id="v-pills-jewelry-tab" data-toggle="pill" href="#v-pills-jewelry" role="tab"
                                aria-controls="v-pills-jewelry" aria-selected="true"><i class="weddingdir_ring_double"></i> Jewelry</a>
                                <a class="nav-link" id="v-pills-rentals-tab" data-toggle="pill" href="#v-pills-rentals" role="tab"
                                aria-controls="v-pills-rentals" aria-selected="true"><i class="weddingdir_tent"></i> Rentals</a>
                                <a class="nav-link" id="v-pills-transportation-tab" data-toggle="pill" href="#v-pills-transportation" role="tab"
                                aria-controls="v-pills-transportation" aria-selected="true"><i class="weddingdir_bus"></i> Transportation</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-md-0">
                            <div class="tab-content budget-tab-content" id="v-pills-tabContent">

                                <!-- Venue -->
                                <div class="tab-pane fade show active" id="v-pills-venue" role="tabpanel" aria-labelledby="v-pills-venue-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_location_heart"></i></span> 
                                                    <span class="head-simple">Venue</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Venue -->

                                <!-- Videographer -->
                                <div class="tab-pane fade" id="v-pills-videographer" role="tabpanel" aria-labelledby="v-pills-videographer-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_videographer"></i></span> 
                                                    <span class="head-simple">Videographer</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Videographer -->

                                <!-- Invitations -->
                                <div class="tab-pane fade" id="v-pills-invitations" role="tabpanel" aria-labelledby="v-pills-invitations-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_heart_envelope"></i></span> 
                                                    <span class="head-simple">Invitations</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invitations -->

                                <!-- Favors and Gifts -->
                                <div class="tab-pane fade" id="v-pills-favors-gifts" role="tabpanel" aria-labelledby="v-pills-favors-gifts-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_love_gift"></i></span> 
                                                    <span class="head-simple">Favors and Gifts</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Favors and Gifts -->

                                <!-- Cake -->
                                <div class="tab-pane fade" id="v-pills-cake" role="tabpanel" aria-labelledby="v-pills-cake-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_cake_floor"></i></span> 
                                                    <span class="head-simple">Cake</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cake -->

                                <!-- Dress and Attire -->
                                <div class="tab-pane fade" id="v-pills-dress-attire" role="tabpanel" aria-labelledby="v-pills-dress-attire-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_fashion"></i></span> 
                                                    <span class="head-simple">Dress and Attire</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dress and Attire -->

                                <!-- Band -->
                                <div class="tab-pane fade" id="v-pills-band" role="tabpanel" aria-labelledby="v-pills-band-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_guitar"></i></span> 
                                                    <span class="head-simple">Band</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Band -->

                                <!-- Jewelry -->
                                <div class="tab-pane fade" id="v-pills-jewelry" role="tabpanel" aria-labelledby="v-pills-jewelry-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_ring_double"></i></span> 
                                                    <span class="head-simple">Jewelry</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Jewelry -->

                                <!-- Rentals -->
                                <div class="tab-pane fade" id="v-pills-rentals" role="tabpanel" aria-labelledby="v-pills-rentals-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_tent"></i></span> 
                                                    <span class="head-simple">Rentals</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Rentals -->

                                <!-- Transportation -->
                                <div class="tab-pane fade" id="v-pills-transportation" role="tabpanel" aria-labelledby="v-pills-transportation-tab">
                                    <div class="card-shadow">
                                        <div class="card-shadow-header p-0">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="budget-head-icon"> <i class="weddingdir_bus"></i></span> 
                                                    <span class="head-simple">Transportation</span> 
                                                </div>
                                                <div class="d-flex p-4 align-items-center justify-content-between ">
                                                    <div class="cost-details">
                                                        <span>Final Cost</span>
                                                        <div class="txt-success">$ 9,100</div>
                                                    </div>
                                                    <div class="cost-details">
                                                        <span>Estimated cost:</span>
                                                        <div>$ 8,464</div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="javascript:" class="action-links">Remove <i class="fa fa-trash"></i></a> 
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-shadow-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Expense</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Estimate</th>
                                                            <th scope="col">Paid</th>
                                                            <th scope="col">Pending</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ceremony Venue Fee</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                                                <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-center py-4 border-top">
                                                <button class="btn btn-outline-success btn-rounded"><i class="fa fa-plus"></i> Add New Budget</button>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Total Cost</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Estimate Total</th>
                                                            <th scope="col">Paid Total</th>
                                                            <th scope="col">Pending Total</th>
                                                            <th scope="col">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">$15,000</th>
                                                            <td>$5000</td>
                                                            <td>$3500</td>
                                                            <td>$3000</td>
                                                            <td>$500</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Transportation --> 
                
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

    <div id="add_new_budget_form" class="sliding-panel">
        <div class="card-shadow-header mb-0">
            <div class="dashboard-head">
                <h3>
                    Add New category
                </h3>
            </div>
        </div>
        <div class="card-shadow-body">
            
            <!-- <form>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="category" name="category" placeholder="Write Category Name">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <textarea class="form-control" id="notes" name="notes" rows="5" placeholder="Write Notes"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Item</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    
    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    
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

    <!-- Page Level Scripts -->
    <script src="<?php echo e(asset('site_assets/assets/library/apex-chart/apexcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/apex-chart/chart-data.js')); ?>"></script>
    <script src="<?php echo e(asset('site_assets/assets/library/slide-reveal/jquery.slidereveal.min.js')); ?>"></script>

</body>

<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard-budget.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:17 GMT -->
</html><?php /**PATH D:\xampp\htdocs\laravel\wedding\resources\views/couple_budget.blade.php ENDPATH**/ ?>