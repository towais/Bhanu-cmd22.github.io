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
header{
    background: url("<?php echo e(asset('site_assets/img/49.png')); ?>") top center no-repeat;
    width:90%;
    height:90vh;
    margin-top:4%;


}
.name{
    font-size:50px;
 
}
.text{
  margin-top:5%;
  white-space: pre-wrap;
  font-family: Butler;
  color: #272727;
  font-size: 28px;
    letter-spacing: 0px;
    font-weight: 400;
    font-style: normal;
    font-size: 31px;
    letter-spacing: 0em;
    line-height: 1.2em;
    text-transform: none;
}
.sqs-block-button-element{
  padding: 13px 26px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 600;
    letter-spacing: 1px;
    font-family: brandon-grotesque;
    font-size: 12px;
    font-weight: 400;
    font-style: normal;
    text-transform: uppercase;
    letter-spacing: .25em;
    color: #292929;
    background-color: #e0ddd7;
    border-color: #e0ddd7;
}
.images img{
  opacity: 1;
    left: 0px;
    top: -18.5156px;
    width: 240px;
    height: 187.031px;
    position: relative;
    cursor:pointer;
   
}
.images{
  display:flex;
  width:100%;
  height:auto;
}

.back{
  background:#e0ddd7;
  width:100%;
  height:auto;
 
}
.fill-form{
  padding-top:50px;
  font-family:'Butler';
  font-size: 30px;
  line-height: 1.2em;
}
.o-form{
  display:flex;
  margin-left:25%;
  
}
@media (max-width: 800px) {
  .o-form {
    flex-direction: column;
   
  }
}
@media (max-width: 800px) {
  .form-input {
    width: 100%;
   
  }
}
.form-input{
  border: 1px solid rgba(0,0,0,.12);
  width: 20%;
    padding: 1em;
    background: #fff;
    border: 1px solid rgba(0,0,0,.12);
    font-family: inherit;
    font-size: 15px;
    line-height: normal;
    outline: none;
    color: #272727;
    font: inherit;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    
    cursor: text;
}
.form-btn{
  font-family:"brandon-grotesque";
    letter-spacing: .2em;
    font-size: 12px;
    padding: 14.5px;
    color: #fff;
    background-color: #272727;
    border: 1px solid #272727 !important;
}
.contact-info{
 margin-left:-40%;
 width:200px;
text-align:justify;
}
.deep{
  background:#000000;
  width:100%;
  height:50px;
}
  

  </style>
</head>


<body>
   <center> <P class="name">SKEPSI STELLA</P></center>
<center><header>



</header></center>
<center><p class="text">Skepsi Stella is registered, full-service planning and design company for weddings and <br>events.  </p></center>
<br><br>
<center><a href="#oform" class="sqs-block-button-element--small sqs-block-button-element"  data-initialized="true">Schedule your consultation</a><center>
<br><br><br><br><br>
<div class="images">
<img src="<?php echo e(asset('site_assets/img/24.png')); ?>">
<img src="<?php echo e(asset('site_assets/img/49.png')); ?>">
<img src="<?php echo e(asset('site_assets/img/27.png')); ?>">
<img src="<?php echo e(asset('site_assets/img/28.png')); ?>">
<img src="<?php echo e(asset('site_assets/img/29.png')); ?>">
<img src="<?php echo e(asset('site_assets/img/30.png')); ?>">
<img src="<?php echo e(asset('site_assets/img/31.png')); ?>">
<img src="<?php echo e(asset('site_assets/img/32.png')); ?>">
</div>

<footer>
<div class="back">
<p class="fill-form">Fill the below from and out team will contact you within 24 hours</p>
<br>
<center><div class="o-form" id="oform">
<input class="form-input" name="fname" x-autocompletetype="given-name" type="text" spellcheck="false" placeholder="First Name" maxlength="30" data-title="First">
<input class="form-input" name="lname" x-autocompletetype="surname" type="text" spellcheck="false" placeholder="Last Name" maxlength="30" data-title="Last">
<input id="email-yui_3_17_2_1_1587396713179_36379-field" class="form-input" name="email" x-autocompletetype="email" type="text" spellcheck="false" placeholder="Email Address">&nbsp;&nbsp;
<button class="form-btn" type="submit" value="download here"><span class="newsletter-form-spinner sqs-spin light large"></span><span class="newsletter-form-button-label">SUBMIT NOW</span><span class="newsletter-form-button-icon"></span></button>
</div></center>
<br><br>
<p class="contact-info" style="font-weight:400">Contact us:</p>

<p class="contact-info" style="color:#959291;">Address:<br>
Chitkara University<br>
Rajpura, Punjab 140401<br>
India


</p>

<p class="contact-info" style="color:#959291;">Phone:+91-7082243914</p>

<p class="contact-info" style="color:#959291;">Email: skepsistella@gmail.com</p>


<br><br>
</div>
<div class="deep">

<p style="color:#ffffff; padding-top:15px;"> &copy; Copyright <span>Skepsi stella</span></strong>. All Rights Reserved | <span style="font-size:15px">Developed by TOWAIS<span></p>
</div>
</footer>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\wedding\resources\views/organizing.blade.php ENDPATH**/ ?>