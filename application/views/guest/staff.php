<section id="history">
  <div class="banner" style="background-image:url(<?=base_url()?>/plantillas/images/slider/traumatologos.png);">

  </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 wow fadeInDown">
                <div class="accordion">
                    <h2>Opciones de busqueda</h2>
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
                                        <p>Cadera</p>
                                        <p>Columna Vertebral</p>
                                        <p>Hombro y Rodilla</p>
                                        <p>Pie, tobillo y mano</p>
                                    </div>
                              </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                              Ordenar por
                              <i class="fa fa-angle-right pull-right"></i>
                            </a>
                          </h3>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>Apellidos (A-Z)</p>
                            <p>Apellidos (Z-A)</p>
                            <p>Sexo</p>
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
                            <p>Lunes</p>
                            <p>Martes</p>
                            <p>Miércoles</p>
                            <p>Jueves</p>
                            <p>Viernes</p>
                            <p>S&aacute;bado</p>
                          </div>
                        </div>

                      </div>



                    </div><!--/#accordion1-->
                </div>
            </div>

            <div class="col-sm-8 wow fadeInDown">
              <h2 style="padding-bottom:15px; text-align:center;">Nuestros m&eacute;dicos</h2>

              <div class="row">
                <?php foreach ($medicos as $key){ ?>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 medico" >
                    <div class="row c">
                      <div class="col-sm-5 col-xs-6 imagen" style="padding:0;">
                          <img src="<?= base_url();?>/plantillas/images/medicos/<?= $key->foto;?>" alt="" />
                      </div>
                      <div class="col-sm-7 col-xs-6 texto" >
                        <h1><?="Dr. ". $key->nombre .", ".$key->apPaterno." ".$key->apMaterno?></h1>
                        <p><?=$key->descripcion?></p>
                      </div>
                        <a class="preview" href="<?= base_url()?>/plantillas/images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver horario</a>
                    </div>

                  </div>
                <?php }?>

                </div>

            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->
