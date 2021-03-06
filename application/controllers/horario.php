<?php
/**
 *
 */
class Horario extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model(array('mhorario'));
    $this->load->model(array('mtrabajador'));
  }

  public function Registrar()
  {
    $horario=$this->input->post();
    $this->mhorario->insertar($horario);
    header("Location: " . base_url(). "administrador/NuevoHorario");
  }

  public function mostrarByEspecialidad()
  {
    $id=$this->input->post();
    $q=$this->mhorario->mostrarByEspecialidad($id);
    echo json_encode($q);
  }

  public function mostrarByMedico()
  {
    $id=$this->input->post('id');
    $q=$this->mhorario->mostrarByMedico($id);
    echo json_encode($q);
  }

  public function mostrarByDia()
  {
    $id=$this->input->post('opt');
    $q=$this->mhorario->mostrarByDia($id);
    echo json_encode($q);
  }


}

 ?>
