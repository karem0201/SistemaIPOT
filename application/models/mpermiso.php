<?php
/**
 *
 */
class mpermiso extends CI_Model
{

  public function mostrarPermisoCat($idTipUsu="")
  {
    $this->db->select('pc.descripcion,pc.nombre,pc.idPermiso_categoria');
    $this->db->distinct();
    $this->db->from('permiso p');
    $this->db->join('permiso_categoria pc', 'pc.idPermiso_categoria = p.idPermiso_categoria');
    $this->db->join('list_permiso lp', 'lp.idPermiso = p.idPermiso');
    $this->db->where('lp.idTipoUsuario', $idTipUsu);
    $query=$this->db->get();
    if($query->num_rows() > 0 )
    {
         return $query->result();
    }
  }
}

 ?>
