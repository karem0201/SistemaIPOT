<div id="page-wrapper">
      <div class="container">
           <div class="row">
                  <div class="col-lg-10">
                       <h1></h1>
                 </div>
           </div> <!-- row -->
           <div class="col-lg-10 col-lg-offset-0 col-md-4 col-md-offset-1 ">
                 <?php echo form_open('cirugia/insertar'); ?>
                 <div class="row barra" >
                       <div class="col-lg-4">
                            <label for="paciente">Paciente: </label>
                            <input  type="text" id="pacientes"  name="name" class=" form-control" data-items="4"  autocomplete="off">
                      </div> <!-- col-lg-4 -->
                      <div class="col-lg-3">
                           <label for="hhcc">N° de historia: </label>
                           <input  type="text"  name="hhcc" class=" form-control" data-items="4"  autocomplete="off">
                    </div><!-- col-lg-3 -->
                    <div class="col-lg-3">
                         <label for="hhcc">Edad: </label>
                         <input  type="text" name="edad" class=" form-control" data-items="4"  autocomplete="off">
                  </div><!-- col-lg-3 -->
                    <div class="col-lg-1">
                          <label for="" style="color:rgba(175, 40, 189, 0)">""</label> <!-- artificio para alinear el boton -->
                          <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#nuevopaciente"><span class="fa fa-plus" ></span></button>
                    </div><!-- col-lg-1 -->
              </div> <!--row barra-->
              <br>
              <div class="row barra">
                    <div class="col-lg-1">
                       <?php
                       $data=array('min'=>0,'max'=>10,'value'=>1);
                       echo form_input_number('Cant','cantidad',$data);
                       ?>
                    </div>
                    <div class="col-lg-4">
                             <div class="form-group">
                                   <label class = "name" for="">-</label>
                                   <br>
                                   <button type="button" class="btn btn-info" id="agregar" name="agregar" data-toggle="popover" data-trigger="focus" title="karem" data-content="And here's some amazing content. It's very engaging. Right?">agregar</button>
                             </div><!-- form-group -->
                 </div><!--col-lg-4-->
           </div><!--row barra-->
           <div class="row">
                 <div class="col-lg-10">
                       <div class="panel panel-default">
                             <div class="panel-heading">
                                   Striped Rows
                              </div><!-- /.panel-heading -->
                              <div class="panel-body">
                                   <div class="table-responsive">
                                       <table class="table table-striped" id="grilla">
                                           <thead>
                                               <tr>
                                                   <th>id</th>
                                                   <th>Categoria</th>
                                                   <th>Material</th>
                                                   <th>Cantidad</th>
                                                   <th>Accion</th>
                                               </tr>
                                           </thead>
                                           <tbody >

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
                <div class="col-lg-8">
                     <button type="submit" class="btn btn-success" id="registrar" name="registrar" disabled >Registrar</button>
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
               });












      </script>
