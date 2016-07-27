<?php
/**
 *
 */
class Cita extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model(array('mtrabajador'));

  }

  public function index()
  {
    $data = array('title'=>'Pre Cita | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $q=$this->mtrabajador->mostrarMedico();
    $e=$this->mtrabajador->especialidad();
    //print_r($e);
    $data=array('medicos'=>$q,'especialidad'=>$e);
    $this->load->view("/Guest/asistenteCita",$data);
    $this->load->view("/Guest/cita",$data);
    $this->load->view("/Guest/footer");
  }

}

 ?>
