

   <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                  <h1>table</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Cirugias pendientes y realizadas</h2>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Apellidos</th>
                                        <th>Nombre(s)</th>
                                        <th>Fecha Nac</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php foreach ($result as $key){

                                            ?>
                                               <tr class="even gradeC">
                                               <td><?= $key->apPaterno." ". $key->apMaterno?> </td>
                                               <td><?= $key->nombre?></td>
                                               <td class="center"><?= $key->diaNac . "/".$key->mesNac. "/". $key->anioNac?></td>
                                               <td class="center"><a href='<?= base_url() ?>cirugia/index/<?= $key->idCirugia?>'  class='btn btn-info btn-xs'><?php
                                               if($key->fecReal==0){echo "Pendiente"; }else{ echo "Culminada";} ?></a> </td>
                                            </tr>
                                      <?php }?>
                                </tbody>
                           </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
</div>


<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

<!-- Metis Menu Plugin JavaScript -->
<!-- <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script> -->

<!-- DataTables JavaScript -->
<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<!-- <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script> -->

<!-- Custom Theme JavaScript -->
<!-- <script src="../dist/js/sb-admin-2.js"></script> -->

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
   $('#dataTables-example').DataTable({
            responsive: true
   });
});
</script>
