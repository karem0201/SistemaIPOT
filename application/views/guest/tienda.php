<div id="out-section" class="titulo" >
  <h1>Tienda de la Ortopedia IPOT- Clínica Ricardo Palma</h1>
  <h2></h2>
</div>
<section id="tienda">
  <div class="modal fade" id="modal_detalle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                      <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" id="buttonclose">&times</button>
                      <img src= "" alt="" />
                      <h1></h1>
                </div> <!-- modal-header -->
                <div class="modal-body ">
                  <div class="row" id="content-detalle">
                    <p>
                      Usos
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                    </p>

                    <p>
                      Beneficios
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                    </p>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-blue" data-dismiss="modal">Cerrar</button>
                </div>
              </div> <!-- modal-content -->
          </div><!-- modal-dialog  -->
    </div>

    <div class="modal fade" id="modal_oferta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body ">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" id="buttonclose">&times</button>
                  </div>
                </div> <!-- modal-content -->
            </div><!-- modal-dialog  -->
      </div>

  <div id="page-wraper" class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="publisher sticky-publisher sombra-curva" >
            <h2>Hagamos que su incomodidad no se prolongue más</h2>
            <p>Nuestra asesora de ventas lo ayudará a conseguir el producto necesario para sobrellevar su , atendiendo su receta</p>
            <h2>Consulte nuestro stock</h2><p><b class="fa fa-phone"> 989 269 354</b></p>
          </div>
        </div>

        <div class="col-md-9 ">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <span  class= "input-group-addon input-modal" id= "basic-addon1" > Filtros : </span>
                  <select id="especialidad" class="form-control">
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
            <div class="col-md-4">
              <div class="input-group">
                <span  class= "input-group-addon input-modal" id= "basic-addon1" > Ordenar : </span>
                  <select id="ordenar" class="form-control">
                    <option value="1">A - Z</option>
                    <option value="2">Z - A</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span  class= "input-group-addon input-modal" id= "basic-addon1" > Buscar : </span>
                <input type="text" id="txtmaterial" value="" class="form-control" placeholder="ortesis">
              </div>
            </div>
          </div>
          <div class="row table-pro " >
          <?php foreach ($materiales as $key){ ?>
            <div class="col-md-4 col-sm-4 col-xs-6 spc ">
              <div class="producto">
                <div class="row sup">
                  <div class="imagen col-xs-6" >
                      <img src="<?= base_url()?>/plantillas/images/materiales/<?= $key->imagen?>" alt="" />
                  </div>
                  <div class="texto col-xs-6">
                      <h2><?= $key->nombre ?></h2>
                      <p>S/ <?= number_format((float)$key->precio, 2, '.', '') ?></p>
                  </div>
                </div>
                <div class="row links" >
                  <a value="<?= $key->idMaterial ?>"><span class="fa fa-eye" ></span> Detalles</a>
                  <?php foreach ($oferta as $o) {
                    if ($key->idMaterial == $o->idMaterial) {?>
                        <a  href="<?= base_url()?>plantillas/imagen/materiales/ofertas/<?= $o->imagen?>" rel="prettyPhoto"><span class="fa fa-star" ></span> Oferta</a>
                    <?php
                    }
                  }?>
                </div>
              </div>
            </div>
          <?php }?>

        </div><!--/.table-pro->
        </div>
        </div>
    </div><!/.container-->
</section><!--/#middle-->

<script type="text/javascript">
var sl_especialidad = $("#especialidad");
var sl_ordenar = $("#ordenar");
var txt_material = $("#txtmaterial");
var esp="";
var order="";
var divContent =$(".table-pro");
var divModalDetalle=$('#content-detalle');
var divModalTitulo=$("#modal_detalle").find('.modal-header');

sl_especialidad.add(sl_ordenar).change(fn_filtros);
txt_material.on('keyup',fn_buscar);
divContent.on('click','a',fn_modalDetalle);

function fn_modalDetalle(){
  $id=$(this).attr('value');
  var request;
  if(request==true){
    request.abort();
  }

  request = $.ajax({
  url:"<?php  echo base_url('materiales/mostrarById')?>",
  type:"Post",
   dataType: "json",
  data:{'idMaterial':$id}
  });

  request.done(function (response,textStatus,jqXHR) {
    if(response!=null){
      var $det = "";
      var titulo = "";

      divModalTitulo.html('');
      titulo = titulo + '<button type="button" class = "close" data-dismiss="modal" aria-hidden="true" id="buttonclose">&times</button>';
      titulo = titulo + '<h1>'+response[0].nombre+'</h1>';
      divModalTitulo.append(titulo);

      divModalDetalle.html("");
      $det = $det + '<img src= "<?= base_url()?>plantillas/images/materiales/'+response[0].imagen+'" alt="" />';
      $det = $det + '<p>';
        $det = $det + 'Usos';
      $det = $det + '<span>'+response[0].uso+'</span>';
      $det = $det + '</p>';

      $det = $det + '<p>';
        $det = $det + 'Beneficios';
      $det = $det + '<span>'+response[0].beneficios+'</span>';
      $det = $det + '</p>';

      divModalDetalle.append($det);

      $("#modal_detalle").modal();
    }
    else{
      console.log("busqueda nula");
    }
  });

  request.fail(function (jqXHR,textStatus,thrown) {
        console.log("Erros :" + textStatus);
  });

  request.always(function () {
        console.log("termino la ejecucion de ajax");
  });
}

function fn_buscar(){
  var request;
  if(request==true){
    request.abort();
  }

  request = $.ajax({
  url:"<?php  echo base_url('materiales/mostrarByNombre')?>",
  type:"Post",
   dataType: "json",
  data:{"tipo":5, 'idEspecialidad':esp, "order":order, "nombre":txt_material.val()}//5 por Tipo: ortesis
  });

  request.done(function (response,textStatus,jqXHR) {
    if(response!=null){
      fn_printResponse(response);
    }
    else{
      console.log("busqueda nula");
    }
  });

  request.fail(function (jqXHR,textStatus,thrown) {
        console.log("Erros :" + textStatus);
  });

  request.always(function () {
        console.log("termino la ejecucion de ajax");
  });
}

function fn_printResponse(response){
  var request;
  if(request==true){
    request.abort();
  }

  request = $.ajax({
  url:"<?php  echo base_url('materiales/mostrarMaterialesOrtopediaOferta')?>",
  type:"Post",
   dataType: "json",
  });

  request.done(function (oferta,textStatus,jqXHR) {
    console.log(oferta);
    divContent.html("");
    var prod = "";
    for (var i = 0; i < response.length; i++) {
      prod = prod + '<div class="col-md-4 col-sm-4 col-xs-6 spc ">';
        prod = prod + '<div class="producto">';
          prod = prod + '<div class="row sup">';
            prod = prod + '<div class="imagen col-xs-6" >';
                prod = prod + '<img src="<?= base_url()?>/plantillas/images/materiales/'+ response[i].imagen+'" alt="" />';
            prod = prod + '</div>';
            prod = prod + '<div class="texto col-xs-6">';
                prod = prod + '<h2>'+ response[i].nombre +'</h2>';
                prod = prod + '<p>S/ '+ parseFloat(response[i].precio).toFixed(2) +'</p>';
            prod = prod + '</div>';
          prod = prod + '</div>';
          prod = prod + '<div class="row links">';
            prod = prod + '<a data-toggle="modal" data-target="#detalles" value="'+ response[i].idMaterial +'"><span class="fa fa-eye" ></span> Detalles</a>';
            for (var j = 0; j < oferta.length; j++) {
              if(oferta[j].idMaterial==response[i].idMaterial){
                prod = prod + '<a href="<?= base_url()?>/plantillas/images/materiales/ofertas/'+oferta[j].imagen+'" rel="prettyPhoto"><span class="fa fa-star" ></span> Oferta</a>';
              }
            }
          prod = prod + '</div>';
        prod = prod + '</div>';
      prod = prod + '</div>';
    }
    divContent.append(prod);
  });

  request.fail(function (jqXHR,textStatus,thrown) {
        console.log("Erros :" + textStatus);
  });
}

function fn_filtros(){
  esp = sl_especialidad.val();
  var request;
  if(request==true){
    request.abort();
  }

  if(sl_ordenar.val()==1){
    order="ASC";
  }
  else {
    order="DESC";
  }

  request = $.ajax({
  url:"<?php  echo base_url('materiales/mostrarByEspecialidad')?>",
  type:"Post",
   dataType: "json",
  data:{'idEspecialidad':esp, "order":order}
  });

  request.done(function (response,textStatus,jqXHR) {

    if(response!=null){
      fn_printResponse(response);
    }
    else{
      console.log("busqueda nula");
    }
  });

  request.fail(function (jqXHR,textStatus,thrown) {
        console.log("Erros :" + textStatus);
  });

  request.always(function () {
        console.log("termino la ejecucion de ajax");
  });

}

</script>
