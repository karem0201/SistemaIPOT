<?php

/**
 *
 */
class Intranet extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            // $this->session->sess_destroy();
      }

      public function index()
      {
            $this->load->view('guest/head');
            $this->load->view('guest/header');
            $this->load->view('guest/nav');
            if($this->session->userdata('login')){
                  $this->load->model(array('muser'));
                  $result=$this->muser->getPermisos($this->session->userdata('idTipUsu'));
                  $data=array('permiso'=>$result);
                  $this->load->view('vintranet/menu',$data);
            }
            else {

                  $this->load->view('vintranet/login');

            }
             $this->load->view('guest/footer');
      }
}

 ?>
