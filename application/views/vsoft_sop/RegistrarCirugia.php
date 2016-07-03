<div id="page-wrapper">
      <div class="container">
           <div class="row">
                  <div class="col-lg-10">
                       <h1></h1>
                 </div>
           </div>
           <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <?php echo form_open('cirugia/insertar'); ?>
                 <div class="row">
                       <div class="col-lg-4">
                            <label for="paciente">Paciente: </label>
                            <input  type="text" id="pacientes"  name="name" data-provide="" class="col-md-3 form-control" data-items="4"  autocomplete="off">
                      </div>
                      <div class="row">
                           <input type="text" name="search" id="search" placeholder="Type Something" list="searchresults" autocomplete="off" class="typeahead">
                        	<datalist id="searchresults">
                        		<option>Ray</option>
                        		<option>Scott</option>
                        		<option>Todd</option>
                        		<option>Dave</option>
                        		<option>Jeanne</option>
                        		<option>Jacob</option>
                        	</datalist>

                      </div>
              </div>


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

                       </div>
                 </div>
                 <div class="row">

                 </div>


                   <div class="row">
                      <div class="col-lg-10">
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                   Striped Rows
                              </div>
                              <!-- /.panel-heading -->
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
                                   </div>
                                   <!-- /.table-responsive -->
                              </div>
                              <!-- /.panel-body -->
                           </div>
                           <!-- /.panel -->
                      </div>
                      </div>
                      <div class="col-lg-8">
                           <button type="submit" class="btn btn-success" id="registrar" name="registrar" disabled >Registrar</button>
                      </div>

      </div>
      <?php echo form_close(); ?>


</div>
</div>
</div>
</section>

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
