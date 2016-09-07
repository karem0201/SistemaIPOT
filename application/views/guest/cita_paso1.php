
</div>
<div id="pre-cita">
    <div class="container">

      <div class="row ">
        <div class="pasos_precita">
          <span id="uno" class="paso_enproceso">1</span>
          <span id="dos">2</span>
          <span id="tres">3</span>
          <span id="cuatro">4</span>
        </div>
        <div class="comentarios">
          1. Llena tus datos: <span>Necesitamos algunos datos personales para contactarnos contigo.</span>
        </div>

        <form  id="formulario" action="<?= base_url()?>cita/solicitud" method="post">
          <div class="col-sm-6" id="datos_paciente">
            <div class="input-group " >
                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class="fa fa-user"></span> Nombres</span>
                    <input  type= "text"  name="p_nombre" class= "form-control" aria-describedby= "basic-addon1" required="required">
            </div>
            <div class="input-group " >
                     <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class="fa fa-user"></span> Ap. Paterno</span>
                     <input  type= "text"  name="p_apPaterno" class= "form-control" aria-describedby= "basic-addon1" required="required">
            </div>
            <div class="input-group " >
                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class="fa fa-user"></span> Ap. Materno</span>
                    <input  type= "text"  name="p_apMaterno" class= "form-control" aria-describedby= "basic-addon1" required="required">
            </div>
            <div class="input-group " >
                     <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class="fa fa-mobile"></span> Celular</span>
                     <input  type= "tel" pattern="[0-9]{9}"  name="p_celular" class= "form-control" aria-describedby= "basic-addon1" required="required">
            </div>
            <div class="input-group " >
                    <span  class= "input-group-addon input-modal" id= "basic-addon1" ><span class="fa fa-phone"></span> Telefono</span>
                    <input  type= "tel" pattern="[0-9]\S{5,8}" name="p_telefono" class= "form-control" aria-describedby= "basic-addon1" required="required">
            </div>
            <button type="submit"  id="btn_buscarmedico" class="btn btn-info btn-large form-control" >Buscar M&eacute;dico</button>
          </div>
        </form>
        <div class="col-sm-6 cartel-informativo sombra-curva">
          <h4><span class="fa fa-eye"></span> A TENER EN CUENTA</h4>
          <p>La separación de una "pre-cita" significa que la hora que solicite ser&aacute; refrencial
            y dependerá de la disponibilidad de no haberse concretado una cita previa a su solicitud; por eso nos contactaremos con usted para Registrar la CITA en consultorio<p>
          <h2>Estamos trabajando para brindarle un mejor servicio</h2>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready( function() {

    //$("#formulario").submit(function() {return false});

    var btn_buscarmedico = $("#btn_buscarmedico");

    var divPacte = $("#datos_paciente");
    var divComentario = $(".comentarios");

  });
    </script>
