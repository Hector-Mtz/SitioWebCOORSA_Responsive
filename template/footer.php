
<footer class="footer">
  <div class="footer__contacto">
    <h2>contacto</h2>
    <a class="footer_text" href="mailto:contacto@coorsamexico.com" style="text-decoration:none;">
      <p >contacto@coorsamexico.com</p>
    </a>
    <a  class="footer_text" href="tel:4423857827" class=""  style="text-decoration:none;">Tel:. 442-385-7827</a>
  </div>

  <div class="footer__redes">
     <div  style="float: left ;">
       <a  class="" href="https://www.linkedin.com/company/corsa-m%C3%A9xico">
         <img class="footer_img" src="./assets/img/PNG/Logo Linkedin Gris.png" alt="">
       </a>
     </div>

     <div style="float: left ;">
       <a href="https://www.facebook.com/coorsamexico">
         <img class="footer_img" src="./assets/img/PNG/Logo facebook gris.png" alt="">
       </a>
     </div>
  </div>

  <div class="footer-contenedor__img">
   <a  href="#seccion__inicio"> 
   <img class="footer__img" src="assets/img/PNG/circulo.png" alt="">
     <div class="secction2__flechas">
       <div class="chevron2"></div>
       <div class="chevron2"></div>
       <div class="chevron2"></div>
     </div>
   </a>
  </div>

  <div class="menu-whats">
     <a href="https://wa.me/5214423857827">
         <img widht="65px" height="65px" class="imgWhats" src="assets/img/PNG/Logo Whatsaap.png" alt="whatsapp">
      </a>
  </div>
</footer>
<!--BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!--JQUERY-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/slider.js"></script>

<!--FancyBox-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="./assets/js/fancybox.js"></script>

<!--Script Scroll-->
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

<script src="assets/js/contacto.js"></script>
<!--Slider detras de-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
<script src="assets/js/slider_detras.js"></script>

<!--Amcharts-->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="assets/js/mapaMx.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="assets/js/chartOrganigrama.js"></script>
  
