<div class="modal fade" id="asistentecita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                  <div class="row" id="tabla-content">
                      <div class="panel panel-default">
                          <div class="panel-body mitabla">
                              <div class="table-responsive " >
                                  <table class="table table-striped horario" id="grilla">
                                    <thead>
                                      <tr>
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
                                        <td id="lunes" class="dia-desactive">
                                          <button type="button" name="lunes" class="btn btn-success">Lunes</button>
                                        </td>
                                        <td id="martes" class="dia-desactive">
                                          <button type="button" name="martes" class="btn btn-success">Martes</button>
                                        </td>
                                        <td id="miércoles" class="dia-desactive">
                                          <button type="button" name="miércoles" class="btn btn-success">Miercoles</button>
                                        </td>
                                        <td id="jueves" class="dia-desactive">
                                          <button type="button" name="jueves" class="btn btn-success">Jueves</button>
                                        </td>
                                        <td id="viernes" class="dia-desactive">
                                          <button type="button" name="viernes" class="btn btn-success">Viernes</button>
                                        </td>
                                        <td id="sábado" class="dia-desactive">
                                          <button type="button" name="sábado" class="btn btn-success">Sabado</button>
                                        </td>
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
      var dias = grilla.find("td");
      var body = grilla;
      var t;
      var divContent = $("#content-medico");



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
                dias.addClass("dia-desactive");
                t=response;
                for(var i=0, len=response.length; i<len; i++) {
                      $("#"+ response[i].dia).removeClass("dia-desactive");
                }
              });
              request.fail(function (jqXHR,textStatus,thrown) {
                    console.log("Erros :" + textStatus);
          });

          request.always(function () {
                console.log("termino la ejecucion de ajax");
          });
       });



           dias.on('click','button',function(){
             var dia = $(this).attr('name');
             var request;
             divContent.html("");
             console.log(dia);
             for (var i = 0; i < t.length; i++) {
              if(t[i].dia===dia)
              {
                if(request==true){
                  request.abort();
                }
                  id=t[i].idTrabajador;
                  request = $.ajax({
                  url:"<?php  echo base_url('trabajador/medicoById')?>",
                  type:"Post",
                   dataType: "json",
                  data:"id=" +id
                  });                  

                  request.done(function (response,textStatus,jqXHR) {
                    console.log(response);
                    content = "";
                    content = content + '<div class="col-xs-6 col-sm-4  col-lg-4 medico" >';
                      content = content + '<div class="row c">';
                        content = content + '<div class="col-sm-5 col-xs-6 imagen" style="padding:0;">';
                            content = content + '<img style="width:90%" src="<?= base_url();?>/plantillas/images/medicos/'+response[0].foto+'" alt="" />';
                        content = content + '</div>';
                        content = content + '<div class="col-sm-7 col-xs-6 texto" >';
                          content = content + '<h1>'+response[0].apPaterno+' '+response[0].apMaterno+', '+response[0].nombre+'</h1>';
                          content = content + '<p>'+$("#especialidad option:selected").text() +'</p>';
                          content = content + '<button type="button" class="btn btn-info btn-sm" id='+response[0].idTrabajador+'><i class="fa fa-eye"></i> Separar cita</button>';
                        content = content + '</div>';

                      content = content + '</div>';
                    content = content + '</div>';

                    divContent.append(content);
                  });

                  request.fail(function (jqXHR,textStatus,thrown) {
                        console.log("Error :" + textStatus);
                  });

                  request.always(function () {
                        console.log("termino la ejecucion de ajax");
                  });

              }

             }
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
