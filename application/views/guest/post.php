<!-- publicacion de post -->
<!--about us-->
<section class="aboutus">
<div class="container">
  <div class="center wow fadeInDown">
    <div class="linear-re ">
        <h2>Blogs Médicos</h2>
    </div>

    <h3></h3>
  </div>
  <div class="row" >
  <?php
  foreach ($consulta as $fila) {

   ?>
         <section class="col-md-6">
           <div class="papers text-center" >
             <div class="imagen" style="background-image:url(<?= base_url()?>public/imagenes/<?= $fila->imagen ?>);"></div><br/>
             <a href="#"><b>Descargar resumen</b></a>
             <h4 class="notopmarg nobotmarg"><?= $fila->nombreAb?></h4>
             <p>
               <?= $fila->subdescripcion?>
             </p>
           </div>
         </section>
   <?php
  }
 ?>

  <?php echo $pagination ?>
  </div>
</div>
</section>
<br>
