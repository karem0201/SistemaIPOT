<?php
/**
 *
 */
class Mpaciente extends CI_Model
{
      public function insertar($new='')
      {
            if ($new != null){
            $datos = array(
                  'nombre' =>$new['nombre'],
                  'apPaterno'=>$new['apPaterno'],
                  'apMaterno' =>$new['apMaterno'],
                  'dni' => $new['dni'],
                  'hhcc' => $new['hhcc'],
                  'telefono' => $new['telefono'],
                  'fecNac' => $new['fecNac'],
                  'direccion' => $new['direccion'],
                  'correo' => $new['correo']);
                  $this->db->insert('paciente', $datos);
                  return true;
              }
      }

      public function mostrar()
      {
            $q = $this->db->get('paciente');
            return $q->result();
      }

      public function mostrarById($id='')
      {
            $this->db->select('*');
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
            $this->db->select('*');
            $this->db->from('paciente p');
            $this->db->like('p.apPaterno',$search);
            $this->db->or_like('p.nombre',$search);
            $this->db->order_by('p.apPaterno','ASC');
            $q = $this->db->get();

            $i=0;
            foreach ($q->result() as $key ) {
                  $array[$i]=$key->apPaterno."  ".$key->apMaterno.", ".$key->nombre."-".$key->hhcc;
                  $i++;
            }

            return $array;
      }

      public function validardni($search='')
      {
            $this->db->select('p.nombre');
            $this->db->from('paciente p');
            $this->db->where('p.dni',$search);
            $q = $this->db->get();
            if($q->num_rows()>0)
            {
                  return true;
            }
            else {
                  return false;
            }
      }

      public function validarhhcc($search='')
      {
            $this->db->select('p.nombre');
            $this->db->from('paciente p');
            $this->db->where('p.hhcc',$search);
            $q = $this->db->get();
            if($q->num_rows()>0)
            {
                  return true;
            }
            else {
                  return false;
            }
      }





}

 ?>
