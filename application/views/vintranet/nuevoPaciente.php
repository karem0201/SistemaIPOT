<div class="modal fade" id="nuevopaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <form role="form" action="<?= base_url()?>paciente/registrar" method="post">
                        <div class="modal-header">
                              <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>Nuevo paciente</h4>
                        </div> <!-- modal-header -->
                        <div class="modal-body">
                                    <div class="row ">
                                          <div  class= "col-lg-4">
                                                <div class="input-group " >
                                                      <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-user"></span></span>
                                                      <input  type= "text"  name="nombre" class= "form-control"  placeholder= "Nombre(s)"  aria-describedby= "basic-addon1" required="required">
                                               </div>
                                           </div>
                                           <div  class= "col-lg-4">
                                                       <input  type= "text"  class= "form-control"  placeholder= "Ap. Paterno"  name ="apPaterno" aria-describedby= "basic-addon1" required="required">
                                            </div>
                                            <div  class= "col-lg-4">
                                                       <input  type= "text"  class= "form-control"  placeholder= "Ap. Materno"  name ="apMaterno" aria-describedby= "basic-addon1" required="required">
                                            </div>
                                  </div> <!-- row -->
                                  <br>
                                  <div class="row" id="duplicado">
                                        <div class="col-lg-4" >
                                              <div class="input-group "  id="input-dup">
                                                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" glyphicon glyphicon-credit-card"></span></span>
                                                    <input type= "text"  name="dni" class= "form-control"  placeholder= "Dni"  aria-describedby= "basic-addon1" required="required" >
                                             </div>
                                             <label for="" class="duplicate">Ya existe dni</label>
                                       </div> <!-- col-lg-3 -->
                                        <div class="col-lg-4">
                                              <div class="input-group "  id="input-dup" >
                                                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-file-text"></span></span>
                                                    <input  type= "text"  name="hhcc" class= "form-control"  placeholder= "N°. hhcc"  aria-describedby= "basic-addon1" required="required">
                                             </div>
                                             <label for="" class="duplicate">Ya existe hhcc</label>
                                       </div> <!-- col-lg-3 -->
                                        <div class="col-lg-4">
                                              <div class="input-group " >
                                                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-phone"></span></span>
                                                    <input  type= "tel"  name="telefono" class= "form-control"  placeholder= "Tel&eacute;fono"  aria-describedby= "basic-addon1" required="required">
                                             </div>
                                       </div> <!-- col-lg-4 -->
                                  </div> <!-- row -->
                                  <div class="row">
                                        <div class="col-lg-5">
                                              <div class="input-group " >
                                                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-calendar"></span></span>
                                                    <input  type= "date"  name="fecNac" class= "form-control" aria-describedby= "basic-addon1" required="required">
                                             </div>
                                        </div> <!-- col-lg-5 -->
                                        <div class="col-lg-7">
                                              <div class="input-group " >
                                                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class=" fa fa-home"></span></span>
                                                    <input  type= "text"  name="direccion" class= "form-control"  placeholder= "Direcci&oacute;n"  aria-describedby= "basic-addon1" >
                                             </div>
                                        </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                        <div class="col-lg-4">
                                              <div class="input-group " >
                                                    <span  class= "input-group-addon input-modal" id= "basic-addon1" >@</span>
                                                    <input  type= "text"  name="correo" class= "form-control"  placeholder= "correo"  aria-describedby= "basic-addon1" >
                                             </div>
                                        </div>
                                  </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                               <input type="submit" class="btn  btn-success" id="regPac" value="Registrar"/>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                  </form>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>
