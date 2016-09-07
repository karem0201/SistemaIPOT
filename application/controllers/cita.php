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

  public function i()
  {
    $data = array('title'=>'Pre Cita | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $q=$this->mtrabajador->mostrarMedico();
    $e=$this->mtrabajador->especialidad();
    //print_r($e);
    $data=array('medicos'=>$q,'especialidad'=>$e);
    $this->load->view("/Guest/citav2",$data);
    $this->load->view("/Guest/Testimonial",$data);
    $this->load->view("/Guest/footer");
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
    $this->load->view("/Guest/cita_paso1",$data);
    $this->load->view("/Guest/Testimonial",$data);
    $this->load->view("/Guest/footer");
  }

  public function solicitud()
  {
    $datosPaciente=$this->input->post();
    if($datosPaciente){
      print_r("");//$this->paso1();
    }
    else {
      $this->index();
    }
    $data = array('title'=>'Pre Cita | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $q=$this->mtrabajador->mostrarMedico();
    $e=$this->mtrabajador->especialidad();
    //print_r($e);
    $data=array('medicos'=>$q,'especialidad'=>$e,'datos_paciente'=>$datosPaciente);
    $this->load->view("/Guest/cita_paso2",$data);
    $this->load->view("/Guest/Testimonial",$data);
    $this->load->view("/Guest/footer");
  }

}

 ?>
