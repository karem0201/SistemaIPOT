<?php
/**
 *
 */
class Mcirugia extends CI_Model
{

      public function get()
      {
            $this->db->select('*');
            $this->db->from('paciente p');
            $this->db->join('cirugia c', 'p.idPaciente = c.idPaciente');
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->result();
             }
      }

      public function getCirugiaById($id='')
      {
            $this->db->select('*');
            $this->db->from('paciente p');
            $this->db->join('cirugia c', ' p.idPaciente =c.idPaciente','INNER');
            $this->db->where('c.idCirugia',$id);
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->row();
             }
      }

      public function getAtributosByCir($id='')
      {
            $this->db->select('*');
            $this->db->from('cirugia c');
            $this->db->join('list_atributo l', 'l.idCirugia = c.idCirugia',"INNER");
            $this->db->join('atributo a', 'l.idAtributo = a.idAtributo',"INNER");
            $this->db->where('c.idCirugia',$id );
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->result();
             }
      }
}

 ?>
