<!-- publicacion de post -->
<!--about us-->
<section class="about-us" id="noticias">
<div class="container">
  <div class="center wow fadeInDown">
    <div class="linear-re ">
        <h2>Publicaciones m&eacute;dicas</h2>
    </div>

    <h3></h3>
  </div>
  <div class="row" >
<div id="publicacion">
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
 <?php }echo $pagination ?>
</div>
  </div>
</div>
</section>
<br>

<script type="text/javascript">

  var divPub = $('#publicacion');
  var divPage = $('#pagination');
divPub.find('a').attr('href','#');
divPage.on('click','a',function (e) {
  fn_pagination($(this));
  e.preventDefault();
});

function fn_pagination(e) {
  var a =e.text();
  var request;
  if(request){
   request.abort();
  }
    request = $.ajax({
    url: "<?php  echo base_url('home/returnPost')?>/"+a,
    dataType: "json"
    });
  request.done(function (response,textStatus,jqXHR) {
//    console.log(response['result']);
  divPub.html("");
  var post="";
    for (var i = 0; i < response['result'].length; i++) {
      post = post +'<section class="col-md-6">';
        post = post +'<div class="papers text-center" >';
          post = post +'<div class="imagen" style="background-image:url(<?= base_url()?>public/imagenes/'+response["result"][i].imagen+');"></div><br/>';
          post = post +'<a href="#"><b>Descargar resumen</b></a>';
          post = post +'<h4 class="notopmarg nobotmarg">'+response["result"][i].nombreAb+'</h4>';
          post = post +'<p>'+response["result"][i].subdescripcion+'</p>';
        post = post +'</div>';
      post = post +'</section>';
    }
    divPub.append(post);
    divPub.append(response['pagination']);
  });

}


</script>
