<?php

/**
 *
 */
class  Home extends CI_Controller
{
  // public function index()
  // {
  //   header('Location: '. base_url('home/contenido'));
  // }
  function __construct() {

    // header('Access-Control-Allow-Origin: *');
    // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    // header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    // $method = $_SERVER['REQUEST_METHOD'];
    // if($method == "OPTIONS") {
    //     die();
    // }
    parent::__construct();
}
  public function  index()
  {

    $data = array('title'=>'Mi blog','mensaje'=>'Blog de prueba', 'app'=>'Blog','imagen'=>'home-bg.jpg','subtitulo'=>'Karem gu');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->view("/Guest/slider",$data);


    $this->load->library('pagination');
    $config [ 'base_url' ]  =  base_url() .'home/index';
    $config [ 'total_rows' ]  =  $this->post->num_post() ;
    $config [ 'per_page' ]  =  2 ;
      //$config [ 'uri_segment' ]  =  3;
    $config [ 'num_links' ]  =  10;
    $Config [ 'use_page_numbers'] = true;

    $config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';
$config['first_link'] = false;
$config['last_link'] = false;
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="prev">';
$config['prev_tag_close'] = '</li>';
$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $result = $this->post->get_pagination($config['per_page']);
    //echo json_encode($result);
    $this->post->get_pagination($config['per_page']);
    $data['consulta'] =$result;
    $data['pagination'] =$this->pagination->create_links();
    $this->load->view("/Guest/post",$data);
    $this->load->view("/Guest/container",$data);
    $this->load->view("/Guest/footer",$data);



  }


public function returnPost()
{$this->load->library('pagination');
$config [ 'base_url' ]  =  base_url() .'home/index';
$config [ 'total_rows' ]  =  $this->post->num_post() ;
$config [ 'per_page' ]  =  3 ;
  // $config [ 'uri_segment' ]  =  3;
$config [ 'num_links' ]  =  10;
$Config [ 'use_page_numbers'] = true;

$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';
$config['first_link'] = false;
$config['last_link'] = false;
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="prev">';
$config['prev_tag_close'] = '</li>';
$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

$this->pagination->initialize($config);
$result = $this->post->get_pagination($config['per_page']);
echo json_encode($result);

}
}

 ?>
