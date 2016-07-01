<?php
/**
 *
 */
class Materiales extends CI_Controller
{



      public function fillMateriales()
      {
            $id = $this->input->post('idCategoria');

            if($id){
                  $this->load->model('mproductos');
                  $materiales = $this->mproductos->getMateriales($id);


                  foreach($materiales as $fila){
                      echo '<option value="'. $fila->idMaterial .'">'. $fila->nombreMat ."- ".$fila->medidaMat .'</option>';
                }
            }
        else {
            echo '<option value="0">seleccione</option>';
            }

      }

      public function hacerAlgo()
      {

        $idEstado = $this->input->post('idCategoria');
        $idCiudad = $this->input->post('password');

        echo 'idEstado = '. $idEstado. '; idCiudad = '. $idCiudad;
    }
}

 ?>
