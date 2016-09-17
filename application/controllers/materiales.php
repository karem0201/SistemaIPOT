<?php
/**
 *
 */
class Materiales extends CI_Controller
{
  function __construct()
  {
        parent::__construct();
        $this->load->model('mproductos');
  }

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

  public function mostrarByEspecialidad()
  {
        $data=$this->input->post();
        $q=$this->mproductos->mostrarByEspecialidad($data);
        echo json_encode($q);
  }

  public function mostrarByNombre()
  {
        $data=$this->input->post();
        $q=$this->mproductos->mostrarByNombre($data);
        echo json_encode($q);
  }

  public function mostrarById()
  {
        $id=$this->input->post('idMaterial');
        $q=$this->mproductos->mostrarById($id);
        echo json_encode($q);
  }

  public function hacerAlgo()
  {

    $idEstado = $this->input->post('idCategoria');
    $idCiudad = $this->input->post('password');

    echo 'idEstado = '. $idEstado. '; idCiudad = '. $idCiudad;
  }

  public function mostrarMaterialesOrtopediaOferta()
  {
        $q=$this->mproductos->mostrarMaterialesOrtopediaOferta();
        echo json_encode($q);
  }

}

 ?>
