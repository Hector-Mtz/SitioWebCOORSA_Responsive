<body>
<?php include('template/cabecera2.php') ?>


<section class="section1-contacto" id="seccion__inicio">

</section>

<section class="section2-contacto">
    <div class="section2-contacto__contenedor">
      <h1 class="section2-contacto__contenedor_text1">UBÍCANOS</h1>
      <br>
      <h2 class="section2-contacto__contenedor_text2">y ponte en contacto.</h2>
    </div>
   <img class="section2-contacto__img" src="./assets/img/PNG/MAPA QRO.png" alt="">
   <div class="absolute-center" data-container="body">
      <a
         id="mapPopover" class="animate-ping circle-red position-absolute"
        ></a>
      <img src="assets/img/PNG/LOGO COORSA MAPA.PNG" alt="icon_map" width="100px" height="106px">
   </div>
   <h1 class="section2-contacto__text3">Querétaro</h1>
</section>

<section class="section3-contacto">
  <div class="section3-contacto__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2658.181825218476!2d-100.33310321205919!3d20.658612648414323!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1654105198439!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>


<section id="section4-contacto" class="section4-contacto">
    <div class="section4-contacto__texts">
        <h1 class="section4-contacto__text1">
          CONTACTO
        </h1> 
         <h2 class="section4-contacto__text2">
          Estamos para ayudarte
         </h2>
    </div>
          <form class="form-contacto" method="post" id="formContacto" novalidate class="col rounded-field">
             <div class="form-row mb-2 form-contacto__input1">
                <input type="text" 
                    class="form-contacto_input_general"
                     name="nombre" 
                     id="nombre" required 
                     class="form-control-inline" 
                     placeholder="Nombre Completo">
             </div>
             <div class="form-row mb-2 form-contacto__input2">
                 <input type="email" 
                        name="email" 
                        class="form-contacto_input_general"
                        id="email" required
                        class="form-control-inline" 
                        placeholder="Correo">
             </div>
             <div class="form-row  form-contacto__input3">
                 <input type="text" 
                 class="form-contacto_input_general"
                 name="cuidad" id="cuidad" 
                 required class="form-control-inline" 
                 placeholder="Cuidad">
             </div>
             <div class="form-row form-contacto__input4">
                 <input type="tel" 
                 class="form-contacto_input_general"
                 name="telefono" id="telefono" 
                 required class="form-control-inline" 
                 placeholder="Número Telefónico">
             </div> 
             <div class="form-row form-contacto__input5" >
                 <textarea rows="3"
                 class="form-contacto_input_general" 
                 name="mensaje" 
                 id="mensaje" 
                 placeholder="Mensaje"
                 class="form-control-inline"
                 style="margin-top:10%; height:117%">
                </textarea>
             </div>
             <div class="form-row form-contacto__input6">
                 <button name="enviar_contacto" 
                    id="enviar_contacto" 
                    type="submit" 
                    class="form-contacto__button">
                    enviar</button>
                    <div id="results"  
                         style="display: none;"
                         class="alert alert-success">
                    </div>
                    <div id="resultsError" 
                         style="display: none;"
                         class="alert alert-danger" role="alert">          
                    </div>
             </div>
        </form>
</section>  

<?php include('template/footer.php') ?>
</body>
