<div id="page-wrapper">
      <div class="container">
            <br>
            <div class="row">
                  <div class="row-md col-md-10  col-sm-8">
                       DATOS DE LA CIRUGIA
                  </div>
            </div> <!-- row -->
            <div class="row ">
                 <form role="form" action="<?= base_url()?>cirugia/registrar" method="post" accept-charset='utf-8'>
                <div class=" col-md-3 col-md-push-7 ">
                      <div class=" row ">
                           <div class="col-md-11 col-md-offset-1 col-sm-8  barra ">
                                <div class="row col-md-12 col-sm-6 ">
                                      <input type="date" class="form-control input-sm" name="fecha" required="required">
                                </div>
                                <div class="row col-md-12 col-sm-5 ">
                                      <input type="time" class="form-control input-sm"name="hora" required="required">
                                </div>
                                <div  class="row col-md-12">
                                      <select class="form-control chosen-select-multiple " name="diagnostico" required="required" data-placeholder="Seleccione diagnostico..." multiple>
                                            <option value="">opcion1</option>
                                           <option value="">opcion2</option>
                                           <option value="">opcion3</option>
                                           <option value="">opcion4</option>
                                           <option value="">opcion5</option>
                                           <option value="">opcion6</option>
                                     </select>
                               </div>
                               <div  class="row col-md-12">
                                     <select class="chosen-select-multiple form-control" name="procedimiento[]" required="required" data-placeholder="Seleccione procedimientos..." multiple>
                                           <?php foreach ($procedimiento as $key){
                                                      $opt.="<option value=".$key->idProcedimiento.">".$key->descripcion."</option>";
                                          } echo $opt;?>
                                     </select>
                               </div>
                         </div> <!--col-->
                   </div><!--row-->
            </div><!-- col-5-->
            <div class="col-md-7 col-md-pull-3 col-sm-8 ">
                       <div class="row barra">
                             <div class="col-md-6 ">
                                   <select class="chosen form-control chosen-select" name ="paciente" id="s_pacientes" data-placeholder="Seleccione un paciente..." required="required">
                                        <?php
                                        $opt="<option value=''></option>";
                                        foreach ($paciente as $key){
                                              $opt .="<option value=".$key->idPaciente.">".$key->apPaterno." ".$key->apMaterno.", ".$key->nombre."</option>";
                                        }
                                        echo $opt;
                                        ?>
                                   </select>
                             </div> <!-- col-lg-5 -->
                             <div class="col-md-3 " >
                                   <input  type="text"  name="hhcc" id="hhcc" class=" form-control input-sm" disabled="" placeholder="hhcc">
                                   <input  type="hidden"  name="arrayMat[]" id="arrayMat" >
                                   <input  type="hidden"  name="arrayCant" id="arrayCant" >
                             </div><!-- col-lg-3 -->
                             <div class="col-md-2">
                                   <input  type="text" name="edad" id="edad" class=" form-control input-sm" data-items="4"  autocomplete="off" readonly="true" placeholder="Edad">
                             </div><!-- col-lg-3 -->
                             <div class="col-md-1">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#nuevopaciente"><span class="fa fa-user-plus" ></span></button>
                             </div><!-- col-lg-1-->
                       </div> <!-- row -->
                       <div class="row barra ">
                             <div class="col-md-5 ">
                                   <select  id="idCategoria" class="chosen form-control chosen-select"  data-placeholder="Seleccione categoria..." name="idCategoria">
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
                           <div class="col-md-4">
                                  <select class="form-control" id="idMaterial">
                                        <option value="0">Seleccione material...</option>
                                        <option value="1">iiuyi</option>
                                        <option value="2">as</option>
                                  </select>
                           </div>
                           <div class="col-md-2">
                                  <input type="text" class="form-control " id="cant" value="1">
                           </div>
                           <div class="col-md-1">
                                  <button type="button" id="agregar" class="btn btn-danger" ><span class="fa fa-plus" ></span></button>
                           </div><!--col-lg-4-->
                      </div><!--row barra-->
                <div class="row barra desactive" id="tabla-content">
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

                                              </tbody>
                                              <tfoot>
                                                 </tfoot>
                                           </table>
                                       </div><!-- /.table-responsive -->
                                  </div><!-- /.panel-body -->
                              </div><!-- /.panel -->

                   </div><!-- col-lg-7 -->
            </div><!--row derecha-->

      </div>
              <br>



                <div class="col-lg-8"  >
                      <br>
                     <button type="submit" id="registrar" class="btn btn-success  desactive"  name="registrar" disabled="">Registrar</button>
               </div><!-- col-lg-8 -->
               <?php echo form_close(); ?>
      </div> <!-- col-lq-10 -->

</div><!--container -->
</div> <!-- page-wraper-->



      <script type="text/javascript">

        $(document).ready( function() {
              var categoria  = $("#idCategoria");

                  categoria.change(function() {
                  var request;
                  idCategoria = categoria.val();
                  if(request==true){
                    request.abort();
                  }
                  request = $.ajax({
                  url:"<?php  echo base_url('materiales/mostrar')?>",
                  type:"Post",
                   dataType: "json",
                  data:"idCategoria=" +idCategoria
                  });

                  request.done(function (response,textStatus,jqXHR) {
                        opt="";li="";
                        for(var i=0, len=response.length; i<len; i++) {
                             var opt = opt + "<option value="+response[i].idMaterial+">"+ response[i].nombre+" "+response[i].medida+"</option>";
                        }
                      $("#idMaterial").html(opt);
                  });
                  request.fail(function (jqXHR,textStatus,thrown) {
                        console.log("Erros :" + textStatus);
                  });

                  request.always(function () {
                        console.log("termino la ejecucion de ajax");
                  });
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
