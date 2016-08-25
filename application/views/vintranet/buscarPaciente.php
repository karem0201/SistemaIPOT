<div class="modal fade" id="buscarPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button" id="buttoncloseBuscar">&times</button>
                <h4>Buscar paciente</h4>
              </div> <!-- modal-header -->
              <div class="modal-body">
                <div class="row barra" id="tabla-content">
                  <div class="panel panel-default">
                      <div class="panel-body mitabla">
                           <div class="table-responsive " >
                               <table class="table table-striped " id="grilla">
                                  <thead>
                                       <tr>
                                           <th>Ap. Paterno</th>
                                           <th>Ap .Materno</th>
                                           <th >Nombre</th>
                                           <th>Dni</th>
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
              </div> <!-- modal-body -->
              <div class="modal-footer">
                    <input type="button" class="btn  btn-success" data-toggle="modal" data-target="#nuevopaciente"  value="Nuevo"/>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>
