<?php

/**
 *
 */
class Article extends CI_Controller
{

  public function publicacion($id='' )
  {

    $fila =$this->post->getPostByName($id);
    $data = array('title'=>$fila->post,'mensaje'=>$fila->post, 'app'=>'Blog','subtitulo'=>$fila->subdescripcion);
    $this->load->view("/Guest/head",$data);
    $this->load->view("/Guest/nav",$data);
    if(!isset($fila->imagen)|($fila->imagen)==""){
        $fila->imagen = 'home-bg.jpg';
    }
    $data=array('contenido'=>$fila->contenido,'imagen'=>$fila->imagen);
    $this->load->view("/Guest/header",$data);

    $this->load->view("/Guest/noticia",$data);
    $this->load->view("/Guest/footer");
    }

    public function nuevo()
    {

      $data = array('title'=>'Crear nuevo post','mensaje'=>'Creando un nuevo post ', 'app'=>'Blog','imagen'=>'home-bg.jpg','subtitulo'=>'deja correr tu inspiración');
      $this->load->view("/Guest/head",$data);
      $this->load->view("/Guest/nav",$data);

      $this->load->view("/Guest/header",$data);
      $this->load->helper(array('richtext'));
      $this->load->helper('bootstrap');
      // $this->load->model('post');
      $this->load->view("/user/nuevo",$data);
      $this->load->view("/Guest/footer",$data);
    }

    public function insert()
    {
      $post = $this->input->post();

      //falta la llave file_name
      $this->load->model('file');
      $file_name = $this->file->UploadImage('./public/imagenes/','');
      $post['file_name'] = $file_name;// estamos asignando una nueva key file_name con el contenido del fichero



      $bool=$this->post->insertPost($post);
      if($bool){
                header("Location: ". base_url()  . "Profile");
      }else{
                  header("Location: ". base_url() . "article/nuevo");

      }

    }

    public function delete()
    {
      $post=$this->input->post();
      $postname=$post['postname'];
      $id = $post['id'];
      // echo $id;
      $SQL ="DELETE FROM post WHERE id = $id";
      if ($this->db->query($SQL)) {
        echo $id;
      }else{
        echo false;
      }
    }

    public function modificar($id='')
    {
       $fila =$this->post->getPostByName($id);

        $data = array('title'=>$fila->post,'mensaje'=>$fila->post, 'app'=>'Blog','subtitulo'=>$fila->subdescripcion);
        $this->load->view("/Guest/head",$data);
        $this->load->view("/Guest/nav",$data);
        if(!isset($fila->imagen)|($fila->imagen)==""){
            $fila->imagen = 'home-bg.jpg';
        }
        $data=array('contenido'=>$fila->contenido,'imagen'=>$fila->imagen,'row'=>$fila);
        // $this->load->view("/Guest/header",$data);
        $this->load->helper(array('richtext'));
        $this->load->view("/user/modificar",$data);
        $this->load->view("/Guest/footer");
    }
    public function update()
    {
      $post=$this->input->post();
      $this->post->updatePost($post);
    }

    public function updateImagen()
    {$this->load->model('file');
      $file_name = $this->file->UploadImage('./public/imagenes/','no es posible subir la imagen');
      if($file_name ==null)
      {
        echo false;
        return;
      }

      $post=$this->input->post();
      $data  =  array (
            'imagen'=>$file_name );
      $this->db->where( 'id' ,  $post['id'] );
      if($this ->db->update( 'post' ,  $data )){
        echo base_url('public/imagenes')."/".$file_name;
      }else {
          echo false;
      }
    }
}


 ?>
