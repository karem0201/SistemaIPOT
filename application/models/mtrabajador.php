<?php
/**
 *
 */
class Mtrabajador extends CI_Model
{

  public function Medicos()
  {
    $this->db->select("*");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->distinct();
    $this->db->from("trabajador t");
    $this->db->join('usuario u', 'u.idUsuario = t.idUsuario', 'INNER');
    $this->db->where('U.idTipoUsuario', 2);
    $this->db->order_by('t.apPaterno ASC, t.apMaterno ASC','t.nombre ASC');
    $q = $this->db->get();
    return $q->result();
  }

  public function especialidad()
  {
    $this->db->select("*");
    $this->db->from("especialidad e");
    $this->db->order_by('e.descripcion','ASC');
    $q = $this->db->get();
    return $q->result();
  }

  public function listEspecialidad($value="")
  {

    if ($value>=0) {
        $this->db->select("t.*,e.descripcion");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    }
    else {
      $this->db->select("t.*");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    }

    $this->db->distinct();
    $this->db->from("list_especialidad l");
    $this->db->join('especialidad e', 'l.idEspecialidad = e.idEspecialidad', 'INNER');
    $this->db->join('trabajador t', 't.idTrabajador = l.idTrabajador', 'INNER');
    $this->db->order_by('t.apPaterno ASC','t.apMaterno ASC','t.nombre ASC');
    if ($value>0) {
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

  public function mostrarMedico()
  {
    $this->db->select("t.idTrabajador,t.nombre,t.apPaterno,t.apMaterno,t.foto");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
    $this->db->distinct();
    $this->db->from("trabajador t");
    $this->db->join('list_especialidad l', ' t.idTrabajador =l.idTrabajador','INNER');
    $this->db->join('especialidad e', ' l.idEspecialidad =e.idEspecialidad','INNER');
    $this->db->order_by('t.apPaterno','ASC');
    $q = $this->db->get();
    return $q->result();
  }

  public function medicoByHorario($dia='',$hora='',$esp='')
  {
    if($dia<>''and $hora<>'')
    {
      $this->db->select("t.idTrabajador,t.nombre,t.apPaterno,t.foto,t.apMaterno,hd.hora_inicial,hd.hora_final");//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
      $this->db->distinct();
      $this->db->from("horario_dia hd");
      $this->db->where('hd.dia', $dia);
      $this->db->where('hd.hora_inicial<=', $hora);
      $this->db->where('hd.hora_final>', $hora);
      $this->db->join("horario h","h.idHorario_dia=hd.idHorario_dia");
      $this->db->join("trabajador t","h.idTrabajador=t.idtrabajador");
      $this->db->join("list_especialidad l","l.idTrabajador=t.idTrabajador");
      $this->db->where('l.idEspecialidad', $esp);

      $q = $this->db->get();
      return $q->result();
    }
  }

  public function modificarEspecialidad($data='')
  {
    if($data<>'')
    {
      $this->db->delete("list_especialidad",array('idTrabajador'=>$data['medico']));//t.nombre,t.apPaterno,t.apMaterno,t.foto,e.descripcion
      for ($i=0; $i < count($data['especialidad']); $i++) {
        $new = array(
          'idTrabajador'=>$data['medico'],
          'idEspecialidad'=>$data['especialidad'][$i]
        );
        $this->db->insert('list_especialidad', $new);
      }




      return $new;
    }
  }
}

 ?>
