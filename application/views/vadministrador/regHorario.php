<div id="page-wrapper">
      <div class="container">
        <br>
        <div class="row">
              <div class="row-md col-md-10  col-sm-8">
                   DATOS DE LA CIRUGIA
              </div>
        </div> <!-- row -->

<form class="form-control" action="<?=base_url()?>horario/Registrar" method="post" id="registrar">
    <select class="form-control" name="medico" id="medico" autofocus>
      <?php
        $opt="";
        foreach ($medico as $key ) {
          $opt .= "<option value=".$key->idTrabajador.">".$key->apPaterno.", ".$key->nombre."</option>";
        }
        echo $opt;
       ?>
    </select>
    <select class="" name="dia" id = "dia">
      <option value='lunes'>lunes</option>
      <option value='martes'>martes</option>
      <option value='miércoles'>miércoles</option>
      <option value='jueves'>jueves</option>
      <option value='viernes'>viernes</option>
      <option value='sábado'>sábado</option>
    </select>
    <input type="time" name="inicio" id="inicio" value="">
    <input type="time" name="fin" id="fin" value="">
    <button type="submit" id="reg">agregar</button>
</form>
</div>
</div>

<script type="text/javascript">
  $(document).ready( function() {
    $("#r").submit(function (e) {

        //Abostamos cualquier request en proceso
        if(request){
            request.abort();
        }

        //obtenemos el objeto form
        var $form=$(this);

        //obtenemos todos los inputs de form
        var $inputs= $form.find("input,select,button,textarea");

        //obtenemos la data del form
        //var formData = new FormData($(this)[0]); // no es necesario sino se usa multipart

        //serializamos los datos para enviados
        var formDataSerialized = $(this).serialize();

        //DEsactivamos los inputs para que el usuario no haga otro submit
        $inputs.prop("disabled",true);

        //realizamos el submit
      request = $.ajax({
        cache: false, //solo para multipart
        contentType: false,//solo para multipart
        processData:false,//solo para multipart
        url: "<?php  echo base_url('horario/registrar')?>"
        type:$form.attr('method'),
        data: $inputs
        });

        //Evento Done [se realiza con exito la operacion]
      request.done(function (response,textStatus,jqXHR) {
        console.log(response);

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
</script>
