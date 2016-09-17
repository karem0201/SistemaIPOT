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

      public function mostrarMaterialesOrtopedia()
      {
       $this->db->order_by('nombre', 'asc');
       $q = $this->db->get('material_ortopedia');

       if($q->num_rows() > 0){
           return $q->result();
       }
      }

      public function mostrarMaterialesOrtopediaOferta()
      {
        $this->db->from('material_ortopedia_oferta');
        $this->db->where('estado', '1');

         $q = $this->db->get();
         if($q->num_rows() > 0){
             return $q->result();
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

      public function mostrarByEspecialidad($data='')
      {if($data!=""){
            $this->db->select('m.*');
            $this->db->distinct();
            $this->db->from('material_ortopedia m');
            if($data['idEspecialidad']>1){
              $this->db->join('materiales_especialidad_list l', 'l.idMaterial =m.idMaterial','INNER');
              $this->db->where('l.idEspecialidad',$data['idEspecialidad']);
            }
            $this->db->order_by('m.nombre', $data['order']);
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->result();

             }
           }
      }

      public function mostrarById($id='')
      {if($id!=""){
            $this->db->select('*');
            $this->db->from('material_ortopedia');
            $this->db->where('idMaterial',$id);
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->result();

             }
           }
      }

      public function mostrarByNombre($data='')
      {if($data!=""){
            $this->db->select('m.*');
            $this->db->distinct();
            $this->db->from('material_ortopedia m');
            if($data['idEspecialidad']>1){
              $this->db->join('materiales_especialidad_list l', 'l.idMaterial =m.idMaterial','INNER');
              $this->db->where('l.idEspecialidad',$data['idEspecialidad']);
            }
            if($data['nombre']!=""){
                $this->db->like('m.nombre',$data['nombre']);
            }

            $this->db->order_by('m.nombre', $data['order']);
            $query = $this->db->get();
             if($query->num_rows() > 0 )
             {
                  return $query->result();

             }
           }
      }


}


 ?>
