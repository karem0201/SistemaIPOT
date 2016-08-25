<div id="page-wrapper">

            <div class="row">
                <div class="col-md-3 col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon input-modal" id="basic-addon1"><span class=" fa fa-calendar"></span></span>
                    <input type="text" id="fecha-atencion" name="fecha-atencion" data-date-language="es" class="form-control" aria-describedby="basic-addon1" required="required">
                  </div>
                </div>

                <div class="col-md-2 col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon input-modal" id="basic-addon1"><span class=" fa fa-clock-o"></span></span>
                    <input type="time" id="hora-atencion" name="hora-atencion" data-date-language="es" class="form-control" aria-describedby="basic-addon1" required="required">
                  </div>
                </div>
            </div>
            <br>
            <div class="row buscar">
                <div class="col-md-3 col-sm-10">
                    <span class="input-group-addon input-modal" id="basic-addon1"><span class=" fa fa-user"></span> Ap. Paterno</span>
                    <input type="text" id="apPaterno" name="apPaterno" data-date-language="es" class="form-control" aria-describedby="basic-addon1" required="required">
                </div>

                <div class="col-md-3 col-sm-10">
                    <span class="input-group-addon input-modal" id="basic-addon1"><span class=" fa fa-user"></span> Ap. Materno</span>
                    <input type="text" id="apMaterno" name="apMaterno" data-date-language="es" class="form-control" aria-describedby="basic-addon1"  required="required">
                </div>

                <div class="col-md-3 col-sm-10">
                    <span class="input-group-addon input-modal" id="basic-addon1"><span class=" fa fa-user"></span> Nombre</span>
                    <input type="text" id="nombre" name="nombre" data-date-language="es" class="form-control" aria-describedby="basic-addon1"  required="required">
                    <input type="text" id="idPaciente" name="idPaciente" hidden="true">
                </div>

                <div class="col-md-2 col-sm-10">
                    <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-credit-card"> </span> Dni</span>
                    <input type="text" id="dni" name="dni" data-date-language="es" class="form-control" aria-describedby="basic-addon1" required="required">
                </div>
                <div class="col-md-1 col-sm-10">
                <br>
                      <button type="submit" class="btn btn-danger" id="buscar" data-toggle="modal" data-target="#buscarPaciente"><span class="fa fa-search"></span></button>
                </div><!-- col-lg-1-->
            </div>
            <br>
            <div class="row" >
              <form  action="index.html" method="post" id="datos_paciente" class="datos_paciente">
                <span>Datos del Paciente:</span>
                <div class="row">
                  <div class="col-md-4 col-sm-5">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-credit-card"> </span> Dni</span>
                      <input type="text" id="dni_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-5">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-calendar"> </span> Fecha Nac. </span>
                      <input type="text" id="fecha_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-5">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-book"> </span> N° H.C. </span>
                      <input type="text" id="hhcc_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4 ">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-user"> </span> Ap. Paterno</span>
                      <input type="text" id="apPaterno_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-sm-4 ">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-user"> </span> Ap. Materno</span>
                      <input type="text" id="apMaterno_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-sm-4 ">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-user"> </span> Nombre</span>
                      <input type="text" id="nombre_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4 ">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-phone"> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telefono</span>
                      <input type="text" id="telefono_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-sm-4 ">
                    <div class="input-group">
                      <span class="input-group-addon input-modal" id="basic-addon1"><span class="fa fa-heartbeat"> </span> Tipo Seguro</span>
                      <input type="text" id="tiposeguro_paciente" value="" class="form-control" autofocus="false" required="required" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-sm-4 ">
                    <div class="input-group">
                      <button  type="button" id="modificar" class="btn btn-info">Modificar</button>
                      <button  type="button" id="grabar" class="btn btn-success desactive">Grabar</button>
                      <button  type="button" id="cancelar" class="btn btn-danger desactive">Cancelar</button>
                      <button  type="button" id="nuevo" class="btn btn-danger">Nuevo</button>
                    </div>
                  </div>
                </div>



              </form>
            </div>


</div>
<script type="text/javascript">
$(document).ready( function() {
  var now = new Date();
  var fecha_atencion = $('#fecha-atencion')
  var today = now.getDate()  + '/' + (now.getMonth() + 1) + '/' + now.getFullYear();
  var time =now.getHours()  + ':' + (now.getMinutes() + 1)+':' + (now.getSeconds() + 1);
  var buscar = $('#buscar');
  var grilla = $("#grilla tbody");
  var datos_paciente = $(".datos_paciente");

  fecha_atencion.attr('value',today);
  $('#hora-atencion').attr('value', time);

  fecha_atencion.datepicker({
    format: 'dd-m-yyyy',
  });

  buscar.on('click',function(){
    var request;

    if(request==true){
      request.abort();
    }

    request = $.ajax({
    url:"<?php  echo base_url('paciente/BuscarPaciente')?>",
    type:"Post",
    dataType: "json",
    data:{apPaterno: $('#apPaterno').val(), apMaterno:$('#apMaterno').val(),nombre:$('#nombre').val(), dni:$('#dni').val()}
    });

   request.done(function (response,textStatus,jqXHR) {
     console.log(response,"karem");

     grilla.html("");
     for (var i = 0; i < response.length; i++) {
       cadena = "<tr>";
       cadena = cadena + "<td id="+ response[i].idPaciente+">" + response[i].apPaterno + "</td>";
       cadena = cadena + "<td id="+ response[i].idPaciente+">" + response[i].apMaterno + "</td>";
       cadena = cadena + "<td id="+ response[i].idPaciente+">" + response[i].nombre +  "</td>";
       cadena = cadena + "<td id="+ response[i].idPaciente+">" + response[i].dni +  "</td>";
       cadena = cadena+ "</tr>";
       grilla.append(cadena);
     }


   });
   request.fail(function (jqXHR,textStatus,thrown) {
     console.log("Erros :" + textStatus);
   });
  });

grilla.on('dblclick','td',function(){
  celda = $(this).attr('id');
  $("idPaciente").attr('value',celda);
  $("#buttoncloseBuscar")[0].click();
  var request;

  if(request==true){
    request.abort();
  }

  request = $.ajax({
  url:"<?php  echo base_url('paciente/mostrarById')?>",
  type:"Post",
  dataType: "json",
  data:{postname: celda}
  });

 request.done(function (response,textStatus,jqXHR) {

  $("#nombre_paciente").attr('value',response.nombre);
  $("#apPaterno_paciente").attr('value',response.apPaterno);
  $("#apMaterno_paciente").attr('value',response.apMaterno);
  $("#dni_paciente").attr('value',response.dni);
  $("#fecha_paciente").attr('value',response.fecNac);
  $("#hhcc_paciente").attr('value',response.hhcc);
  $("#telefono_paciente").attr('value',response.telefono);
 });
 request.fail(function (jqXHR,textStatus,thrown) {
   console.log("Erros :" + textStatus);
 });

});

datos_paciente.on('click',"button",function(){
  $(this).parent().children('button').toggleClass("desactive");
  if ($(this).attr('id')==="modificar"){
    datos_paciente.find("input").removeAttr("disabled");
      }

  if ($(this).attr('id')==="grabar"){
    alert("g");
  }
  if ($(this).attr('id')==="cancelar"){
    datos_paciente.find("input").attr("disabled","disabled");
  }

});

function fn_grabar(){

};

});
</script>
