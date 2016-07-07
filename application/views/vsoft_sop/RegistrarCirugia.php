<div id="page-wrapper">
      <div class="container">
           <div class="row">
                  <div class="col-lg-8">
                       <h1></h1>
                 </div>
           </div> <!-- row -->
           <div class="col-lg-8 col-lg-offset-1 col-md-4 ">
                 <?php echo form_open('cirugia/insertar'); ?>
                 <div class="row barra" >
                       <div class="col-lg-5">
                            <select class="chosen form-control chosen-select" name ="paciente" id="s_pacientes" data-placeholder="Seleccione un paciente...">
                                  <?php
                                  $opt="<option value=''></option>";
                                  foreach ($paciente as $key){
                                        $opt .="<option value=".$key->idPaciente.">".$key->apPaterno." ".$key->apMaterno.", ".$key->nombre."</option>";
                                  }
                                  echo $opt;
                                   ?>
                            </select>
                      </div> <!-- col-lg-5 -->
                      <div class="col-lg-3 col-xs-3">
                           <input  type="text"  name="hhcc" id="hhcc" class=" form-control input-sm" disabled="" placeholder="hhcc">
                           <input  type="text"  name="id" id="idPact" style="display:none;">
                    </div><!-- col-lg-3 -->
                    <div class="col-lg-2 col-xs-3">
                         <input  type="text" name="edad" id="edad" class=" form-control input-sm" data-items="4"  autocomplete="off" readonly="true" placeholder="Edad">
                  </div><!-- col-lg-3 -->
                    <div class="col-lg-1">
                          <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#nuevopaciente"><span class="fa fa-user-plus" ></span></button>
                    </div><!-- col-lg-1 -->
              </div> <!--row barra-->
              <br>
              <div class="row barra">
                    <div class="col-lg-4">
                       <select class="form-control" id="idCategoria">
                             <option value="0">Seleccione categoria...</option>
                            <?php
                               $opt='';
                              foreach ($producto as $key ) {
                                    $opt.="<option value=".$key->idTipoMat.">".$key->tipoMat."</option>";
                                  }
                                  echo $opt;
                               ?>
                       </select>
                    </div>
                    <div class="col-lg-4">
                       <select class="form-control" id="idMaterial">
                             <option value="0">Seleccione material...</option>
                       </select>
                    </div>
                    <div class="col-lg-2">
                       <input type="text" class="form-control " id="cant" value="1">
                    </div>
                    <div class="col-lg-1">
                          <button type="button" id="agregar" class="btn btn-danger btn-block" ><span class="fa fa-plus" ></span></button>
                 </div><!--col-lg-4-->
           </div><!--row barra-->
           <br>
           <div class="row barra " id="tabla-content">
                 <div class="col-lg-15">
                       <div class="panel panel-default">
                              <div class="panel-body mitabla">
                                   <div class="table-responsive " >
                                       <table class="table table-striped " id="grilla">
                                           <thead>
                                               <tr>
                                                   <th>id</th>
                                                   <th>Material</th>
                                                   <th >Cant.</th>
                                                   <th></th>
                                               </tr>
                                           </thead>
                                           <tbody >
                                                 <tr>
                                                    <td>2</td>
                                                    <td>hoja shaver 5.0 mm</td>
                                                    <td >1</td>
                                                    <td>x</td>
                                                </tr>
                                                <tr>
                                                   <td>3</td>
                                                   <td>Punta de radiofrecuencia</td>
                                                   <td >1</td>
                                                   <td>x</td>
                                               </tr>
                                           </tbody>
                                           <tfoot>
                                               <tr>
                                                     <td colspan="5"><strong>Cantidad:</strong> <span id="span_cantidad">4</span> materiales.</td>
                                                 </tr>
                                             </tfoot>
                                       </table>
                                   </div><!-- /.table-responsive -->
                              </div><!-- /.panel-body -->
                           </div><!-- /.panel -->
                     </div> <!-- col-lg-10 -->
                </div><!--row -->
                <div class="col-lg-8 desactive"  id="registrar">
                      <br>
                     <button type="submit" class="btn btn-success"  name="registrar" >Registrar</button>
               </div><!-- col-lg-8 -->
               <?php echo form_close(); ?>
      </div> <!-- col-lq-10 -->
</div><!--container -->
</div> <!-- page-wraper-->



      <script type="text/javascript">

        $(document).ready( function() {
              var categoria  = $("#idCategoria");
                  categoria.change(function() {
                   $("#idCategoria option:selected").each(function() {
                       idCategoria = categoria.val();
                       $.post("<?php echo base_url(); ?>materiales/fillMateriales", {
                           idCategoria : idCategoria
                       }, function(data) {
                           $("#idMaterial").html(data);
                       });
                   });

                   $('#Cant').removeAttr('required');


               });

               var paciente  = $("#s_pacientes");
               var hhcc = $("#hhcc");
               var edad = $("#edad");
               var idPact= $("#idPact");
               var d = new Date();

               paciente.change(function(e) {
                    var value = $(this).val();
                    var id = $(this).attr('id');
                    var request;
                    if(request==true){
                      request.abort();
                    }
                  request = $.ajax({
                    url:"<?php  echo base_url('paciente/mostrarById')?>",
                    type:"Post",
                     dataType: "json",
                    data:"postname=" + value +"&id=" +id
                  });

                  request.done(function (response,textStatus,jqXHR) {
                    hhcc.val(response.hhcc);
                    edad.val(response.fecNac);
                    idPact.val(response.idPaciente);
                  });
                  request.fail(function (jqXHR,textStatus,thrown) {
                    console.log("Erros :" + textStatus);
                  });

                  request.always(function () {
                    console.log("termino la ejecucion de ajax");
                  });

                  e.preventDefault();
                });


               });












      </script>
