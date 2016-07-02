<?php
/**
 *
 */
class Mpaciente extends CI_Model
{

      public function mostrar()
      {
            $q = $this->db->get('paciente');
            return $q->result();
      }

      public function getById($id='')
      {
            $this->db->select('p.idPaciente, p.nombre , p.apPaterno, p.apMaterno, p.hhcc');
            $this->db->from('paciente p');
            $this->db->where('p.idPaciente',$id);
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->row();
             }
      }
}

 ?>
