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
}

 ?>
