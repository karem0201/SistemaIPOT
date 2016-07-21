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
  <div class="row" id="post">
  <?php
  foreach ($consulta as $fila) {

   ?>
         <section class="col-md-6">
           <div class="papers text-center" >
             <img src="<?= base_url()?>public/imagenes/<?= $fila->imagen ?>" alt=""><br/>
             <a href="#"><b>Download my resume</b></a>
             <h4 class="notopmarg nobotmarg"><?= $fila->nombreAb?></h4>
             <p>
               <?= $fila->contenido?>
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
<script type="text/javascript">
$(document).ready(function(){
  $("#pagination").on("click","li",function(){
      var i=$(this);
      var c=$("#post");
      var request;
      alert(i.text());
      if(request==true){
        request.abort();
      }
      request = $.ajax({
      url:"<?php  echo base_url('home/post')?>",
      type:"Post",
       dataType: "json",
      data:"id=" +id
      });

      request.done(function (response,textStatus,jqXHR) {
            c.html("");
            for(var i=0, len=response.length; i<len; i++) {
                 var opt = opt + "<option value="+response[i].idMaterial+">"+ response[i].nombre+" "+response[i].medida+"</option>";
            }
          $("#idMaterial").html(opt);
      });
      request.fail(function (jqXHR,textStatus,thrown) {
            console.log("Erros :" + textStatus);
      });

  });
});
</script>
