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
    $this->load->model(array('mtrabajador'));
    $this->load->model(array('mproductos'));
}
  public function  index()
  {

    $data = array('title'=>'Inicio | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->view("/Guest/slider1",$data);

    $this->load->library('pagination');
    $config['base_url']  = base_url() .'home/index';
    $config['total_rows']  =  $this->post->num_post();
    $config['per_page']  =  2;

    $config['num_links']  = $this->post->num_post();
    $config['use_page_numbers'] = true;

    $config['full_tag_open'] = '<ul class="pagination pagination-md" id="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = "Primero";
    $config['last_link'] = "Último";
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
    $result = $this->post->get_pagination($config['per_page'],$this->uri->segment(3));
    $this->load->view("/Guest/testimonial");
    $this->load->view("/Guest/servicios",$data);
    $data['consulta'] =$result;
    $data['pagination'] =$this->pagination->create_links();

    $this->load->view("/Guest/container",$data);
    $this->load->view("/Guest/post",$data);
    $this->load->view("/Guest/partner",$data);
    $this->load->view("/Guest/footer",$data);

  }

public function returnPost()
{
  $this->load->library('pagination');
  $config['base_url']  = base_url() .'home/index';
  $config['total_rows']  =  $this->post->num_post();
  $config['per_page']  =  2 ;
  //$config [ 'uri_segment' ]  =  2;
  $config['num_links']  = $this->post->num_post();
  $config['use_page_numbers'] = true;

  $config['full_tag_open'] = '<ul class="pagination pagination-md" id="pagination">';
  $config['full_tag_close'] = '</ul>';
  $config['first_link'] = "Primero";
  $config['last_link'] = "Último";
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
  $result = $this->post->get_pagination($config['per_page'],$this->uri->segment(3));

$data=array('result'=>$result,'pagination'=>$this->pagination->create_links());
echo json_encode($data);

}

  public function contactanos()
  {
    $data = array('title'=>'Cont&aacute;ctanos | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->view("/Guest/contactanos",$data);
    $this->load->view("/Guest/servicios",$data);
    $this->load->view("/Guest/footer",$data);
  }

  public function historia()
  {
    $data = array('title'=>'Historia | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->view("/Guest/historia",$data);
    $this->load->view("/Guest/testimonial",$data);
    $this->load->view("/Guest/footer",$data);
  }

  public function staff()
  {
    $data = array('title'=>'Staff | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
  //print_r($this->mmedico->mostrar());
    $q=$this->mtrabajador->mostrarMedico();
    $l=$this->mtrabajador->listEspecialidad();
    $e=$this->mtrabajador->especialidad();
    $data=array('medicos'=>$q,'esp'=>$l,'especialidad'=>$e);
    $this->load->view("/Guest/staff",$data);
    $this->load->view("/Guest/horario",$data);
    $this->load->view("/Guest/testimonial",$data);
    $this->load->view("/Guest/footer",$data);
  }

  public function tienda()
  {
    $data = array('title'=>'Tienda | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $q=$this->mproductos->mostrarMaterialesOrtopedia();
    $o=$this->mproductos->mostrarMaterialesOrtopediaOferta();
    $e=$this->mtrabajador->especialidad();
    //print_r($o);
    $data=array('materiales'=>$q,'especialidad'=>$e,'oferta'=>$o);
    $this->load->view("/Guest/tienda",$data);
    $this->load->view("/Guest/servicios",$data);
    $this->load->view("/Guest/footer",$data);
  }

  public function podologia()
  {
    $data = array('title'=>'Podolog&iacute;a | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->view("/Guest/podologia",$data);
    $this->load->view("/Guest/servicios",$data);
    $this->load->view("/Guest/footer",$data);
  }

  public function siteweb()
  {
    $data = array('title'=>'Mapa del sitio | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->view("/Guest/siteweb",$data);
    $this->load->view("/Guest/servicios",$data);
    $this->load->view("/Guest/footer",$data);
  }

  public function Desarrollo()
  {
    $data = array('title'=>'Mapa del sitio | IPOT-CRP');
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/header",$data);
    $this->load->view("/Guest/nav",$data);
    $this->load->view("/Guest/Desarrollo",$data);
    $this->load->view("/Guest/footer",$data);
  }
}

 ?>
