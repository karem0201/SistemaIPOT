
<div id="page-wrapper">
    <div class="container">
      <div class="center wow fadeInDown col-md-10">
            <h2>Datos de la Cirugia
            <p class = "lead"><?= $result->nombre . " ".$result->apPaterno." ".$result->apMaterno." ". $result->idCirugia?></p>
            </h2>
        </div>


        <div class="row">
            <div class="features col-md-10">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap modelo-1">
                        <i class="fa fa-calendar" ></i>
                        <h2>Fecha Probable</h2>
                        <h3><?= $result->fecProb. " ". $result->horaProb?></h3>
                    </div>
                     </div><!--/.col-md-4-->

                     <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                         <div class="feature-wrap modelo-1">
                             <a href="<?= base_url()?>imprimir/pdf_hojaMat/<?= $result->idCirugia?>"  target="_blank"><i class="fa fa-cloud-download" ></i></a>
                             <h2>Pedido de Materiales</h2>
                             <h3>Para modificar, comunicarse con el administrador</h3>
                         </div>
                  </div><!--/.col-md-4-->

                     <?php foreach ($atributo as $key ){ ?>
                           <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                           <div class="feature-wrap modelo-<?= $key->estAtr?>">
                           <?php

                            if($key->nombreAtr =='estCarta'){?>
                                       <i class="fa fa-file-text "></i>
                               <?php }
                               if($key->nombreAtr =='estConfPacte'){?>
                                           <i class="fa fa-user "></i>
                                   <?php }
                               if($key->nombreAtr =='estIngMat'){?>
                                               <i class="fa fa-medkit "></i>
                                       <?php } ?>
                                   <h2><?= $key->descAtr?></h2>
                                   <h3><?= $key->msAtr?></h3>
                               </div>
                           </div><!--/.col-md-4-->
                     <?php } ?>

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-heart"></i>
                        <h2>Realizacion de la operacion</h2>
                        <h3>
                              <?php if($result->fecReal == 0){?>
                                    Aún no se ha llevado acabo <?php
                                    }else
                                    {echo $result->fecReal ." ". $result->horaReal;
                                    }?>
                        </h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->




    </div><!--/.container-->
</div>


<script type="text/javascript">
  $(document).ready(function (){
    var request;
    $("#changefech").submit(function (e) {

        //Abostamos cualquier request en proceso
        if(request){
            request.abort();
        }

        //obtenemos el objeto form
        var $form=$(this);

        //obtenemos todos los inputs de form
        var $inputs= $form.find("input,select,button,textarea");

        //obtenemos la data del form
        var formData = new FormData($(this)[0]); // no es necesario sino se usa multipart

        //serializamos los datos para enviados
        var formDataSerialized = $(this).serialize();

        //DEsactivamos los inputs para que el usuario no haga otro submit
        $inputs.prop("disabled",true);

        //realizamos el submit
      request = $.ajax({
        cache: false, //solo para multipart
        contentType: false,//solo para multipart
        processData:false,//solo para multipart
        url: $form.attr('action'),
        type:$form.attr('method'),
        data: formData
        });

        //Evento Done [se realiza con exito la operacion]
      request.done(function (response,textStatus,jqXHR) {
        console.log(response);
        if(response.indexOf("http") > -1){
            $("#feature").attr(
              {'style': 'background-image: url(' + response +')'}
            );
        }else{
          alert("No es posible modificar, intenta con otra imagen");
        }
      });

      //Evento Fail [falla la operacion]
      request.fail(function (jqXHR,textStatus,errorThrown) {
        alert("no es posible modificar");
      });

      request.always(function () {
        $inputs.prop("disabled",false);
        console.log("fuciona" );
      });

      e.preventDefault();
    });
  });
