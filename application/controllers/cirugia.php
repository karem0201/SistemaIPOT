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

            $this->load->view("vsoft_sop/head");
            $this->load->view("guest/header");
            $this->load->model(array('muser'));
            $idUsu =$this->session->userdata('idTipUsu');
            $result=$this->muser->getPermisos($idUsu);
            $data=array('permiso'=>$result);
            $this->load->view('vsoft_sop/notificaciones',$data);
            $this->load->view('vsoft_sop/navEstatico',$data);
            // print_r($fila);
            $this->load->helper('date');
            $this->load->model('mcirugia');
            $fila =$this->mcirugia->getCirugiaById($id);
            $atrib = $this->mcirugia->getAtributosByCir($id);
            $data=array('result'=>$fila , 'atributo'=>$atrib);
            $this->load->view("vsoft_sop/cirugia",$data);
            $this->load->view("vsoft_sop/footer");
            }
            else{
                  header("Location: " . base_url(). "intranet");
            }
      }

      public function registrar()
      {
            $datos = $this->input->post();
            $this->load->model(array('mcirugia'));
            $q=$this->mcirugia->insertar($datos);
            // if($q){
            //       header("Location: " . base_url(). "intranet");
            // }
      }

}
 ?>
