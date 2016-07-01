
<section id="feature" class="transparent-bg" >
    <div class="container">
      <div class="center wow fadeInDown">
            <h2>Datos de la Cirugia</h2>
            <p class = "lead"><?= $result->nombre . " ".$result->apPaterno." ".$result->apMaterno?><br> <?= "HH.CC : ".$result->hhcc?></p>
        </div>


        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap modelo-1">
                        <i class="fa fa-calendar" ></i>
                        <h2>Fecha Probable</h2>
                        <h3><?= $result->fecProb. " ". $result->horaProb?></h3>
                    </div>
                     </div><!--/.col-md-4-->

                     <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                         <div class="feature-wrap modelo-1">
                             <i class="fa fa-cloud-download" ></i>
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
                                               <i class="fa fa-hospital-o "></i>
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


        <div class="get-started center wow fadeInDown">
            <h2>Ready to get started</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. <br>  Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
            <div class="request">
                <h4><a href="#">Request a free Quote</a></h4>
            </div>
        </div><!--/.get-started-->

        <div class="clients-area center wow fadeInDown">
            <h2>What our client says</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/client1.png" class="img-circle" alt="">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                    <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                </div>
            </div>
            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/client2.png" class="img-circle" alt="">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                    <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                </div>
            </div>
            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/client3.png" class="img-circle" alt="">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                    <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                </div>
            </div>
      </div>

    </div><!--/.container-->
</section><!--/#feature-->


<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row" id="divfech">
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Meet the team</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Refund policy</a></li>
                        <li><a href="#">Ticket system</a></li>
                        <li><a href="#">Billing system</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Developers</h3>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">SEO Marketing</a></li>
                        <li><a href="#">Theme</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li><a href="#">Plugin Development</a></li>
                        <li><a href="#">Article Writing</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Our Partners</h3>
                    <ul>
                        <li><a href="#">Adipisicing Elit</a></li>
                        <li><a href="#">Eiusmod</a></li>
                        <li><a href="#">Tempor</a></li>
                        <li><a href="#">Veniam</a></li>
                        <li><a href="#">Exercitation</a></li>
                        <li><a href="#">Ullamco</a></li>
                        <li><a href="#">Laboris</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->

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
