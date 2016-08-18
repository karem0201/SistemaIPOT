<?php
/**
 *
 */
class trabajador extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model(array('mtrabajador'));
  }

  public function medicoById()
  {
    $id = $this->input->post('id');
    $q= $this->mtrabajador->mostrarMedicoId($id);
    echo json_encode($q);
  }

  public function medicoByEspecialidad()
  {
    $id = $this->input->post('opt');

    $q= $this->mtrabajador->listEspecialidad($id);
    echo json_encode($q);
  }

  public function medicoByHD()
  {
    $dia = $this->input->post('dia');
    $hora = $this->input->post('hora');
    $idEsp = $this->input->post('idEspecialidad');
    $q= $this->mtrabajador->medicoByHorario($dia,$hora,$idEsp);
    echo json_encode($q);
  }
}

 ?>
