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
                      <div class="col-lg-4"><?php
                      $atrib=array('readonly'=>'readonly');
                      echo form_input_text('karem');
                        echo
                        form_input_value('paciente','Paciente',$atrib,$paciente->apPaterno." ".$paciente->apMaterno.", ".$paciente->nombre);
                        $attr=array('style'=>'display:none', 'value'=>$paciente->idPaciente);
                        form_input_text('idPaciente','',$attr);

                        $attr=array('style'=>'display:none');
                        form_input_text('idListaMat','',$attr);
                        ?>
                       </div>
                       <div class="col-lg-3"><?php
                             echo form_input_value('hhcc','Historia Clinica',$atrib,$paciente->hhcc);
                           ?>
                       </div>
                 </div>
                 <div class="row">
                        <div class="col-lg-3"> <label for="">Categoria</label>
                        <?php

                              foreach ($producto as $key ) {
                                         $values[$key->idTipoMat] =  $key->tipoMat ;
                                   }//llenar la tabla ciudad con el primer tipo para la seleccion inicial
                              echo form_input_select('idCategoria');
                              ?><option value="0" selected>seleccione </option> <?php
                              echo select_options($values);
                        ?>
                       </div>
                       <div class="col-lg-3"> <label for="">Material</label>
                       <?php
                       echo form_input_select('idMaterial');
                       ?><option value="0">seleccione </option> <?php
                       echo select_options();
                       ?>
                       </div>
                       <select id="MySelect">
                                <option>AMERICA</option>
                                <option>INDIA</option>
                                <option>JAPAN</option>
                    </select>


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

               $()

         });

         $(document).ready(function(){
          $("#MySelect").combify();
         });




      </script>
