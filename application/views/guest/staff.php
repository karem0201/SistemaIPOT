<section id="history">
  <div class="banner" style="background-image:url(<?=base_url()?>/plantillas/images/slider/traumatologos.png);">

  </div>
    <div class="container">
        <div class="row">
          <div class="titulo">
              <h1>NUESTROS MEDICOS<h1>
              <h2>Separa tu cita llamando al  (01) 224 2224 anexo 4070 o <a href="<?= base_url()?>cita" class="btn btn-info" name="button">Vía Web</a></h2>

          </div>
          <h2>ENCUENTRA TU MEDICO ESPECIALISTA</h2>
            <div class="col-sm-4 wow fadeInDown">
                <div class="accordion">
                    <div class="panel-group" id="accordion1">
                      <div class="panel panel-default">
                        <div class="panel-heading active">
                          <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                              Especialidad
                              <i class="fa fa-angle-right pull-right"></i>
                            </a>
                          </h3>
                        </div>

                        <div id="collapseOne1" class="panel-collapse collapse in">
                          <div class="panel-body">
                              <div class="media accordion-inner">
                                    <div class="pull-left">

                                    </div>
                                    <div class="media-body">
                                        <div id="optEspecialidad">
                                          <input type="radio" name="options" value="-1" checked = "checked"/> Todos<br>

                                          <?php
                                          $radio = "";
                                          foreach ($especialidad as $key) {
                                              $radio .='<input type="radio" name="options" value="'.$key->idEspecialidad .'" autocomplete="off">'.$key->descripcion.'<br>';

                                          }
                                          echo $radio;
                                          ?>
                                        </div>
                                    </div>
                              </div>
                          </div>
                        </div>
                      </div>


                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                              Según día
                              <i class="fa fa-angle-right pull-right"></i>
                            </a>
                          </h3>
                        </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div id="optDias">
                              <input type="radio" name="options" value="todos" checked > Todos<br>
                              <input type="radio" name="options" value="lunes">Lunes<br>
                              <input type="radio" name="options" value="martes">Martes<br>
                              <input type="radio" name="options" value="miércoles">Miércoles<br>
                              <input type="radio" name="options" value="jueves">Jueves<br>
                              <input type="radio" name="options" value="viernes">Viernes<br>
                              <input type="radio" name="options" value="sábado">S&aacute;bado<br>
                            </div>
                          </div>
                        </div>

                      </div>



                    </div><!--/#accordion1-->
                </div>
            </div>

            <div class="col-sm-8 wow fadeInDown">
              <div class="row" id="content-medico">
                <?php foreach ($medicos as $key){ ?>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 medico" >
                    <div class="row c">
                      <div class="col-sm-5 col-xs-6 imagen" style="padding:0;">
                          <img src="<?= base_url();?>/plantillas/images/medicos/<?= $key->foto;?>" alt="" />
                      </div>
                      <div class="col-sm-7 col-xs-6 texto" >
                        <h1><?= $key->apPaterno." ".$key->apMaterno.", ".$key->nombre ?></h1>
                          <?php $text = " ";
                          foreach ($esp as $e){
                            if($e->idTrabajador == $key->idTrabajador){
                              $text = $text . $e->descripcion.", ";
                            }
                          }
                          echo "<p>".$text."</p>";
                          ?>

                      </div>
                        <a data-toggle="modal" data-target="#horario"><span class="fa fa-eye" ></span>Ver horario</a>
                    </div>

                  </div>
                <?php }?>

                </div>

            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<script type="text/javascript">
$(document).ready( function() {
      var divContent = $("#content-medico");
      var optEsp = $("#optEspecialidad");
      var optDias = $("#optDias");

      optEsp.on('click','input',function(){
             var opt = $(this).attr('value');
             var request;

             divContent.html("");
                if(request==true){
                  request.abort();
                }

                  request = $.ajax({
                  url:"<?php  echo base_url('trabajador/medicoByEspecialidad')?>",
                  type:"Post",
                   dataType: "json",
                  data:"opt=" +opt
                  });

                  request.done(function (response,textStatus,jqXHR) {
                    console.log(response);
                    content = "";
                    for (var i = 0; i < response.length; i++) {
                      content = content + '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 medico" >';
                        content = content + '<div class="row c">';
                          content = content + '<div class="col-sm-5 col-xs-6 imagen" style="padding:0;">'
                              content = content + '<img style="width:90%" src="<?= base_url();?>/plantillas/images/medicos/'+response[i].foto+'" alt="" />';
                          content = content + '</div>';
                          content = content + '<div class="col-sm-7 col-xs-6 texto" >';
                            content = content + '<h1>'+response[i].apPaterno+' '+response[i].apMaterno+', '+response[i].nombre+'</h1>';
                            content = content + '<p>'+response[i].descripcion +'</p>';
                          content = content + '</div>';
                            content = content + '<a data-toggle="modal" data-target="#horario"><span class="fa fa-eye" ></span>Ver horario</a>';
                        content = content + '</div>';
                        content = content + '</div>';

                    }

                    divContent.append(content);
                  });

                  request.fail(function (jqXHR,textStatus,thrown) {
                        console.log("Error :" + textStatus);
                  });

                  request.always(function () {
                        console.log("termino la ejecucion de ajax");
                  });
        });

        optDias.on('click','input',function(){
               var opt = $(this).attr('value');
               var request;

               console.log(opt);
               divContent.html("");
                  if(request==true){
                    request.abort();
                  }

                    request = $.ajax({
                    url:"<?php  echo base_url('horario/mostrarByDia')?>",
                    type:"Post",
                     dataType: "json",
                    data:"opt=" +opt
                    });

                    request.done(function (response,textStatus,jqXHR) {
                      console.log(response);
                      content = "";
                      for (var i = 0; i < response.length; i++) {
                        content = content + '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 medico" >';
                          content = content + '<div class="row c">';
                            content = content + '<div class="col-sm-5 col-xs-6 imagen" style="padding:0;">'
                                content = content + '<img style="width:90%" src="<?= base_url();?>/plantillas/images/medicos/'+response[i].foto+'" alt="" />';
                            content = content + '</div>';
                            content = content + '<div class="col-sm-7 col-xs-6 texto" >';
                              content = content + '<h1>'+response[i].apPaterno+' '+response[i].apMaterno+', '+response[i].nombre+'</h1>';
                              //content = content + '<p>'+response[i].descripcion +'</p>';
                            content = content + '</div>';
                              content = content + '<a data-toggle="modal" data-target="#horario"><span class="fa fa-eye" ></span>Ver horario</a>';
                          content = content + '</div>';
                          content = content + '</div>';
                      }

                      divContent.append(content);
                    });

                    request.fail(function (jqXHR,textStatus,thrown) {
                          console.log("Error :" + textStatus);
                    });

                    request.always(function () {
                          console.log("termino la ejecucion de ajax");
                    });

           });

  });

</script>
