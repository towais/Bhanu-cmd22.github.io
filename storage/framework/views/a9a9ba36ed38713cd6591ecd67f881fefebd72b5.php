<!DOCTYPE html>

<html lang="en">
  

<link href="<?php echo e(asset('site_assets/assets/css/style2.css')); ?>" rel="stylesheet">
  </style>
<head>
<style>
  *{
    padding:0px;
    margin:0px;
  }
body{
  background: url("<?php echo e(asset('site_assets/img/48.png')); ?>") top center no-repeat;
  background-size:cover;
  background-position:center;
  width: 100%;
  height: 100vh;
 overflow-y:hidden;
 
}
body:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
.front:hover{
  transform: rotate(360deg);
  background:#ffffff;
  color:#000000;
}
.front2:hover{
  transform: rotate(360deg);
  background:#ffffff;
  color:#000000;
}
.flex{
  display:flex;
}
a{
    font-weight:400;
    text-transform:uppercase;
    margin:0;
    padding:0;
    width:100%;
    height:100%;
    position:absolute;
    transform-style:preserve-3d;
    transform:translateZ(-25px);
    transition:transform 0.3s;
    cursor:pointer;
  }




</style>

</head>

<body>

<div class="flex">
<center><div class="flip">
  <a href="organizing">
    <div class="front">Reach Us</div>
    
  </a>
  <a href="first" style="margin-left:110%;">
    <div class="front2">Register here</div></center>
   
  </a>
 
</div>

</div>







</body>

</html>

<?php /**PATH D:\xampp\htdocs\laravel\wedding\resources\views/welcome.blade.php ENDPATH**/ ?>