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
    
<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard-guest-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:16 GMT -->
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
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="section-title">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <h2>My Guest Manager</h2>
                            <button class="btn btn-default" id="add_new_guest_button"><i class="fa fa-plus"></i> Add New Guest</button>
                        </div>                        
                    </div>
                    <!-- Page Heading -->

                    <div class="card-shadow">
                        <div class="card-shadow-body">
                            <div class="couple-info p-0">
                                <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2">
                                    <div class="col">
                                        <div class="couple-status-item">
                                            <div class="counter">
                                                43
                                            </div>
                                            <div class="text">
                                                <strong>Guests</strong>
                                                <small>From Total</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="couple-status-item">
                                            <div class="counter">
                                                9
                                            </div>
                                            <div class="text">
                                                <strong>Accepted</strong>
                                                <small>From Total</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="couple-status-item">
                                            <div class="counter">
                                                32
                                            </div>
                                            <div class="text">
                                                <strong>Waiting</strong>
                                                <small>From Total</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="couple-status-item">
                                            <div class="counter">
                                                2
                                            </div>
                                            <div class="text">
                                                <strong>Declined</strong>
                                                <small>From Total</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-shadow">
                        <div class="card-shadow-body">
                            
                            <div class="d-flex align-items-center row">
                                <div class="col-md-8">
                                    <div class="d-md-flex align-items-center">                                        
                                        <div class="custom-control custom-checkbox form-dark mr-3">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"><small>Select all</small></label>
                                        </div>
                                        <div class="mt-4 mt-md-0">
                                            <a href="javascript:" class="btn btn-outline-white mr-3 btn-sm">Excel</a>
                                            <a href="javascript:" class="btn btn-outline-white mr-3 btn-sm">Print</a>
                                            <a href="javascript:" class="btn btn-outline-white mr-3 btn-sm">PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-2 ml-auto">
                                    <div class="search-guest-list">
                                        <i class="fa fa-search"></i>
                                        <input type="text" class="form-control form-dark form-control-sm" placeholder="Search list">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Guest Name</th>
                                        <th scope="col">Group</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Email ID</th>
                                        <th scope="col">Invitation</th>
                                        <th scope="col" class="text-nowrap">No. of Guest</th>
                                        <th scope="col">Invitation Status</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Commnet</th>
                                        <th scope="col">Action</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-right pr-0 pl-4">
                                            <div class="custom-control custom-checkbox form-dark">
                                                <input type="checkbox" class="custom-control-input" id="1">
                                                <label class="custom-control-label pl-0" for="1">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">Hitesh Mahavar</td>
                                        <td class="text-nowrap">Groom Friend</td>
                                        <td class="text-nowrap">+81 258 852 6699</td>
                                        <td>    
                                            <span title="wporganicthemes@gmail.com" class="text-truncate table-truncate d-inline-block">wporganicthemes@gmail.com</span>
                                        </td>
                                        
                                        <td>
                                            <div class="custom-control custom-radio custom-control-inline form-dark">
                                                <input type="radio" id="customRadioInline11" name="customRadioInline11" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline11">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <select class="theme-combo select_bordered" name="state" style="width: 100%;">
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Cancellation">Cancellation</option>
                                            </select>
                                        </td>
                                        <td><span title="Morningview Lane Artlan" class="text-truncate table-truncate d-inline-block">Morningview Lane Artlan..</span></td>
                                        <td><span title="Excepteur sint occaecat cupidatat non proident sunt" class="text-truncate table-truncate d-inline-block">Excepteur sint occaecat cupidatat non proident sunt</span></td>
                                        <td class="text-nowrap"><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                            <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right pr-0 pl-4">
                                            <div class="custom-control custom-checkbox form-dark">
                                                <input type="checkbox" class="custom-control-input" id="3">
                                                <label class="custom-control-label pl-0" for="3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">Bomika Mahavar</td>
                                        <td class="text-nowrap">Groom Friend</td>
                                        <td class="text-nowrap">+81 258 852 6699</td>
                                        <td>    
                                            <span title="wporganicthemes@gmail.com" class="text-truncate table-truncate d-inline-block">wporganicthemes@gmail.com</span>
                                        </td>
                                        
                                        <td>
                                            <div class="custom-control custom-radio custom-control-inline form-dark">
                                                <input type="radio" id="customRadioInline3" name="customRadioInline3" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <select class="theme-combo select_bordered" name="state" style="width: 100%;">
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Cancellation">Cancellation</option>
                                            </select>
                                        </td>
                                        <td><span title="Morningview Lane Artlan" class="text-truncate table-truncate d-inline-block">Morningview Lane Artlan..</span></td>
                                        <td><span title="Excepteur sint occaecat cupidatat non proident sunt" class="text-truncate table-truncate d-inline-block">Excepteur sint occaecat cupidatat non proident sunt</span></td>
                                        <td><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                            <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right pr-0 pl-4">
                                            <div class="custom-control custom-checkbox form-dark">
                                                <input type="checkbox" class="custom-control-input" id="2">
                                                <label class="custom-control-label pl-0" for="2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">Somesh Mahavar</td>
                                        <td class="text-nowrap">Groom Friend</td>
                                        <td class="text-nowrap">+81 258 852 6699</td>
                                        <td>    
                                            <span title="wporganicthemes@gmail.com" class="text-truncate table-truncate d-inline-block">wporganicthemes@gmail.com</span>
                                        </td>
                                        
                                        <td>
                                            <div class="custom-control custom-radio custom-control-inline form-dark">
                                                <input type="radio" id="customRadioInline12" name="customRadioInline12" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline12">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>
                                            <select class="theme-combo select_bordered" name="state" style="width: 100%;">
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Cancellation">Cancellation</option>
                                            </select>
                                        </td>
                                        <td><span title="Morningview Lane Artlan" class="text-truncate table-truncate d-inline-block">Morningview Lane Artlan..</span></td>
                                        <td><span title="Excepteur sint occaecat cupidatat non proident sunt" class="text-truncate table-truncate d-inline-block">Excepteur sint occaecat cupidatat non proident sunt</span></td>
                                        <td><a href="javascript:" class="action-links edit"><i class="fa fa-pencil"></i></a> 
                                            <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="theme-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
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

    <div id="add_new_guest_form" class="sliding-panel">
        <div class="card-shadow-header mb-0">
            <div class="dashboard-head">
                <h3>
                    Add Guest
                </h3>
            </div>
        </div>
        <div class="card-shadow-body">
            
            <form>
                <div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                    </div>                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="Group_name" name="Group_name" placeholder="Group Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="Email_ID" name="Email_ID" placeholder="Email ID">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="guest_count" name="guest_count" placeholder="No. of Guest">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="Commnet" id="Commnet" rows="4" placeholder="Commnet"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add New Guest</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
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
    <script src="<?php echo e(asset('site_assets/assets/library/slide-reveal/jquery.slidereveal.min.js')); ?>"></script>
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/couple-dashboard-guest-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 11:59:16 GMT -->
</html><?php /**PATH D:\xampp\htdocs\laravel\wedding\resources\views/couple-guest.blade.php ENDPATH**/ ?>