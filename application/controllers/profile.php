<?php
/**
 *
 */
class Profile extends CI_Controller
{

  public function __construct()
  {
     parent::__construct();
    if (!$this->session->userdata('login')){
      header("Location: " . base_url());

    }

    }

  public function index()
  {
    $data = array('title'=>'Perfil','mensaje'=>'Bienvenido ' , 'app'=>'Blog','imagen'=>'home-bg.jpg','subtitulo'=> $this->session->userdata('nombre'));
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->helper('bootstrap');
    $data= array('matriz' => $this->post->getPost());
    // $this->load->model('post');
    $this->load->view("/user/container",$data);
    $this->load->view("/Guest/footer",$data);
  }
}

 ?>
