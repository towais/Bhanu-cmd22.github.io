<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Skepsi stella - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('site_assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('site_assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">
  <link rel="stylesheet" href="<?php echo e(asset('site_assets/assets/css/demo-0187162dc4c97b542e83.css')); ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('site_assets/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('site_assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('site_assets/assets/css/style.css')); ?>" rel="stylesheet">

  <style>
*{
  padding:0;
  margin:0;
}
body{
 background-color:#f7f7f7;
 overflow-x: hidden;
}
#hero {
  width: 100%;
  height: 100vh;
  background: url("<?php echo e(asset('site_assets/img/hero-bg.jpg')); ?>") top center;
  background-size: cover;
  position: relative;
}


    .search:hover{
      transform: scale(1.3);
      transition: transform .5s ease;

    }
    .btn button{
      background:#e43c5c;
      padding:10px;
      border:none;
      color:#ffffff;
      border-radius:4px;

    }
    .ideas-heading h3{
      font-family: Merriweather,"Times New Roman",Times,serif;
    font-size: 34px;
    line-height: 40px;
    font-weight: 700;
    margin-top:70px;
    text-align: center;
    color:#000000;
    }
    .homeSection_text{
      font-size: 18px;
    line-height: 26px;
    color: #8c8c8c;
    }
    .ideas_line{
      content: "";
    border-bottom: 1px solid #dcdcdc;
    width: 100px;
    display: inline-block;
    margin-bottom: 25px;
    }
    
    .ideas{
      display:flex;
      flex-direction: row;
      align-items: center;
      margin-left: 15%;
      

    }
    @media (max-width: 1500px) {
  .ideas {
    
    margin-left: 0;
  }
}
    @media (max-width: 800px) {
  .ideas {
    flex-direction: column;
    margin-left: 0;
  }
}
    .ideas img{
      margin: 50px;
      border-radius: 50%;
    }
    .ideas p{
      margin-top: -30px;
      color:#000000;
    }
    img a:hover p{
      color:#e43c5c;
    }
    .advantages::before{
      content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 0;
    width: 59px;
    height: 39px;
    background: url(../images/olive_branch.png) no-repeat center;
    }
    .advantages{
      font-family: Merriweather,"Times New Roman",Times,serif;
    font-size: 34px;
    line-height: 40px;
    font-weight: 700;
    margin-top:70px;
    text-align: center;
    color:#000000;
    }
    
.advantages_img{
  display:flex;
  flex-direction:row;
}
.newsletter{
  background: url("<?php echo e(asset('site_assets/img/news.PNG')); ?>");
  width:100%;
}
.newsletter h3{
  font-family: Merriweather,"Times New Roman",Times,serif;
    font-size: 34px;
    line-height: 40px;
    font-weight: 700;
    margin-top:70px;
    text-align: center;
    color:#000000;
}
.form-inline-custom .input-group-btn > .btn{
border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.form-inline-custom .input-group-btn .btn {
    padding-top: 15px;
    padding-bottom: 15px;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

 .btn-rounded {
    color: #fff;
    background-color: #fed267;
    border-color: #151515;
    background-repeat: no-repeat;
    position: relative;
    transform: translateZ(0);
    border-radius: 4px;
}
.btn:not(.shadow-drop-darker) {
    box-shadow: none !important;
}
.btn {
    min-width: 144px;
    font-weight: 700;
    font-family: "Montserrat", sans-serif;
    padding: 15px 19px;
    font-size: 14px;
    line-height: 1.5;
    border-radius: 0;
    border-width: 2px;
    text-transform: uppercase;
    letter-spacing: .06em;
    transition: .3s ease-out;
    max-height: 54px;
}
 .linear-icon:before {
    background-image: linear-gradient(to right, #fed267 0%, #cf9b48 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
 .icon:before {
    position: relative;
    display: inline-block;
    font-weight: 400;
    font-style: normal;
    speak: none;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.linearicons-calendar-empty:before {
    content: "\ea85";
}
#read-more{
  width:100%;
  height:50px;
  background:#ededed;
  bottom: 0;
  text-align: center;
  padding-top:10px;
  color:#474749;
  font-weight: 700;
    font-family: "Montserrat", sans-serif;
    transition: background 1s;
    
}
.news{
  width: 90%; 
  margin-left:10%;
}
@media (max-width: 800px) {
   .news{
    width: 90%; 
    margin-left:-100px;
  }
}
#read-more-span{
  width:10%;
  height:50px;
  background: #000000;
}
#read-more:hover{
  background: #fed267;
  color:#ffffff;
 
  
}

  

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html" >Skepsi stella</a></h1>
    
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
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
              <li><a href="entairtainment" class="bi bi-list-check">Entertainment</a></li>
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

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Skepsi stella</strong></h3>
      <h1>Say Bonjour To Being Device-Full</h1>
      <h2>We would help you in every way to get along to your event.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->
<br><br>
  <main id="main">
   

    <center>
    <div class="row">
      <div class="col-lg-2 search">
        <svg viewBox="0 0 54 54" width="70" height="70" ><path d="M33.608 34.658a17.525 17.525 0 01-12.036 4.764c-9.712 0-17.586-7.874-17.586-17.586S11.86 4.25 21.572 4.25s17.586 7.874 17.586 17.586a17.52 17.52 0 01-4.5 11.75L50.44 49.458a.75.75 0 01-1.064 1.058l-15.768-15.86zm-12.036 3.264c8.884 0 16.086-7.202 16.086-16.086 0-8.884-7.202-16.086-16.086-16.086-8.884 0-16.086 7.202-16.086 16.086 0 8.884 7.202 16.086 16.086 16.086zm10.263-20.415a.75.75 0 01-1.39.562C29 14.5 25.51 12.19 21.572 12.19a.75.75 0 110-1.5c4.545 0 8.587 2.676 10.263 6.817z" fill-rule="nonzero"></path></svg>
        <p style="color:#000000;">Manage Your <br>wedding vender</p>
        

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2 search">
        <svg viewBox="0 0 54 54" width="70" height="70"><g fill-rule="nonzero"><path d="M12.742 26.156c-5.002-.305-8.967-4.414-8.967-9.442 0-5.012 3.94-9.111 8.92-9.439 3.593-.261 7.076 1.52 8.919 4.662a.75.75 0 01.064.142 9.337 9.337 0 011.225 4.635c0 4.945-3.834 9-8.719 9.423 4.526.252 8.389 3.411 9.447 7.797 1.062 3.863 1.86 6.761 2.396 8.696a752.288 752.288 0 00.758 2.718l.038.129c.048.074.15.196-.019.57a.746.746 0 01-.432.4c-.098.035-.995.034-1.345.032a9439.693 9439.693 0 00-6.835-.032l-4.583-.02-5.202-.023c-2.25-.011-3.975-.02-5.198-.03a333.348 333.348 0 01-1.977-.02l-.124-.003-.058-.004-.07-.009c-.038-.006-.038-.006-.13-.034-.206-.008-.206-.008-.468-.906l3.175-11.441c1.043-4.32 4.776-7.442 9.185-7.801zm8.004-12.594a15.477 15.477 0 01-10.288 3.902 15.525 15.525 0 01-5.181-.886l-.002.136c0 4.394 3.609 7.96 8.064 7.96s8.064-3.566 8.064-7.96c0-1.12-.235-2.185-.657-3.152zm-7.948-4.79a8.13 8.13 0 00-.991.134c-3.174.632-5.63 3.08-6.266 6.173 1.57.586 3.235.886 4.917.885 3.555 0 6.965-1.345 9.536-3.746a8.084 8.084 0 00-7.196-3.446zm5.346 20.094a8.885 8.885 0 00-4.553-1.245c-1.63 0-3.174.442-4.502 1.223l4.506 7.1 4.549-7.078zm1.221.873l-5.143 8.005a.75.75 0 01-1.264-.004l-5.094-8.027a8.72 8.72 0 00-2.855 4.62L2.086 44.865l1.133.01c1.223.008 2.946.018 5.195.029l5.202.023 4.583.02a9442.744 9442.744 0 016.924.032l-.542-1.95c-.535-1.934-1.334-4.834-2.402-8.72a8.672 8.672 0 00-2.814-4.57z"></path><path d="M40.806 26.143c7.006.397 12.566 6.14 12.566 13.171v6.221a.75.75 0 01-.75.75H27.441a.75.75 0 01-.75-.75v-6.22c0-7.032 5.56-12.775 12.566-13.172-4.918-.39-8.79-4.46-8.79-9.429 0-5.227 4.285-9.46 9.564-9.46 5.28 0 9.564 4.233 9.564 9.46 0 4.968-3.871 9.04-8.789 9.43zM28.191 44.785h23.681v-5.47c0-6.457-5.3-11.694-11.84-11.694-6.542 0-11.841 5.237-11.841 11.693v5.471zm11.84-20.111c4.456 0 8.064-3.566 8.064-7.96s-3.608-7.96-8.064-7.96c-4.455 0-8.063 3.566-8.063 7.96s3.608 7.96 8.063 7.96z"></path><path d="M49.018 16.243a.75.75 0 00.452-.788c-.52-4-3.56-7.225-7.556-8.02-3.993-.794-8.055 1.016-10.1 4.502a.75.75 0 00.112.905 15.464 15.464 0 0011.044 4.622 15.518 15.518 0 006.048-1.221zm-7.396-7.337c3.174.632 5.629 3.08 6.265 6.173-1.57.586-3.235.886-4.916.885-3.561 0-6.977-1.35-9.55-3.758 1.8-2.612 5.026-3.931 8.2-3.3z"></path></g></svg>
        
        <p style="color:#000000;">Manage Your <br>Guest List</p>
      
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2 search">
        <svg viewBox="0 0 54 54" width="70" height="70"><path d="M37.25 8.25h5.05c1.314 0 2.45 1.136 2.45 2.45v35.7c0 1.314-1.136 2.45-2.45 2.45H12.6c-1.314 0-2.45-1.136-2.45-2.45V10.7c0-1.314 1.136-2.45 2.45-2.45h5.05V5.5a.75.75 0 01.75-.75h3.602c.379-2.712 2.772-4.9 5.598-4.9s5.22 2.188 5.598 4.9H36.5a.75.75 0 01.75.75v2.75zm-19.8 1.5H12.6c-.486 0-.95.464-.95.95v35.7c0 .486.464.95.95.95h29.7c.486 0 .95-.464.95-.95V10.7c0-.486-.464-.95-.95-.95h-5.15v1.45a.75.75 0 01-.75.75H18.2a.75.75 0 01-.75-.75V9.75zm18.3-3.5H32.5a.75.75 0 01-.75-.75c0-2.223-1.9-4.15-4.15-4.15-2.25 0-4.15 1.927-4.15 4.15a.75.75 0 01-.75.75h-3.55V9a.747.747 0 01-.2.51v.94h16.7V9c0-.136.036-.264.1-.374V6.25zM19 24.7c-.3 0-.5-.2-.6-.4l-2-2.3c-.2-.3-.1-.8.3-1 .3-.2.8-.1 1 .3l1.3 1.5 3.6-3.9c.2-.3.7-.4 1-.2.3.2.4.7.2 1l-4 4.6c-.5.3-.6.4-.8.4zm8.8-1.05a.75.75 0 110-1.5h9.5a.75.75 0 110 1.5h-9.5zm0 16.6a.75.75 0 110-1.5h9.5a.75.75 0 110 1.5h-9.5zm0-8.7a.75.75 0 110-1.5h9.5a.75.75 0 110 1.5h-9.5zm-8.5 1.6a2.65 2.65 0 110-5.3 2.65 2.65 0 010 5.3zm0-1.5a1.15 1.15 0 100-2.3 1.15 1.15 0 000 2.3zm0 9.5a2.65 2.65 0 110-5.3 2.65 2.65 0 010 5.3zm0-1.5a1.15 1.15 0 100-2.3 1.15 1.15 0 000 2.3z" fill-rule="nonzero"></path></svg>
        
        <p style="color:#000000;">Stay on track with <br>Your checklist</p>
      
      </div><!-- /.col-lg-4 --> 
      <div class="col-lg-2 search">
        <svg viewBox="0 0 54 54" width="70" height="70"><path d="M43.93 5.25a4.82 4.82 0 014.82 4.82v33.86a4.82 4.82 0 01-4.82 4.82H10.07a4.82 4.82 0 01-4.82-4.82V10.07a4.82 4.82 0 014.82-4.82h33.86zM26.25 28.663H6.75V43.93a3.32 3.32 0 003.32 3.32h16.18V28.663zm21 0h-19.5V47.25h16.18a3.32 3.32 0 003.32-3.32V28.663zm-28.085 6.024l1.061 1.06-2.666 2.666 2.666 2.665-1.06 1.061-2.666-2.666-2.665 2.666-1.061-1.06 2.665-2.666-2.665-2.665 1.06-1.06 2.666 2.665 2.665-2.666zm23.357 5.259v1.5h-9.13v-1.5h9.13zm0-5.479v1.5h-9.13v-1.5h9.13zM26.25 6.75H10.07a3.32 3.32 0 00-3.32 3.32v17.093h19.5V6.75zm17.68 0H27.75v20.413h19.5V10.07a3.32 3.32 0 00-3.32-3.32zm-27.137 5.641v3.815h3.816v1.5h-3.816v3.816h-1.5v-3.816h-3.815v-1.5h3.815v-3.815h1.5zm25.729 3.816v1.5h-9.13v-1.5h9.13z" fill-rule="nonzero"></path></svg>
        
        <p style="color:#000000;">Manage Your <br>Budget</p>
      
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2 search">
        <svg viewBox="0 0 54 54" width="70" height="70" ><path d="M8.448 37.94c.34-1.043.63-1.954.864-2.705C4.03 31.892.85 26.74.85 21.1c0-10.046 9.957-18.05 22.25-18.05 12.25 0 22.25 8.07 22.25 18.05a.75.75 0 11-1.5 0c0-9.072-9.265-16.55-20.75-16.55-11.528 0-20.75 7.413-20.75 16.55 0 5.257 3.081 10.084 8.234 13.156a.75.75 0 01.334.862c-.26.85-.613 1.963-1.043 3.286l-.082.252a555.27 555.27 0 01-1.17 3.548 12.98 12.98 0 001.458-.338c1.386-.388 2.805-.872 6.284-2.11l.017-.006c.76-.271 1.133-.404 1.568-.557a.75.75 0 01.5 1.414c-.434.153-.807.286-1.565.556l-.017.006c-3.518 1.252-4.949 1.74-6.383 2.141-.947.265-1.658.411-2.169.43-.907.033-1.624-.414-1.328-1.377.56-1.676.94-2.828 1.379-4.172l.081-.25zm37.533 7.491c.51 1.685 1.265 4.025 1.62 5.004.246.636-.181 1.138-.767 1.226-.26.04-.578.014-.985-.06-.674-.124-1.619-.396-2.694-.767-2.125-.735-4.337-1.708-5.576-2.484H35.7c-9.09 0-16.45-5.901-16.45-13.35 0-7.383 7.402-13.35 16.45-13.35 9.09 0 16.45 5.901 16.45 13.35 0 4.096-2.334 7.921-6.169 10.431zm-2.336 3.985c.885.306 1.67.538 2.245.663a147.62 147.62 0 01-1.51-4.767.75.75 0 01.332-.854c3.701-2.24 5.938-5.748 5.938-9.458 0-6.539-6.625-11.85-14.95-11.85-8.282 0-14.95 5.376-14.95 11.85 0 6.539 6.625 11.85 14.95 11.85h2.1a.75.75 0 01.416.126c1.063.709 3.297 1.703 5.429 2.44z" fill-rule="nonzero"></path></svg>
        
        <p style="color:#000000;">Community of <br>Couples</p>
      
      </div><!-- /.col-lg-4 --> 
      <div class="col-lg-2 search">
        <svg viewBox="0 0 54 54" width="70" height="70"><path d="M1.85 20.1V12A5.018 5.018 0 016.9 6.95h41.3A5.018 5.018 0 0153.25 12V42.3a5.018 5.018 0 01-5.05 5.05H6.9a5.018 5.018 0 01-5.05-5.05V20.1zm1.5.85V42.3a3.518 3.518 0 003.55 3.55h41.3a3.518 3.518 0 003.55-3.55V20.95H3.35zm0-1.6h48.4V12a3.518 3.518 0 00-3.55-3.55H6.9A3.518 3.518 0 003.35 12v7.35zM14.9 32.145l-1.797 4.817c-.245.655-1.173.65-1.41-.01l-2.4-6.7a.75.75 0 011.413-.505l1.708 4.77 1.783-4.78c.243-.65 1.163-.65 1.406 0l1.797 4.818 1.797-4.817a.75.75 0 111.406.524l-2.5 6.7c-.243.65-1.163.65-1.406 0L14.9 32.145zm14.397 4.817L27.5 32.145l-1.797 4.817c-.245.655-1.173.65-1.41-.01l-2.4-6.7a.75.75 0 011.413-.505l1.708 4.77 1.783-4.78c.243-.65 1.163-.65 1.406 0L30 34.556l1.797-4.817a.75.75 0 111.406.524l-2.5 6.7c-.243.65-1.163.65-1.406 0zm12.7 0l-1.783-4.778-1.708 4.769c-.236.658-1.164.664-1.409.01l-2.5-6.7a.75.75 0 111.406-.525l1.783 4.778 1.708-4.769c.236-.658 1.164-.664 1.409-.01l1.797 4.818 1.797-4.817a.75.75 0 111.406.524l-2.5 6.7c-.243.65-1.163.65-1.406 0zM46.2 14.9a1 1 0 110-2 1 1 0 010 2zm-3.6 0a1 1 0 110-2 1 1 0 010 2zm-3.6 0a1 1 0 110-2 1 1 0 010 2z" fill-rule="nonzero"></path></svg>
        
        <p style="color:#000000;">Create your free <br>Wedding website</p>
      
      </div><!-- /.col-lg-4 -->
      </div>

<div class="ideas-heading">
      <h3>Ideas and tips</h3>
      <p class="homeSection__text mb20">Get inspired with the latest trends and advice from our wedding experts</p>
    </div>

    <div class="ideas_line"></div>


    <div class="ideas">
     
      
      <div class="img1">  
        
        <a href="#">
          
              <img  src="<?php echo e(asset('site_assets/img/1.png')); ?>" width="130px" height="130px">
      
          <center><p class="homeArticles__text">Before the Event</p></center>
        </a>
      </div>
          <div class="2">
            <a href="#">
              <img  src="<?php echo e(asset('site_assets/img/2.png')); ?>" width="130px" height="130px">
          <center><p class="homeArticles__text">The Wedding Ceremony</p></center>
        </a>
          </div>
          <div class="3">
            <a href="#">
              <img  src="<?php echo e(asset('site_assets/img/3.png')); ?>" width="130px" height="130px">
         <center><p class="homeArticles__text">The Event Banquet</p></center>
        </a>
          </div>
          <div class="4">
            <a href="#">
              <img  src="<?php echo e(asset('site_assets/img/4.png')); ?>" width="130px" height="130px">
          <center><p class="homeArticles__text">The Services for your Events</p></center>
        </a>
          </div>
          <div class="5">
            <a href="#">
              <img src="<?php echo e(asset('site_assets/img/5.png')); ?>" width="130px" height="130px">
          <center><p class="homeArticles__text">The Fashionable Event</p></center>
        </a>
          </div>
          <div class="6">
            <a href="#">
              <img  src="<?php echo e(asset('site_assets/img/6.png')); ?>" width="130px" height="130px">
          <center><p class="homeArticles__text">Health and Beauty</p></center>
        </a>
          </div>
        
</div>


<hr>
<div>
  <img src="<?php echo e(asset('site_assets/img/dimond.png')); ?>" width="150px" height="150px">
  <h3 class="advantages" style="margin-top:-20px;">Our Advantages</h3>
</div>
<div>
</center>

  <div class="row">
    <!-- Icon Box-->
    
    <div class="col-lg-3">
    <img src="<?php echo e(asset('site_assets/img/picture1.PNG')); ?>" width="100%" height="auto">
  </div>
  <div class="col-lg-3">
    <img src="<?php echo e(asset('site_assets/img/picture2.PNG')); ?>" width="100%" height="auto">
  </div>
  <div class="col-lg-3">
    <img src="<?php echo e(asset('site_assets/img/picture3.PNG')); ?>" width="100%" height="auto">
  </div>
  <div class="col-lg-3">
    <img src="<?php echo e(asset('site_assets/img/picture4.PNG')); ?>" width="100%" height="auto">
  </div>

</div>









<section class="section-80 section-lg-0 bg-shark">
  <div class="row no-gutters justify-content-sm-center">
    <div class="col-sm-10 col-md-8 col-lg-12 col-xl-6 inset-left-15 inset-right-15 inset-lg-left-0 inset-lg-right-0">
      <!-- Thumbnail Modern--><a class="thumbnail-modern text-left" href="sale-single.html">
        <figure><img width="960" height="340" src="<?php echo e(asset('site_assets/img/20.png')); ?>" alt="gift-cards-11"></figure>
        <div class="figcaption thumbnail-modern-figcaption-top">
          <!-- <h4 class="text-spacing-40">Wedding Photography</h4>
          <p class="offset-top-5">Capture your best wedding moments</p> -->
        </div></a>
      <div class="row no-gutters justify-content-sm-center offset-top-60 offset-lg-top-0">
        <div class="col-md-6 inset-md-right-15 inset-lg-right-0">
          <!-- Thumbnail Modern--><a class="thumbnail-modern text-left" href="sale-single.html">
            <figure><img width="480" height="340" src="<?php echo e(asset('site_assets/img/17.png')); ?>" alt="gift-cards-13" style="margin-top:-15px"></figure>
            <div class="figcaption thumbnail-modern-figcaption-top">
              <!-- <h4 class="text-spacing-40">Wedding Shoes</h4>
              <p class="offset-top-5">A wide range of perfect wedding shoes</p> -->
            </div></a>
        </div>
        <div class="col-md-6 offset-top-60 offset-md-top-0 inset-md-right-15 inset-lg-right-0">
          <!-- Thumbnail Modern--><a class="thumbnail-modern text-left" href="sale-single.html">
            <figure><img width="480" height="340" src="<?php echo e(asset('site_assets/img/13.png')); ?>" alt="gift-cards-14" style="margin-top:-15px"></figure>
            <div class="figcaption thumbnail-modern-figcaption-bottom">
              <!-- <h4 class="text-spacing-40">Wedding Bouquets</h4>
              <p class="offset-top-5">Beautiful bouquets for your #1 event</p> -->
            </div></a>
        </div>
      </div>
    </div>
    <div class="col-sm-10 col-md-8 col-lg-12 col-xl-6 offset-top-60 offset-lg-top-0 inset-left-15 inset-right-15 inset-lg-left-0 inset-lg-right-0">
      <!-- Thumbnail Modern--><a class="thumbnail-modern thumbnail-modern-lg text-left" href="sale-single.html">
        <figure><img width="960" height="680" src="<?php echo e(asset('site_assets/img/10.png')); ?>" alt="gift-cards-12"></figure>
        <div class="figcaption thumbnail-modern-figcaption-top">
          <!-- <h1 class="text-spacing-40 text-big-64">Wedding Dresses</h1>
          <p class="h5-variant-2 offset-top-5 offset-lg-top-15">Choose the dress of your dream on our website</p> -->
        </div></a>
    </div>
  </div>
</section>









<div class="newsletter">
  <section class="section-80 section-md-120 section-overlay section-height-800 breadcrumb-modern parallax-container context-light bg-gray-darkest d-lg-block" data-parallax-img="<?php echo e(asset('site_assets/images/background-09-1920-900.jpg')); ?>"><div class="material-parallax parallax"><img src="<?php echo e(asset('site_assets/images/background-09-1920-900.jpg')); ?>" alt="" style="display: block; transform: translate3d(-50%, 195px, 0px);"></div>
  <div class="parallax-content">
    <div class="container-wide container-wide-custom section-40">
      <div class="row justify-content-sm-center">
        <div class="col-sm-11 col-md-9 col-lg-7 col-xl-5">
          <div class="offset-top-20">
            <h3 class="title-image">Newsletter</h3>
          </div>
          <p class="offset-top-30 text-center">Sign up to our newsletter and be the first to know about the latest news and<br>wedding planning tips.</p>
          <div class="offset-top-20">
            <!-- RD Mailform-->
            <form class="main-form rd-mailform form-inline-custom text-left" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
              <div class="form-group form-group-outside"><br>
                <div class="input-group">
                  <input class="form-control form-control-has-validation form-control-last-child" id="forms-subscribe-email" type="email" name="email" data-constraints="@Email  @Required"><span class="form-validation"></span><img src="<?php echo e(asset('site_assets/img/button.PNG')); ?>">
                </div>
                <div class="input-group-btn">
                  <!-- <button class="btn btn-width-165 btn-rounded" type="submit">Subscribe</button> -->
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- RD Video-->
</section>


<center>
<div>
  <img src="<?php echo e(asset('site_assets/img/dimond.png')); ?>" width="150px" height="150px">
  <h3 class="advantages" style="margin-top:-20px;">Latest News</h3>
</div>
</center>




<div class="row center">
  <div class="col-lg-3">
  <div class="card news"  style="width: 90%; margin-left:10%;">
    <img src="<?php echo e(asset('site_assets/img/10.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text"><span class="linear-icon icon icon-normal icon-sm mdi bi bi-calendar-event" style="font-style: italic"></span> &nbsp;&nbsp;2 days to ago</p>
     <p style="color:#000000;line-height: 28px;font-size: 18.5px; font-family:Garamond, serif;
     font-weight: 700;"> Why Hire a Professional Wedding Planner: 7 Useful Tips</p>
     <p style="font-family: PT Sans, Helvetica, Arial, sans-serif;
     font-size: 1rem;
     font-weight: 400;
     line-height: 1.5;
     color: #7d7d7d;">You might be wondering??? Why do I even need a Wedding Planner? What role does a Wedding...</p>
     <br><br><br>
     <a href="#"><p id="read-more">READ MORE <span id="read-more-span"></span></p></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3">
    <div class="card"  style="width: 90%; margin-left:10%;">
      <img src="<?php echo e(asset('site_assets/img/10.png')); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><span class="linear-icon icon icon-normal icon-sm mdi bi bi-calendar-event" style="font-style: italic"></span> &nbsp;&nbsp;2 days to ago</p>
       <p style="color:#000000;line-height: 28px;font-size: 18.5px; font-family:Garamond, serif;
       font-weight: 700;"> Why Hire a Professional Wedding Planner: 7 Useful Tips</p>
       <p style="font-family: PT Sans, Helvetica, Arial, sans-serif;
       font-size: 1rem;
       font-weight: 400;
       line-height: 1.5;
       color: #7d7d7d;">You might be wondering??? Why do I even need a Wedding Planner? What role does a Wedding...</p>
       <br><br><br>
       <a href="#"><p id="read-more">READ MORE <span id="read-more-span"></span></p></a>
      </div>
    </div>
    </div>
    <div class="col-lg-3">
      <div class="card"  style="width: 90%; margin-left:10%;">
        <img src="<?php echo e(asset('site_assets/img/10.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"><span class="linear-icon icon icon-normal icon-sm mdi bi bi-calendar-event" style="font-style: italic"></span> &nbsp;&nbsp;2 days to ago</p>
         <p style="color:#000000;line-height: 28px;font-size: 18.5px; font-family:Garamond, serif;
         font-weight: 700;"> Why Hire a Professional Wedding Planner: 7 Useful Tips</p>
         <p style="font-family: PT Sans, Helvetica, Arial, sans-serif;
         font-size: 1rem;
         font-weight: 400;
         line-height: 1.5;
         color: #7d7d7d;">You might be wondering??? Why do I even need a Wedding Planner? What role does a Wedding...</p>
         <br><br><br>
         <a href="#"><p id="read-more">READ MORE <span id="read-more-span"></span></p></a>
        </div>
      </div>
      </div>
      <div class="col-lg-3">
        <div class="card"  style="width: 90%; margin-left:10%;">
          <img src="<?php echo e(asset('site_assets/img/10.png')); ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"><span class="linear-icon icon icon-normal icon-sm mdi bi bi-calendar-event" style="font-style: italic"></span> &nbsp;&nbsp;2 days to ago</p>
           <p style="color:#000000;line-height: 28px;font-size: 18.5px; font-family:Garamond, serif;
           font-weight: 700;"> Why Hire a Professional Wedding Planner: 7 Useful Tips</p>
           <p style="font-family: PT Sans, Helvetica, Arial, sans-serif;
           font-size: 1rem;
           font-weight: 400;
           line-height: 1.5;
           color: #7d7d7d;">You might be wondering??? Why do I even need a Wedding Planner? What role does a Wedding...</p>
           <br><br><br>
           <a href="#"><p id="read-more">READ MORE <span id="read-more-span"></span></p></a>
          </div>
        </div>
        </div>
      
</div>

<br><br><br><br>




<div class="map-container img-box">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3437.1749715517644!2d76.65758911545888!3d30.51609110309162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc32344a6e2d7%3A0x81b346dee91799ca!2sChitkara%20University!5e0!3m2!1sen!2sin!4v1622530951044!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>










<br>
<!-- <div class="btn">
  <button>Start Planning your wedding</button>
</div> -->



 

   </main>
<br><br><br>
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












  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('site_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('site_assets/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('site_assets/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('site_assets/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('site_assets/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('site_assets/assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH D:\xampp\htdocs\laravel\wedding\resources\views/first.blade.php ENDPATH**/ ?>