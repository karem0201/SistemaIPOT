<?php
/**
 *
 */
class Muser extends CI_Model
{

  public function getUser($nickname = '')
  {
        $this->db->select('*');
        $this->db->from('usuario u');
        $this->db->join('trabajador t', 't.idUsuario = u.idUsuario',"INNER");
        $this->db->join('tipo_usuario tu', 'u.idTipoUsuario = tu.idTipoUsuario',"INNER");
        $this->db->where('u.nickname',$nickname );
        $query = $this->db->get();

             return $query->row();


  }

  public function getPermisos($idTipo = '')
  {
        $this->db->select('p.nombPermiso,p.desPermiso,p.idPermiso_categoria');
        $this->db->from('tipo_usuario t');
        $this->db->join('list_permiso l', 'l.idTipoUsuario = t.idTipoUsuario',"INNER");
        $this->db->join('permiso p', 'l.idPermiso = p.idpermiso',"INNER");
        $this->db->where('t.idTipoUsuario',$idTipo );
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {return ($query->result());

        }

  }
}

 ?>
