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
       $this->db->order_by('nombre', 'asc');
       $ciudades = $this->db->get('material');

       if($ciudades->num_rows() > 0){
           return $ciudades->result();
       }
      }

      public function mostrarByCirugia($id='')
      {
            $this->db->select('m.nombre, m.medida, m.marca,t.tipoMat,l.cantidad');
            $this->db->from('list_materiales l');
            $this->db->join('material m', 'l.idMaterial =m.idMaterial','INNER');
            $this->db->join('tipo_material t', 'm.idTipoMat =t.idTipoMat','INNER');
            $this->db->where('l.idCirugia',$id);
            $this->db->order_by('t.tipoMat', 'asc');
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->result();

             }
      }
}


 ?>
