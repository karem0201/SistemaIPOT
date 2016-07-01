<!-- publicacion de post -->
<!--about us-->
<section class="aboutus" id="aboutus">
<div class="container">
  <div class="center wow fadeInDown">

    <h2>About Leroy</h2>

    <h3>Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baselmnbine grid depict the rhythm of our content and give us guidelines.</h3>
  </div>
  <div class="row">
  <?php
  foreach ($consulta as $fila) {

   ?>
         <div class="col-md-6">
           <div class="papers text-center">
             <img src="<?= base_url()?>public/imagenes/<?= $fila->imagen ?>" alt=""><br/>
             <a href="#"><b>Download my resume</b></a>
             <h4 class="notopmarg nobotmarg"><?= $fila->nombreAb?></h4>
             <p>
               <?= $fila->contenido?>
             </p>
           </div>
         </div>
   <?php
  }
   ?>
   <?php echo $pagination ?>
  </div>
</div>
</section>
<br>
