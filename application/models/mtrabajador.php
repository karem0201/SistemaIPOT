<?php
/**
 *
 */
class Mtrabajador extends CI_Model
{

  public function mostrarMedico()
  {
    $this->db->select("t.idTrabajador,t.nombre,t.apPaterno,t.apMaterno,t.foto");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->distinct();
    $this->db->from("trabajador t");
    $this->db->join('list_especialidad l', ' t.idTrabajador =l.idTrabajador','INNER');
    $this->db->join('especialidad e', ' l.idEspecialidad =e.idEspecialidad','INNER');
    $this->db->order_by('t.apPaterno ASC, t.apMaterno ASC');
    $q = $this->db->get();
    return $q->result();
  }

  public function especialidad()
  {
    $this->db->select("*");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->from("especialidad e");
    $this->db->order_by('e.descripcion','ASC');
    $q = $this->db->get();
    return $q->result();
  }

  public function listEspecialidad($value="")
  {
    $this->db->select("t.*,e.descripcion");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->distinct();
    $this->db->from("list_especialidad l");
    $this->db->join('especialidad e', 'l.idEspecialidad = e.idEspecialidad', 'INNER');
    $this->db->join('trabajador t', 't.idTrabajador = l.idTrabajador', 'INNER');
    $this->db->order_by('t.apPaterno ASC','t.apMaterno ASC');
    if($value>0){
        $this->db->where('e.idEspecialidad',$value);
    }
    $q = $this->db->get();
    return $q->result();
  }


  public function mostrarMedicoId($id='')
  {
    $this->db->select("t.idTrabajador,t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->from("trabajador t");
    $this->db->join('list_especialidad l', ' t.idTrabajador =l.idTrabajador','INNER');
    $this->db->join('especialidad e', ' l.idEspecialidad =e.idEspecialidad','INNER');
    $this->db->where('t.idtrabajador', $id);
    $this->db->order_by('t.apPaterno','ASC');
    $q = $this->db->get();
    return $q->result();
  }


}

 ?>
