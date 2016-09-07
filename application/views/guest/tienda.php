<div class="banner" style="background-image:url(<?=base_url()?>/plantillas/images/slider/ladrillos.png) ;">
</div>
<section id="tienda">
  <div id="page-wraper" class="container">
      <div class="titulo">
        <h1>Tienda de la Ortopedia IPOT- Clínica Ricardo Palma</h1>
        <h2></h2>
      </div>
      <div class="row">
        <div class="col-md-3" style="padding:0;">
          <div class="publisher sticky-publisher sombra-curva" >
            <h2>Hagamos que su incomodidad no se prolongue más</h2>
            <p>Nuestra asesora de ventas lo ayudará a conseguir el producto necesario para sobrellevar su , atendiendo su receta</p>
            <h2>Consulte nuestro stock</h2><p><b class="fa fa-phone"> 989 269 354</b></p>
          </div>
        </div>

        <div class="col-md-8 ">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <label for="">filtros</label>
                  <select id"especialidad">
                    <option value="-1">lugar de dolencia</option>
                    <?php
                    $opt = "";
                    foreach ($especialidad as $key) {
                        $opt .='<option value="'.$key->idEspecialidad .'" >'.$key->descripcion.'</option>';
                    }
                    echo $opt;
                    ?>
                  </select>
              </div>
            </div>
          </div>

          <div class="row table-pro" >
          <?php foreach ($materiales as $key){ ?>
            <div class="col-md-4 col-sm-4 col-xs-6 spc">
              <div class="row producto ">
                <div class="imagen col-xs-6">
                    <img src="<?= base_url()?>/plantillas/images/materiales/<?= $key->imagen?>" alt="" />
                </div>
                <div class="texto col-xs-6">
                    <h2><?= $key->nombre ?></h2>
                    <p>S/. 10.00</p>
                </div>
              </div>
            </div>
          <?php }?>

          </div><!--/.row-->
        </div>
        </div>
    </div><!--/.container-->
</section><!--/#middle-->
