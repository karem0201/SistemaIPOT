<div class=" " id="asistentecita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                    <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button" id="buttonclose">&times</button>
                    <h4>ASISTENTE PARA SELECCIONAR MEDICO</h4>
              </div> <!-- modal-header -->
              <div class="modal-body">
                <form class="especialidad" action="index.html" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control" name="especialidad" id="especialidad">
                        <option selected>Lugar de su dolencia...</option>
                        <?php $esp="";
                        foreach ($especialidad as $key) {
                          $esp .="<option value=".$key->idEspecialidad.">".$key->descripcion."</option>";
                        } echo $esp;
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="row" id="tabla-content" style=" height:300px; overflow: scroll;">
                      <div class="panel panel-default">
                          <div class="panel-body mitabla">
                              <div class="table-responsive " >
                                  <table class=" table_horario" id="grilla">
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
                                    <tbody>
                                      <tr >
                                        <td >08:00 - 08:30</td>
                                        <td id="800lunes"></td>
                                        <td id="800martes"></td>
                                        <td id="800miércoles"></td>
                                        <td id="800jueves"></td>
                                        <td id="800viernes"></td>
                                        <td id="800sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          08:30 - 09:00
                                        </td>
                                        <td id="850lunes"></td>
                                        <td id="850martes"></td>
                                        <td id="850miércoles"></td>
                                        <td id="850jueves"></td>
                                        <td id="850viernes"></td>
                                        <td id="850sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          09:00 - 09:30
                                        </td>
                                        <td id="900lunes"></td>
                                        <td id="900martes"></td>
                                        <td id="900miércoles"></td>
                                        <td id="900jueves"></td>
                                        <td id="900viernes"></td>
                                        <td id="900sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          09:30 - 10:00
                                        </td>
                                        <td id="950lunes"></td>
                                        <td id="950martes"></td>
                                        <td id="950miércoles"></td>
                                        <td id="950jueves"></td>
                                        <td id="950viernes"></td>
                                        <td id="950sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          10:00 - 10:30
                                        </td>
                                        <td id="1000lunes"></td>
                                        <td id="1000martes"></td>
                                        <td id="1000miércoles"></td>
                                        <td id="1000jueves"></td>
                                        <td id="1000viernes"></td>
                                        <td id="1000sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          10:30 - 11:00
                                        </td>
                                        <td id="1050lunes"></td>
                                        <td id="1050martes"></td>
                                        <td id="1050miércoles"></td>
                                        <td id="1050jueves"></td>
                                        <td id="1050viernes"></td>
                                        <td id="1050sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >11:00 - 11:30</td>
                                        <td id="1100lunes"></td>
                                        <td id="1100martes"></td>
                                        <td id="1100miércoles"></td>
                                        <td id="1100jueves"></td>
                                        <td id="1100viernes"></td>
                                        <td id="1100sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          11:30 - 12:00
                                        </td>
                                        <td id="1150lunes">
                                        </td>
                                        <td id="1150martes">
                                        </td>
                                        <td id="1150miércoles">
                                        </td>
                                        <td id="1150jueves">
                                        </td>
                                        <td id="1150viernes">
                                        </td>
                                        <td id="1150sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          12:00 - 12:30
                                        </td>
                                        <td id="1200lunes">
                                        </td>
                                        <td id="1200martes">
                                        </td>
                                        <td id="1200miércoles">
                                        </td>
                                        <td id="1200jueves">
                                        </td>
                                        <td id="1200viernes">
                                        </td>
                                        <td id="1200sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          12:30 - 13:00
                                        </td>
                                        <td id="1250lunes">
                                        </td>
                                        <td id="1250martes">
                                        </td>
                                        <td id="1250miércoles">
                                        </td>
                                        <td id="1250jueves">
                                        </td>
                                        <td id="1250viernes">
                                        </td>
                                        <td id="1250sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          13:00 - 13:30
                                        </td>
                                        <td id="1300lunes">
                                        </td>
                                        <td id="1300martes">
                                        </td>
                                        <td id="1300miércoles">
                                        </td>
                                        <td id="1300jueves">
                                        </td>
                                        <td id="1300viernes">
                                        </td>
                                        <td id="1300sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          13:30 - 14:00
                                        </td>
                                        <td id="1350lunes">
                                        </td>
                                        <td id="1350martes">
                                        </td>
                                        <td id="1350miércoles">
                                        </td>
                                        <td id="1350jueves">
                                        </td>
                                        <td id="1350viernes">
                                        </td>
                                        <td id="1350sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          14:00 - 14:30
                                        </td>
                                        <td id="1400lunes">
                                        </td>
                                        <td id="1400martes">
                                        </td>
                                        <td id="1400miércoles">
                                        </td>
                                        <td id="1400jueves">
                                        </td>
                                        <td id="1400viernes">
                                        </td>
                                        <td id="1400sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          14:30 - 15:00
                                        </td>
                                        <td id="1450lunes">
                                        </td>
                                        <td id="1450martes">
                                        </td>
                                        <td id="1450miércoles">
                                        </td>
                                        <td id="1450jueves">
                                        </td>
                                        <td id="1450viernes">
                                        </td>
                                        <td id="1450sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          15:00 - 15:30
                                        </td>
                                        <td id="1500lunes">
                                        </td>
                                        <td id="1500martes">
                                        </td>
                                        <td id="1500miércoles">
                                        </td>
                                        <td id="1500jueves">
                                        </td>
                                        <td id="1500viernes">
                                        </td>
                                        <td id="1500sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          15:30 - 16:00
                                        </td>
                                        <td id="1550lunes">
                                        </td>
                                        <td id="1550martes">
                                        </td>
                                        <td id="1550miércoles">
                                        </td>
                                        <td id="1550jueves">
                                        </td>
                                        <td id="1550viernes">
                                        </td>
                                        <td id="1550sábado">
                                        </td>
                                      </tr>

                                      <tr>
                                        <td >
                                          16:00 - 16:30
                                        </td>
                                        <td id="1600lunes"></td>
                                        <td id="1600martes"></td>
                                        <td id="1600miércoles"></td>
                                        <td id="1600jueves"></td>
                                        <td id="1600viernes"></td>
                                        <td id="1600sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          16:30 - 17:00
                                        </td>
                                        <td id="1650lunes"></td>
                                        <td id="1650martes"></td>
                                        <td id="1650miércoles"></td>
                                        <td id="1650jueves"></td>
                                        <td id="1650viernes"></td>
                                        <td id="1650sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >
                                          17:00 - 17:30
                                        </td>
                                        <td id="1700lunes"></td>
                                        <td id="1700martes"></td>
                                        <td id="1700miércoles"></td>
                                        <td id="1700jueves"></td>
                                        <td id="1700viernes"></td>
                                        <td id="1700sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >17:30 - 18:00</td>
                                        <td id="1750lunes"></td>
                                        <td id="1750martes"></td>
                                        <td id="1750miércoles"></td>
                                        <td id="1750jueves"></td>
                                        <td id="1750viernes"></td>
                                        <td id="1750sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >18:00 - 18:30</td>
                                        <td id="1800lunes"></td>
                                        <td id="1800martes"></td>
                                        <td id="1800miércoles"></td>
                                        <td id="1800jueves"></td>
                                        <td id="1800viernes"></td>
                                        <td id="1800sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >18:30 - 19:00</td>
                                        <td id="1850lunes"></td>
                                        <td id="1850martes"></td>
                                        <td id="1850miércoles"></td>
                                        <td id="1850jueves"></td>
                                        <td id="1850viernes"></td>
                                        <td id="1850sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >19:00 - 19:30</td>
                                        <td id="1900lunes"></td>
                                        <td id="1900martes"></td>
                                        <td id="1900miércoles"></td>
                                        <td id="1900jueves"></td>
                                        <td id="1900viernes"></td>
                                        <td id="1900sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >19:30 - 20:00</td>
                                        <td id="1950lunes"></td>
                                        <td id="1950martes"></td>
                                        <td id="1950miércoles"></td>
                                        <td id="1950jueves"></td>
                                        <td id="1950viernes"></td>
                                        <td id="1950sábado"></td>
                                      </tr>

                                      <tr>
                                        <td >20:00 - 20:30</td>
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
                  <div class="row" id="content-medico">




                    </div>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>

<script type="text/javascript">
$(document).ready( function() {

      var especialidad  = $("#especialidad");
      var grilla = $("#grilla tbody");
      var divContent = $("#content-medico");
      var horas = grilla.find('td');



          especialidad.change(function() {
              var request;
              divContent.html("");

              idEspecialidad = especialidad.val();
              if(request==true){
                request.abort();
              }
              request = $.ajax({
              url:"<?php  echo base_url('horario/mostrarByEspecialidad')?>",
              type:"Post",
               dataType: "json",
              data:"idEspecialidad=" +idEspecialidad
              });

              request.done(function (response,textStatus,jqXHR) {
                horas.removeClass("hora-active");
                for(var i=0, len=response.length; i<len; i++) {
                  var ini = response[i].hora_inicial.split(/[ :]/);
                  var fin = response[i].hora_final.split(/[ :]/);

                  if(ini[1]==='30'){x='50'}else{x='00'}
                  if(fin[1]==='30'){y='50'}else{y='00'}

                  var numIni = parseInt(ini[0]+ x);
                  var numFin = parseInt(fin[0]+ y);

                  for (var j = numIni; j < numFin; j+=50) {
                    $("#"+j+response[i].dia).addClass("hora-active");
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
           });



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
               diaBusq =  hora_dia.substring(valor.toString().length, hora_dia.length);
             }
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
               content = content + '<div class="col-xs-6 col-sm-4  col-lg-4 medico" >';
                 content = content + '<div class="row c">';
                   content = content + '<div class="col-sm-5 col-xs-6 imagen" style="padding:0;">';
                       content = content + '<img style="width:90%" src="<?= base_url();?>/plantillas/images/medicos/'+response[i].foto+'" alt="" />';
                   content = content + '</div>';
                   content = content + '<div class="col-sm-7 col-xs-6 texto" >';
                     content = content + '<h1>'+response[i].apPaterno+' '+response[i].apMaterno+', '+response[i].nombre+'</h1>';
                     content = content + '<p>'+response[i].hora_inicial.substring(0, response[i].hora_inicial.length-3)+" - "+response[i].hora_final.substring(0, response[i].hora_final.length-3) +'</p>';
                     content = content + '<button type="button" class="btn btn-info btn-sm" id='+response[i].idTrabajador+'><i class="fa fa-eye"></i> Separar cita</button>';
                   content = content + '</div>';

                 content = content + '</div>';
               content = content + '</div>';

               divContent.append(content);
             }

                  });
             //
            //       request.fail(function (jqXHR,textStatus,thrown) {
            //             console.log("Error :" + textStatus);
            //       });
             //
            //       request.always(function () {
            //             console.log("termino la ejecucion de ajax");
            //       });
             //
            //   }
             //
            //  }
       });


       $("#content-medico").on('click','button',function(){
         var medico = $("#medico");
         var id = $(this).attr('id');
         console.log(id);
         medico.val(id);
         medico.change();
         $("#buttonclose")[0].click()


       });

  });

</script>
