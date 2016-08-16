<?php

/**
 *
 */
class Post extends CI_Model
{

  public function  getPost()
  {
    $q = $this->db->get('post');
    return $q->result();
  }

  public function  getPostByName($id = "")
  {


            $this->db->select('*');
            $this->db->from('usuario u');
            $this->db->join('post p', ' u.idUsuario =p.autorId');
            $this->db->where('p.id',$id);

        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
  }

  public function  insertPost($post = null)
  {

    if ($post != null){
    //   $datos = array(null,
      $nombre =$post['nombre'];
      $descripcion=$post['descripcion'];
      $contenido =$post['contenido'];
      $file_name = $post['file_name'];
    //   "curdate();"
    // );
    // $this->db->insert('post',$datos);
      $SQL = "INSERT INTO post(id,post,subdescripcion,contenido,imagen,fecha,modificado) VALUES(null,'$nombre','$descripcion','$contenido','$file_name',curdate(),curdate());";
        if($this->db->query($SQL)){
             return true;
           }
     }
    return false;

  }
  public function num_post()
  {
    //$this->db->query('SQL Query')->num_rows(); esto haria la extraccion de toda la tabla y haria lento el proceso
  $numero= $this->db->query("SELECT count(*) as number FROM post")->row()->number;
  return intval($numero);
  }
 public function get_pagination($num_per_page)
 {
   $this->db->select('p.subdescripcion,t.nombre,p.imagen,t.nombreAb');
   $this->db->from('post p');
   $this->db->join('trabajador t', ' p.autorId = t.idTrabajador','INNER');
   $q = $this->db->get('post',2,0);
   return $q->result();
 }

public function updatePost($post=null)
{
$datestring = 'Y-m-d';

  $data  =  array (
        'post'=>$post['nombre'] ,
        'subdescripcion'   =>  $post['descripcion'] ,
        'contenido'   =>  $post['contenido'] ,
        'modificado'   => date($datestring, now())
);
$this->db->where( 'id' ,  $post['id'] );
$this ->db->update( 'post' ,  $data );
header("Location: ". base_url()  . "article/publicacion/". $post['id']);
}

public function updateImg($post=null)
{

  $data  =  array (
        'imagen'=>$post['file_name'] );
  $this->db->where( 'id' ,  $post['id'] );
  if($this ->db->update( 'post' ,  $data )){
    echo base_url('public/imagen')."/".$post['file_name'];
  }else {
      echo false;
  }
  //header("Location: ". base_url()  . "article/publicacion/". $post['id']);
}


}



 ?>
