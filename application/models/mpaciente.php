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

      public function mostrarNombres($search='')
      {
            $this->db->select('p.nombre, p.apPaterno,p.apMaterno');
            $this->db->from('paciente p');
            $this->db->like('p.apPaterno',$search);
            $this->db->or_like('p.nombre',$search);
            $this->db->order_by('p.apPaterno','ASC');
            $q = $this->db->get();

            $i=0;
            foreach ($q->result() as $key ) {
                  $array[$i]=$key->apPaterno."  ".$key->apMaterno.", ".$key->nombre;
                  $i++;
            }

            return $array;
      }

      public function mostrarByHHCC($search='')
      {
            $this->db->select('p.nombre, p.apPaterno,p.apMaterno');
            $this->db->from('paciente p');
            $this->db->like('p.hhcc',$search);
            $q = $this->db->get();
            return $q->result();
      }

}

 ?>
