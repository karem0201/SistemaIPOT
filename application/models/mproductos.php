<?php
/**
 *
 */
class Mproductos extends CI_Model
{

      public function mostrar()
      {
      
            $query = $this->db->get('tipo_material');
             if($query->num_rows() > 0 )
             {
                  return $query->result();
             }
      }

      public function getMateriales($id='')
      {
      $this->db->where('idTipoMat', $id);
       $this->db->order_by('nombreMat', 'asc');
       $ciudades = $this->db->get('material');

       if($ciudades->num_rows() > 0){
           return $ciudades->result();
       }
      }
}


 ?>
