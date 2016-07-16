<?php
/**
 *
 */
class Mprocedimiento extends CI_Model
{
      public function mostrar()
      {
            $this->db->order_by('descripcion', 'asc');
            $query = $this->db->get('procedimiento');
            return $query->result();
      }
}

 ?>
