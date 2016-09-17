<div class="" id="modal_medico" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                    <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" id="buttonclose">&times</button>
                    <h4>Detalles</h4>
              </div> <!-- modal-header -->
              <div class="modal-body ">
                <div class="row" id="content-medico">


                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div> <!-- modal-content -->
        </div><!-- modal-dialog  -->
  </div>
  <div class="modal fade" id="modal_respuesta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
              <div class="modal-content mrespuesta">
                <div class="modal-header">
                      <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" id="buttonclose2">&times</button>
                      <h4>GENERAR PRE-CITA</h4>
                </div> <!-- modal-header -->
                <div class="modal-body ">
                  <div class="row " id="content-respuesta">

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn  btn-success" id="RegistrarCita">Registrar</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
              </div> <!-- modal-content -->
          </div><!-- modal-dialog  -->
    </div>


</div>
<div id="pre-cita">
    <div class="container">
      <div class="row ">
        <div class="pasos_precita">
          <span id="uno" class="paso_realizado">1</span>
          <span id="dos" class="paso_enproceso">2</span>
          <span id="tres">3</span>
          <span id="cuatro">4</span>
        </div>
        <div class="comentarios">
          2. ¿D&oacute;nde te duele? :<span>Selecciona tu dolencia, as&iacute; podremos ayudarte a elegir tu especialista</span>
        </div>
        <form role="form" id="formulario" action="index.html" method="post" onsubmit="return validar()">
          <div class="col-sm-12" id="datos_cita">
            <input  type="text" name="p_paciente" id="p_paciente" disabled="true" value="Datos del Paciente:
            <li><b>Nombre: &nbsp;</b><?= $datos_paciente['p_nombre']?></li>
            <li><b>Ap. Paterno: &nbsp;</b><?= $datos_paciente['p_apPaterno']?></li>
            <li><b>Ap. Materno: &nbsp;</b><?= $datos_paciente['p_apMaterno']?></li>
            <li><b>Celular: &nbsp;</b><?= $datos_paciente['p_celular']?></li>
            <li><b>Tel&eacute;fono: &nbsp;</b><?= $datos_paciente['p_telefono']?></li>" hidden="hidden">
            <input type="text" name="h_pref" id="h_pref" disabled="true" hidden="hidden">
            <input type="text" name="p_asunto" id="p_asunto" disabled="true" hidden="hidden" value="PC. <?= $datos_paciente['p_apPaterno']." ". $datos_paciente['p_apMaterno'].", ".$datos_paciente['p_nombre']?>">
            <a type="button"class="bt btn-danger" id="btn_regresar" href="javascript:history.go(-1);"><span class="fa fa-arrow-left"></span> Regresar a sus datos</a>
            <br><br>
            <div class="row">
              <div class="col-md-4">
                <div class="input-group " >
                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class="fa fa-child"></span></span>
                    <select class="form-control" name="especialidad" id="especialidades" required="required">
                        <option value='-1' selected >Lugar de su dolencia...</option>
                        <?php $esp="";
                        foreach ($especialidad as $key) {
                          $esp .="<option value=".$key->idEspecialidad.">".$key->descripcion."</option>";
                          } echo $esp;
                          ?>
                    </select>
                </div>
                <div class="input-group " >
                  <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-user-md"></span></span>
                  <select  type= "text"  name="medico" id="medico" class= "form-control"  aria-describedby= "basic-addon1" required="required">
                    <option selected value=-1>Seleccione m&eacute;dico...</option>
                    <?php $opt="";
                     foreach ($medicos as $key) {
                      $opt .="<option value=".$key->idTrabajador.">".$key->apPaterno." ".$key->apMaterno.", ".$key->nombre."</option>";
                    } echo $opt;
                    ?>
                  </select>
                </div>
                <div class="input-group " >
                  <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-clock-o"></span></span>
                  <input type="text" name="dia-turno" id="dia-turno" class="form-control" placeholder="Click en un turno de la tabla" disabled="true" required="required">
                </div>
                <div class="row">
                  <div class='col-sm-7' id="datepicker">
                    <input type="text" id="fecha" value="" hidden="hidden">
                  </div>
                </div>
                <button type="submit" class="form-control btn btn-success" id=regCita >RegistrarCita</button>
              </div>
              <div class="col-md-8">
                <div id="tabla-content">
                      <div class="panel panel-default">
                          <div class="panel-body mitabla">
                              <div class="table-responsive">
                                  <table class=" table_horario"  id="grilla" >
                                    <thead>
                                      <tr>
                                        <th>
                                          Horas
                                        </th>
                                        <th>
                                          Lunes
                                        </th>
                                        <th>
                                          Martes
                                        </th>
                                        <th>
                                          Miercoles
                                        </th>
                                        <th>
                                          Jueves
                                        </th>
                                        <th>
                                          Viernes
                                        </th>
                                        <th>
                                          S&aacute;bado
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody >
                                      <tr >
                                        <td >08:00</td>
                                        <td id="800lunes"></td>
                                        <td id="800martes"></td>
                                        <td id="800miércoles"></td>
                                        <td id="800jueves"></td>
                                        <td id="800viernes"></td>
                                        <td id="800sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >08:30</td>
                                        <td id="850lunes"></td>
                                        <td id="850martes"></td>
                                        <td id="850miércoles"></td>
                                        <td id="850jueves"></td>
                                        <td id="850viernes"></td>
                                        <td id="850sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >09:00</td>
                                        <td id="900lunes"></td>
                                        <td id="900martes"></td>
                                        <td id="900miércoles"></td>
                                        <td id="900jueves"></td>
                                        <td id="900viernes"></td>
                                        <td id="900sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >09:30</td>
                                        <td id="950lunes"></td>
                                        <td id="950martes"></td>
                                        <td id="950miércoles"></td>
                                        <td id="950jueves"></td>
                                        <td id="950viernes"></td>
                                        <td id="950sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >10:00</td>
                                        <td id="1000lunes"></td>
                                        <td id="1000martes"></td>
                                        <td id="1000miércoles"></td>
                                        <td id="1000jueves"></td>
                                        <td id="1000viernes"></td>
                                        <td id="1000sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >10:30</td>
                                        <td id="1050lunes"></td>
                                        <td id="1050martes"></td>
                                        <td id="1050miércoles"></td>
                                        <td id="1050jueves"></td>
                                        <td id="1050viernes"></td>
                                        <td id="1050sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >11:00</td>
                                        <td id="1100lunes"></td>
                                        <td id="1100martes"></td>
                                        <td id="1100miércoles"></td>
                                        <td id="1100jueves"></td>
                                        <td id="1100viernes"></td>
                                        <td id="1100sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >11:30</td>
                                        <td id="1150lunes"></td>
                                        <td id="1150martes"></td>
                                        <td id="1150miércoles"></td>
                                        <td id="1150jueves"></td>
                                        <td id="1150viernes"></td>
                                        <td id="1150sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >12:00</td>
                                        <td id="1200lunes"></td>
                                        <td id="1200martes"></td>
                                        <td id="1200miércoles"></td>
                                        <td id="1200jueves"></td>
                                        <td id="1200viernes"></td>
                                        <td id="1200sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >12:30</td>
                                        <td id="1250lunes"></td>
                                        <td id="1250martes"></td>
                                        <td id="1250miércoles"></td>
                                        <td id="1250jueves"></td>
                                        <td id="1250viernes"></td>
                                        <td id="1250sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >13:00</td>
                                        <td id="1300lunes"></td>
                                        <td id="1300martes"></td>
                                        <td id="1300miércoles"></td>
                                        <td id="1300jueves"></td>
                                        <td id="1300viernes"></td>
                                        <td id="1300sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >13:30</td>
                                        <td id="1350lunes"></td>
                                        <td id="1350martes"></td>
                                        <td id="1350miércoles"></td>
                                        <td id="1350jueves"></td>
                                        <td id="1350viernes"></td>
                                        <td id="1350sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >14:00</td>
                                        <td id="1400lunes"></td>
                                        <td id="1400martes"></td>
                                        <td id="1400miércoles"></td>
                                        <td id="1400jueves"></td>
                                        <td id="1400viernes"></td>
                                        <td id="1400sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >14:30</td>
                                        <td id="1450lunes"></td>
                                        <td id="1450martes"></td>
                                        <td id="1450miércoles"></td>
                                        <td id="1450jueves"></td>
                                        <td id="1450viernes"></td>
                                        <td id="1450sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >15:00</td>
                                        <td id="1500lunes"></td>
                                        <td id="1500martes"></td>
                                        <td id="1500miércoles"></td>
                                        <td id="1500jueves"></td>
                                        <td id="1500viernes"></td>
                                        <td id="1500sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >15:30</td>
                                        <td id="1550lunes"></td>
                                        <td id="1550martes"></td>
                                        <td id="1550miércoles"></td>
                                        <td id="1550jueves"></td>
                                        <td id="1550viernes"></td>
                                        <td id="1550sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >16:00</td>
                                        <td id="1600lunes"></td>
                                        <td id="1600martes"></td>
                                        <td id="1600miércoles"></td>
                                        <td id="1600jueves"></td>
                                        <td id="1600viernes"></td>
                                        <td id="1600sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >16:30</td>
                                        <td id="1650lunes"></td>
                                        <td id="1650martes"></td>
                                        <td id="1650miércoles"></td>
                                        <td id="1650jueves"></td>
                                        <td id="1650viernes"></td>
                                        <td id="1650sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >17:00</td>
                                        <td id="1700lunes"></td>
                                        <td id="1700martes"></td>
                                        <td id="1700miércoles"></td>
                                        <td id="1700jueves"></td>
                                        <td id="1700viernes"></td>
                                        <td id="1700sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >17:30</td>
                                        <td id="1750lunes"></td>
                                        <td id="1750martes"></td>
                                        <td id="1750miércoles"></td>
                                        <td id="1750jueves"></td>
                                        <td id="1750viernes"></td>
                                        <td id="1750sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >18:00</td>
                                        <td id="1800lunes"></td>
                                        <td id="1800martes"></td>
                                        <td id="1800miércoles"></td>
                                        <td id="1800jueves"></td>
                                        <td id="1800viernes"></td>
                                        <td id="1800sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >18:30</td>
                                        <td id="1850lunes"></td>
                                        <td id="1850martes"></td>
                                        <td id="1850miércoles"></td>
                                        <td id="1850jueves"></td>
                                        <td id="1850viernes"></td>
                                        <td id="1850sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >19:00</td>
                                        <td id="1900lunes"></td>
                                        <td id="1900martes"></td>
                                        <td id="1900miércoles"></td>
                                        <td id="1900jueves"></td>
                                        <td id="1900viernes"></td>
                                        <td id="1900sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >19:30</td>
                                        <td id="1950lunes"></td>
                                        <td id="1950martes"></td>
                                        <td id="1950miércoles"></td>
                                        <td id="1950jueves"></td>
                                        <td id="1950viernes"></td>
                                        <td id="1950sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >20:00</td>
                                        <td id="2000lunes"></td>
                                        <td id="2000martes"></td>
                                        <td id="2000miércoles"></td>
                                        <td id="2000jueves"></td>
                                        <td id="2000viernes"></td>
                                        <td id="2000sábado"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>

                </div>
            </div>

          </form>
      </div>
    </div><!--/.container-->
</div>

<script type="text/javascript">

    var medico = $('#medico');
    var dias = new Array();
    var divCalendar = $("#datepicker");
    var btn_buscarmedico = $("#btn_buscarmedico");
    var inputTurno = $("#dia-turno");
    var inputH_pref = $("#h_pref");

    var especialidad  = $("#especialidades");
    var grilla = $("#grilla tbody");
    var divContent = $("#content-medico");
    var divRespuesta = $("#content-respuesta");
    var horas = grilla.find('td');
    var divPacte = $("#datos_paciente");
    var divCita = $("#datos_cita");
    var divComentario = $(".comentarios");

    var str_paso1 = "1. Llena tus datos:<span>Necesitamos tu informaci&oacute;n para contactarnos contigo</span>";
    var str_paso2 = "2. ¿D&oacute;nde te duele? :<span>Selecciona tu dolencia, as&iacute; podremos ayudarte a elegir tu especialista</span>";
    var str_paso3 = "3. Escoge Turno :<span>Da click en la tabla horario; o si tienes un médico en mente, seleccionalo para saber los turnos que tiene disponibles</span>";
    var str_paso4 = "4. Elije un dia :<span>Recuerda seleccionar una fecha para separar tu pre-cita</span>";

    var rpta="";

    especialidad.change(fn_medicoByEspecialidad);
    especialidad.add(medico).change(fn_pintarHoras);

    $("#RegistrarCita").on('click',function(){
      var request="";
      if(request==true){
        request.abort();
      }
      request = $.ajax({
      url:"<?php  echo base_url('Correo/sendMailGmail')?>",
      type:"Post",
       dataType: "json",
      data:{"rpta":rpta,"paciente":$("#p_paciente").attr('value'),"asunto":$("#p_asunto").attr('value')}
      });
      console.log($("#p_paciente").attr('value'));
      $("#buttonclose2")[0].click()
      alert("Su pre-cita ha sido registrada, espera que pronto nos comunicaremos contigo");
      window.location.href = "<?php  echo base_url('cita')?>";
    });

    $("#formulario").submit(function() {
      return false
    });
    function fn_modal() {

      divRespuesta.html("");

      var inputTurno_dia = inputTurno.attr('value').split(/[-]/);
      rpta="";
      rpta= rpta +"<p>Está generando una Pre-Cita con los siguientes datos: </p>";
      rpta= rpta +"<li><b>M&eacute;dico: &nbsp;</b>"+$("#medico option:selected").text() + "</li>";
      rpta= rpta +"<li><b>Fecha: &nbsp;</b>"+ $("#fecha").datepicker({ dateFormat: 'yy-mm-dd' }).val() +"</li>";
      rpta= rpta +"<li><b>Turno: &nbsp;</b>"+ inputTurno_dia[1] +"</li>";
      rpta= rpta +"<li><b>Hora de preferencia: &nbsp;</b>"+inputH_pref.val()  + "</li>";
      rpta= rpta +"<h4>Recuerde que la hora solo es una referencia, al momento de llamarlo confirmaremos la Cita Final</h4>";
      divRespuesta.append(rpta);
      $("#modal_respuesta").modal();
    }
    function fn_mostrarDataPicker(){
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
            if (inputTurno) {
              var inputTurno_dia = inputTurno.attr('value').split(/[-]/);

              if(inputTurno_dia[0] ==="lunes"){
                delete dias[1];
              }
              if(inputTurno_dia[0] ==="martes"){
                delete dias[2];
              }
              if(inputTurno_dia[0] ==="miércoles"){
                delete dias[3];
              }
              if(inputTurno_dia[0] ==="jueves"){
                delete dias[4];
              }
              if(inputTurno_dia[0] ==="viernes"){
                delete dias[5];
              }
              if(inputTurno_dia[0] ==="sábado"){
                delete dias[6];
              }
            }else{
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
              }


                divCalendar.html("");
                var calendar = "";
                var f = new Date();

                calendar = calendar +'<div class="input-group">';
                  calendar = calendar +'<span class="input-group-addon input-modal" id="basic-addon1"><span class=" fa fa-calendar"></span></span>';
                  calendar = calendar + '<input type="text" id="fecha" name="fecha" data-date-language="es" class="form-control" aria-describedby="basic-addon1" required="required" autocomplete="off">';
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
    }

    function fn_medicoByEspecialidad(){
        var request;
        var options;
          medico.html("");
          idEspecialidad = especialidad.val();
          if (idEspecialidad>0) {
            $("#dos").addClass('paso_realizado');
            $("#tres").toggleClass('paso_enproceso');
            divComentario.html(str_paso3);

          }
          if(request==true){
            request.abort();
          }
          request = $.ajax({
          url:"<?php  echo base_url('trabajador/medicoByEspecialidad')?>",
          type:"Post",
           dataType: "json",
          data:{"opt":idEspecialidad}
          });

          request.done(function (response,textStatus,jqXHR) {
            console.log(response);
            options = options + "<option value='-1'>Seleccione médico</option>";
            for (var i = 0; i < response.length; i++) {
              options = options +"<option value='"+ response[i].idTrabajador +"'>"+ response[i].apPaterno +" "+response[i].apMaterno+", "+response[i].nombre+"</option>";
            }
            medico.append(options);
          });
          request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
          });

          request.always(function () {
                console.log("termino la ejecucion de ajax");
          });
    }

    function fn_pintarHoras(value) {
            var request;
            if(value)
            {
              inputTurno.attr('value','');
              divCalendar.html("");
            }
              divContent.html("");
              idEspecialidad = especialidad.val();
              if(request==true){
                request.abort();
              }
              request = $.ajax({
              url:"<?php  echo base_url('horario/mostrarByEspecialidad')?>",
              type:"Post",
               dataType: "json",
              data:{"idEspecialidad":idEspecialidad, "idMedico":medico.val()}
              });
              console.log(medico.val());
              request.done(function (response,textStatus,jqXHR) {
              horas.removeClass("hora-active");
                for(var i=0, len=response.length; i<len; i++) {
                  var ini = response[i].hora_inicial.split(/[ :]/);
                  var fin = response[i].hora_final.split(/[ :]/);

                  if(parseInt(ini[1])>=30){x='50'}else{x='00'}
                  if(parseInt(fin[1])===00){y='00',hy=0}else{if(parseInt(fin[1])<=30){y='50',hy=0}else{y='00',hy=100}}
                  var numIni = parseInt(ini[0]+ x);
                  var numFin = parseInt(fin[0]+ y)+hy;

                  for (var j = numIni; j < numFin; j+=50) {
                    $("#"+j+response[i].dia).addClass("hora-active");
                    console.log("#"+j+response[i].dia);
                  }
                    //console.log(JSON.stringify(response[i].dia+n.getHours()));

                }
              });
              request.fail(function (jqXHR,textStatus,thrown) {
                    console.log("Erros :" + textStatus);
              });

              request.always(function () {
                    console.log("termino la ejecucion de ajax");
              });
      }

      grilla.on('click','td',function(){
             var celda = $(this);
             var hora_dia=celda.attr('id');
             var horaBusq;
             var diaBusq;

             if(celda.hasClass('hora-active')){
               var valor=parseInt(hora_dia);

               if(valor%100>0)
               {
                 temp=valor/100-0.5;
                 h="0" + temp;
                 h = h.substring(h.length - 2, h.length);
                 m='30:00'
               }
               else {
                 h=valor/100;
                 m='00:00'
               }
               horaBusq=h+":"+m;
               var turno="";
               if(horaBusq<="14:00:00")
               {
                 turno="mañana";
               }
               else {
                 turno="tarde";
               }
               diaBusq =  hora_dia.substring(valor.toString().length, hora_dia.length);
               inputTurno.attr("value",diaBusq+"-"+turno);
               inputH_pref.attr("value",horaBusq);
               fn_mostrarDataPicker();

               var request;

            divContent.html("");

            if(request==true){
              request.abort();
            }
            idEsp = especialidad.val();
            request = $.ajax({
            url:"<?php  echo base_url('trabajador/medicoByHD')?>",
            type:"Post",
            dataType: "json",
            data:{dia: diaBusq, hora:horaBusq, idEspecialidad:idEsp}
            });

           request.done(function (response,textStatus,jqXHR) {
             console.log(response);
             for (var i = 0; i < response.length; i++) {
               content = "";
               content = content + '<div class="col-xs-12 col-sm-6  col-lg-6 medico" >';
                 content = content + '<div class="row c">';
                   content = content + '<div class="col-sm-5 col-xs-6 imagen" style="padding:0;">';
                       content = content + '<img style="width:90%" src="<?= base_url();?>/plantillas/images/medicos/'+response[i].foto+'" alt="" />';
                   content = content + '</div>';
                   content = content + '<div class="col-sm-7 col-xs-6 texto" >';
                     content = content + '<h1>'+response[i].apPaterno+' '+response[i].apMaterno+', '+response[i].nombre+'</h1>';
                     content = content + '<p>'+response[i].hora_inicial.substring(0, response[i].hora_inicial.length-3)+" - "+response[i].hora_final.substring(0, response[i].hora_final.length-3) +'</p>';
                     content = content + '<button type="button" class="btn btn-info btn-sm" class ="close" data-dismiss="modal" aria-hidden="true" name="button" id='+response[i].idTrabajador+' ><i class="fa fa-eye"></i> Separar cita</button>';
                   content = content + '</div>';

                 content = content + '</div>';
               content = content + '</div>';

               divContent.append(content);

             }

          });
          if(medico.val()<0){
              $("#modal_medico").modal();
          }
            fn_paso3();

        }
       });

       function fn_paso3() {
         $("#tres").addClass('paso_realizado');
         $("#cuatro").addClass('paso_enproceso');
         divComentario.html(str_paso4);
       }

       $("#content-medico").on('click','button',function(){
         var id = $(this).attr('id');

         if(!$("#fecha").text()){



         }
         else {

         }
          medico.val(id);
          fn_pintarHoras();
          fn_mostrarDataPicker();
         $("#buttonclose")[0].click()

       });




    function validar(){

    /*creo una variable de tipo booleana que en principio tendrá un valor true(verdadero),
    y que retornaremos en false(falso) cuando nuestra condición no se cumpla*/
    var todo_correcto = true;

    /*El primer campo que comprobamos es el del nombre. Lo traemos por id y verificamos
    la condición, en este caso, por ejemplo, le decimos que tiene que tener más de 2 dígitos
    para que sea un nombre válido. Si no tiene más de dos dígitos, la variable todo_correcto
    devolverá false.*/

    if(document.getElementById('especialidades').value < 0 ){
      todo_correcto = false;
    }

    /*Hacemos lo mismo con el campo dirección. En este caso le pediremos al usuario que
    introduzca al menos 10 caracteres.*/
    if(document.getElementById('medico').value  <0 ){
      todo_correcto = false;
    }

    if(document.getElementById('fecha').value  =="" ){
      todo_correcto = false;
    }
    /*Para comprobar la edad, utilizaremos la función isNaN(), que nos dirá si el valor
    ingresado NO es un número (NaN son las siglas de Not a Number). Si la edad no es un
    número, todo_correcto será false.*/
    // if(isNaN(document.getElementById('p_apMaterno').value)){
    //   todo_correcto = false;
    // }

    /*Para comprobar el email haremos uso de una expresión regular. Esto es una secuencia
    de caracteres que nos dirá si el valor ingresado por el usuario tiene estructura de
    correo electrónico. Lo que hacemos es obtener el value del campo de texto destinado
    al email, y le aplicamos el método test() del objeto global RegExp(que nos permite
    trabajar con expresiones regulares).*/
    // var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    // var email = document.form1.email.value;
    // if (!expresion.test(email)){
    //   todo_correcto = false;
    // }

    /*Para validar el select debemos añadir un value distinto a cada option. En el
    código, he asignado un value con  valor vacío al primer option. Los siguientes,
    al no estar definidos toman el valor por defecto. Por tanto, si todos tienen value,
    lo único que tenemos que comprobar es que este no sea vacío. Si es vacío, todo_correcto
    será false.*/
    // if(document.getElementById('estudios').value == ''){
    //   todo_correcto = false;
    // }
    //
    // /*Validaremos también el checkbox del formulario. Todos los
    // checkbox tienen una propiedad llamada checked. Entonces
    // hacemos el if y decimos que si nuestro checkbox NO está
    // checked, estará mal.*/
    // if(!document.getElementById('acepto').checked){
    //   todo_correcto = false;
    // }

    /*Por último, y como aviso para el usuario, si no está todo bién, osea, si la variable
    todo_correcto ha devuelto false al menos una vez, generaremos una alerta advirtiendo
    al usuario de que algunos datos ingresados no son los que esperamos.*/
    if(!todo_correcto){
    alert('Algunos campos no están correctos, vuelva a revisarlos');
    }
    if (todo_correcto) {
      fn_modal();
    }
    return todo_correcto;

    }

    </script>
