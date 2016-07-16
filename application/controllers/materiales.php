<?php
/**
 *
 */
class Materiales extends CI_Controller
{



      public function mostrar()
      {
            $id = $this->input->post('idCategoria');

            if($id){
                  $this->load->model('mproductos');
                  $materiales = $this->mproductos->getMateriales($id);
                  echo json_encode($materiales);
                  // foreach($materiales as $fila){
                  //     echo '<li class="active-result" data-option-array-index='. $fila->idMaterial .'>'. $fila->nombre ."- ".$fila->medida .'</li>';
                //}
            }
        else {
            echo json_encode('-');
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
