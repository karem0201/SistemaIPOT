<?php

/**
 *
 */
class Intranet extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            $this->load->model(array('mtrabajador'));
            $this->load->model(array('mpermiso'));
      }

      public function index()
      {
        if($this->session->userdata('login')){
            $data = array('title'=>'Intranet | IPOT-CRP');
            $this->load->view('guest/head',$data);
            $this->load->view('guest/header');
            $this->load->model(array('muser'));
            $id =$this->session->userdata('idTipUsu');
            $result=$this->muser->getPermisos($id);
            $cat=$this->mpermiso->mostrarPermisoCat($id);
            $data=array('permiso'=>$result,'categoria'=>$cat);
            // $this->load->view('vsoft_sop/notificaciones',$data);
            $this->load->view('vintranet/metisMenu',$data);
            $this->load->view('vtopico/resumen_materiales',$data);
            $this->load->view('guest/footer');
          }
          else {
            $data = array('title'=>'Intranet | IPOT-CRP');
            $this->load->view('vsoft_sop/head');
            $this->load->view('guest/header');
            $this->load->view('vintranet/login');
            $this->load->view('guest/footer');
          }


      }
}

 ?>
