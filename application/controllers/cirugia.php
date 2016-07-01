<?php

/**
 *
 */
class Cirugia extends CI_Controller
{

      function __construct()
      {
            parent::__construct();
            $pase = false;
            if (!$this->session->userdata('login')){
                  header("Location: " . base_url(). "intranet");
            }
            else{
                  $id= ($this->session->userdata('idTipUsu'));
                  $this->load->model(array('muser'));
                  $permisos = $this->muser->getPermisos($id);
                  foreach ($permisos as $key) {
                        if($key->nombPermiso =='soft_sop'){
                              $pase = true;
                        }
                  }
                  if ($pase == false ) {
                  header("Location: " . base_url(). "intranet");
                  }
            }
      }


      public function index($id='')
      {if($id <> null){
            $this->load->model('mcirugia');
            $fila =$this->mcirugia->getCirugiaById($id);
            $this->load->view("vsoft_sop/head");
            $this->load->view("vsoft_sop/header");
            $this->load->view('vsoft_sop/notificaciones',$data);
            $this->load->view('vsoft_sop/navEstatico',$data);
            // print_r($fila);
            $this->load->helper('date');

            $atrib = $this->mcirugia->getAtributosByCir($id);
            $data=array('result'=>$fila , 'atributo'=>$atrib);
            $this->load->view("vsoft_sop/cirugia",$data);
            $this->load->view("vsoft_sop/footer");
            }
            else{
                  header("Location: " . base_url(). "intranet");
            }
      }

      public function nuevo($id='')
      {
            $this->load->view('vsoft_sop/head');
            $this->load->view('vsoft_sop/header');
            $this->load->model(array('muser'));
            $id =$this->session->userdata('idTipUsu');
            $result=$this->muser->getPermisos($id);
            $data=array('permiso'=>$result);
            $this->load->view('vsoft_sop/notificaciones',$data);
            $this->load->view('vsoft_sop/navEstatico',$data);
            $this->load->model(array('mpaciente'));
            $result = $this->mpaciente->getById($id);
            $this->load->model(array('mproductos'));
            $categoria = $this->mproductos->get();
            $data= array('paciente'=> $result, 'producto'=>$categoria);
            $this->load->view('vsoft_sop/reg_cirugia', $data);
            $this->load->view('vsoft_sop/footer');
      }

}
 ?>
