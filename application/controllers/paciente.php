<?php
/**
 *
 */
class Paciente extends CI_controller
{
      function __construct()
      {
            parent::__construct();
      }

      public function index()
      {
            $searchTerm = $this->input->get('term');
            $this->load->model(array('mpaciente'));
            $q= $this->mpaciente->mostrarNombres($searchTerm);
            return json_encode($q);
      }

      public function mostrarPacientes($value='')
      {
            
            $this->load->model(array('mpaciente'));
            $q= $this->mpaciente->mostrarNombres($value);

            $i=0;
            foreach ($q as $key ) {
                  $array[$i]=$key->apPaterno."  ".$key->apMaterno.", ".$key->nombre;
                  $i++;
            }
            if($q <>null)
            {
                 return json_encode ($array);
           }


            //return json_encode ($q);
      }
}

 ?>
