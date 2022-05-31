<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COORSA MEXICO</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--Slider-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/style_Slider.css">

    <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

   <!--JQUERY-->
   <style>
   .scrolled{
     background-color: #343434;
     transition: 0.3s;
   }
   </style>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script>
     //Script para  el scroll
     $(window).scroll(function(){
     if($("#header").offset().top > 100)
     {
       $("#header").addClass("scrolled");
     }
     else
     {
      $("#header").removeClass("scrolled");
     }
     });
  </script>

  <!--ORGANIGRAMA -->
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
  <script src="https://www.amcharts.com/lib/4/maps.js"></script>
  <script src="https://www.amcharts.com/lib/4/geodata/usaLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/plugins/forceDirected.js"></script>
  <script src="assets/js/chartOrganigrama.js"></script>
    
</head>
<header class="header" id="header">
  <a href="index.php" class="logo">
    <img style="width:3rem; heigth:3rem;" src="./assets/img/PNG/Logo_Rosa_Coorsa.png" alt="">
  </a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn">
    <span class="navicon"></span>
  </label>
  <ul class="menu">
    <li><a href="index.php">Servicios</a></li>
    <li><a href="conocenos.php">Conócenos</a></li>
    <li><a href="#">Detrás de</a></li>
    <li  style="margin-left:40rem ;">
      <a href="#">Contacto</a>
    </li>
  </ul>
</header>