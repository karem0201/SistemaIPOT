<?php
/**
 *
 */
class Mhorario extends CI_Model
{
  public function Insertar($value='')
  {
    if($value != null){
          $data = array(
                'dia' => $value['dia'],
                'hora_inicial' => $value['inicio'],
                'hora_final' => $value['fin']

          );
          $q=$this->db->insert('horario_dia', $data);
          $idHd=$this->db->insert_id();
          $horario=array(
                      'idTrabajador'=>$value['medico'],
                      'idHorario_dia'=>$idHd
                );
                $this->db->insert('horario', $horario);
          }


  }

  public function mostrarByEspecialidad($value='')
  {
    $this->db->select("t.idTrabajador,hd.dia,hd.hora_inicial,hd.hora_final");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->distinct();
    $this->db->from("trabajador t");
    $this->db->join('list_especialidad l', ' t.idTrabajador =l.idTrabajador','INNER');
    $this->db->join('especialidad e', ' l.idEspecialidad =e.idEspecialidad','INNER');
    $this->db->join('horario h', ' h.idTrabajador =t.idtrabajador','INNER');
    $this->db->join('horario_dia hd', ' h.idHorario_dia =hd.idHorario_dia','INNER');
    $this->db->where('e.idEspecialidad',$value['idEspecialidad']);
    if($value['idMedico']>0){
      $this->db->where('t.idTrabajador',$value['idMedico']);
    }
    $this->db->order_by('t.apPaterno','ASC');
    $q = $this->db->get();
    return $q->result();
  }

  public function mostrarByMedico($value='')
  {
    $this->db->select("hd.dia");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->distinct();
    $this->db->from("trabajador t");
    $this->db->join('horario h', ' t.idTrabajador =h.idTrabajador','INNER');
    $this->db->join('horario_dia hd', ' h.idHorario_dia =hd.idHorario_dia','INNER');
    $this->db->where('t.idTrabajador',$value);
    $this->db->order_by('hd.dia','ASC');
    $q = $this->db->get();
    return $q->result();
  }

  public function mostrarByDia($value='')
  {
    $this->db->select("t.*");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->distinct();
    $this->db->from("trabajador t");
    $this->db->join('horario h', ' t.idTrabajador =h.idTrabajador','INNER');
    $this->db->join('horario_dia hd', ' h.idHorario_dia =hd.idHorario_dia','INNER');
    $this->db->order_by('t.apPaterno ASC','t.apMaterno ASC');

    if($value<>'todos'){
      $this->db->where('hd.dia',$value);
    }
    else {

    }
    $q = $this->db->get();
    return $q->result();
  }
}

 ?>
