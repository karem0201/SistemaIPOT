<?php
/**
 *
 */
class Administrador extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model(array('mtrabajador'));
  }

  public function NuevoHorario($value='')
  {
    $data = array('title'=>'admin | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $q=$this->mtrabajador->mostrarMedico();
    $data=array('medico'=>$q);
    $this->load->view('vadministrador/regHorario',$data);

  }

  public function modificarEspecialidad($value='')
  {
    $data = array('title'=>'admin | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $q=$this->mtrabajador->Medicos();
    $e=$this->mtrabajador->especialidad();
    $data=array('medico'=>$q,'especialidad'=>$e);
    $this->load->view('vadministrador/modEspecialidad',$data);

  }

}

 ?>
