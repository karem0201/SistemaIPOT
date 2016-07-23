<?php
/**
 *
 */
class Mmedico extends CI_Model
{

  public function mostrar()
  {
    $this->db->select("t.idTrabajador,t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->from("trabajador t");
    $this->db->join('list_especialidad l', ' t.idTrabajador =l.idTrabajador','INNER');
    $this->db->join('especialidad e', ' l.idEspecialidad =e.idEspecialidad','INNER');
    $this->db->order_by('t.apPaterno','ASC');
    $q = $this->db->get();
    return $q->result();
  }
}

 ?>
