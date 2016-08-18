<div class="banner" style="background-image:url(<?=base_url()?>/plantillas/images/partners/partner_bg.png);">
</div>
<div id="page-wrapper">
    <div class="container">
      <div class="center wow fadeInDown col-md-10">
            <h2>Separe su Pre-cita
            <p class = "lead"> Una señorita confirmará la cita vía telefónica</p>
            </h2>
      </div>

      <div class="row">
          
          <form class="pre-cita " action="index.html" method="post">
              <div class="row">
                <div class="col-sm-12">
                  <h2><span class="fa fa-leaf"></span> DATOS DE SU CITA</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10">
                  <div class="input-group " >
                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-user-md"></span></span>
                    <select  type= "text"  name="medico" id="medico" class= "form-control"  placeholder= "Nombre(s)"  aria-describedby= "basic-addon1" required="required">
                      <option selected value=-1>Seleccione m&eacute;dico...</option>
                      <?php $opt="";
                       foreach ($medicos as $key) {
                        $opt .="<option value=".$key->idTrabajador.">".$key->apPaterno." ".$key->apMaterno.", ".$key->nombre."</option>";
                      } echo $opt;
                      ?>
                    </select>
                  </div>
                  <p>Si no sabe que medico seleccionar use el boton de ayuda</p>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#asistentecita"><span class="fa fa-question-circle" ></span> Ayuda</button>
                </div>
              </div>

              <div class="row">
                <div class='col-sm-4' id="datepicker">

                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-12">
                  <h2><span class="fa fa-leaf"></span> DATOS PERSONALES</h2>
                </div>
              </div>
              <div class="row">
                <div class='col-sm-5' >
                    <div class="input-group " >
                          <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-user"></span></span>
                          <input  type= "text"  name="nombre" class= "form-control"  placeholder= "Nombres"  aria-describedby= "basic-addon1" required="required">
                   </div>
                </div>
                <div class='col-sm-5' >
                    <div class="input-group " >
                          <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-user"></span></span>
                          <input  type= "text"  name="apellidos" class= "form-control"  placeholder= "Apellidos"  aria-describedby= "basic-addon1" required="required">
                   </div>
                </div>
              </div>
              <br>

              <div class="row">
                <div class='col-sm-5'>
                  <div class="input-group " >
                        <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-at"></span></span>
                        <input  type= "email"  name="correo" class= "form-control"  placeholder= "Correo"  aria-describedby= "basic-addon1" required="required">
                 </div>
                </div>
                <div class='col-sm-3'>
                  <div class="input-group " >
                        <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-phone"></span></span>
                        <input  type= "text"  name="celular" class= "form-control"  placeholder= "Celular"  aria-describedby= "basic-addon1" required="required">
                 </div>
                </div>
                <div class='col-sm-2'>
                  <div class="input-group " >
                        <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-phone"></span></span>
                        <input  type= "text"  name="telefono" class= "form-control"  placeholder= "Telefono"  aria-describedby= "basic-addon1">
                 </div>
                </div>
              </div>
              <br>

              <div class="row">
                <div class='col-sm-3' >
                    <button type="submit" class="btn btn-success btn-lg" id ="guardar" name="button">Guardar Pre-Cita</button>
                </div>
              </div>
              <br>

            </form>
        </div><!--/.row-->

    </div><!--/.container-->
</div>

<script type="text/javascript">
$(document).ready( function() {

      var medico = $('#medico');
      var dias = new Array();
      var divCalendar = $("#datepicker");


    medico.change(function(){
        var request;
        var id = medico.val();
        dias=[0,1,2,3,4,5,6];

        if(request==true){
          request.abort();
        }
        request = $.ajax({
        url:"<?php  echo base_url('horario/mostrarByMedico')?>",
        type:"Post",
         dataType: "json",
        data:"id=" +id
        });

        if(medico.val()>-1)
        {
          $("#guardar").removeAttr("disabled");
        }
        else{
          $("#guardar").attr("disabled","disabled");
        }
        request.done(function (response,textStatus,jqXHR) {
              for (var i = 0; i < response.length; i++) {
                if(response[i].dia ==="lunes"){
                  delete dias[1];
                }
                if(response[i].dia ==="martes"){
                  delete dias[2];
                }
                if(response[i].dia ==="miércoles"){
                  delete dias[3];
                }
                if(response[i].dia ==="jueves"){
                  delete dias[4];
                }
                if(response[i].dia ==="viernes"){
                  delete dias[5];
                }
                if(response[i].dia ==="sábado"){
                  delete dias[6];
                }
              }

              divCalendar.html("");
              var calendar = "";
              var f = new Date();

              calendar = calendar +'<div class="input-group">';
                calendar = calendar +'<span class="input-group-addon input-modal" id="basic-addon1"><span class=" fa fa-calendar"></span></span>';
                calendar = calendar + '<input type="text" id="fecha" name="fecha" data-date-language="es" class="form-control" aria-describedby="basic-addon1" required="required">';
              calendar = calendar + '</div>';
              divCalendar.append(calendar);

              $('#fecha').datepicker({
                format: 'dd-m-yyyy',
                daysOfWeekDisabled: dias,
                 startDate: (f.getDate() + "-" + (f.getMonth()+1)+ "-" + f.getFullYear())
              });
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });
      });



        });
    </script>
