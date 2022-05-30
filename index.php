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
</head>

<body>
<?php include('template/cabecera.php') ?>
   <main>
     <!--Seccion de inicio-->
     <section class="section1">
         <div class="container-seccion1">
             <h1 class="container-seccion1__texto">Ideamos soluciones innovadoras de logística para tí y tu empresa.</h1>
         </div>

         <div class="section1__buttons">
             <img class="section1__buttons__img" src="assets/img/PNG/Logo_Blanco_Linkedin.png" alt="logo1">
             <img class="section1__buttons__img"  src="assets/img/PNG/Logo_Blanco_Facebok.png" alt="logo2">
         </div>

         <div class="section1__button">
            <img class="section1__button__img" src="assets/img/SVG/Flechas_abajo.svg" alt="boton_abajo">
         </div>
     </section>
     <!--Seccion de card ofertas-->
     <section class="section2">
        <div class="container-seccion2">
            <h4 class="container-seccion2__texto1">Conoce lo que tenemos para </h>
            <h3 class="container-seccion2__texto2">OFRECERTE</h3>
        </div>
     </section>


     <!--Seccion Carrusel -->
     <section class="section3">
     <div class="swiper mySwiper">
       <div class="swiper-wrapper">
         <div class="swiper-slide">
            <img src="assets/img/JPG/Servicio 1.jpg" />
         </div>
         <div class="swiper-slide">
            <img src="assets/img/JPG/Servicio 2.jpg"/>
         </div>
         <div class="swiper-slide">
            <img src="assets/img/JPG/Servicio 3.jpg" />
          </div>
        <div class="swiper-slide">
            <img src="assets/img/JPG/Servicio 4.jpg"/>
         </div>
       </div>
      <div class="swiper-scrollbar"></div>
      <div class="swiper-pagination"></div>
    </div>
     </section>
   </main>
<?php include('template/footer.php') ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/slider.js"></script>
</body>
</html>