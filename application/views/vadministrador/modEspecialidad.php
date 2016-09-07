<div id="page-wrapper">
      <div class="container">
        <br>
        <div class="row">
              <div class="row-md col-md-10  col-sm-8">
                   DATOS DE LA CIRUGIA
              </div>
        </div> <!-- row -->

<form class="form-control" action="<?=base_url()?>Trabajador/modificarEspecialidad" method="post" id="registrar">
    <select class="form-control" name="medico" id="medico" autofocus>
      <?php
        $opt="";
        foreach ($medico as $key ) {
          $opt .= "<option value=".$key->idTrabajador.">".$key->apPaterno.", ".$key->nombre."</option>";
        }
        echo $opt;
       ?>
    </select>
    <select multiple class="form-control" name="especialidad[]">
      <?php
        $opt="";
        foreach ($especialidad as $key ) {
          $opt .= "<option value=".$key->idEspecialidad.">".$key->descripcion."</option>";
        }
        echo $opt;
       ?>
    </select>
    <button type="submit" id="reg">agregar</button>
</form>
</div>
</div>
