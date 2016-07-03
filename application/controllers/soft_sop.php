<?php
/**
 *
 */
class Soft_sop extends CI_Controller
{

      function __construct()
      {
            parent::__construct();
            $pase = false;
            if (!$this->session->userdata('login')){
                  header("Location: " . base_url(). "intranet");
            }
            else{
                  $id= ($this->session->userdata('idTipUsu'));
                  $this->load->model(array('muser'));
                  $permisos = $this->muser->getPermisos($id);
                  foreach ($permisos as $key) {
                        if($key->nombPermiso =='soft_sop'){
                              $pase = true;
                        }
                  }
                  if ($pase == false ) {
                  header("Location: " . base_url(). "intranet");
                  }
            }

      }

      public function index()
      {
            $this->load->view('vsoft_sop/head');
            $this->load->view('vsoft_sop/header');
            $this->load->model(array('muser'));
            $id =$this->session->userdata('idTipUsu');
            $result=$this->muser->getPermisos($id);
            $data=array('permiso'=>$result);
            $this->load->view('vsoft_sop/notificaciones',$data);
            $this->load->view('vsoft_sop/navEstatico',$data);
            $this->load->model('mcirugia');
            $consulta = $this->mcirugia->get();
            $data['result'] = $consulta;
            $this->load->view('vsoft_sop/acceso',$data);
            $this->load->view('vsoft_sop/footer');
      }

      public function nuevo()
      {
            $this->load->view('vsoft_sop/head');
            $this->load->view('vsoft_sop/header');
            $this->load->model(array('muser'));
            $id =$this->session->userdata('idTipUsu');
            $result=$this->muser->getPermisos($id);
            $data=array('permiso'=>$result);
            $this->load->view('vsoft_sop/notificaciones',$data);
            $this->load->view('vsoft_sop/navEstatico',$data);
            $this->load->model(array('mpaciente'));
            $result = $this->mpaciente->mostrar();
            $data= array('paciente'=> $result, 'link'=>'cirugia/nuevo');
            $this->load->view('vsoft_sop/registrarCirugia', $data);
            $this->load->view('vsoft_sop/footer');

      }

      public function mostrarPacientes()
      {
            $searchTerm = $this->input->get('name');
            $this->load->model(array('mpaciente'));
            $q= $this->mpaciente->mostrarNombres($searchTerm);

            $i=0;
            foreach ($q as $key ) {
                  $array[$i]=$key->apPaterno."  ".$key->apMaterno.", ".$key->nombre;
                  $i++;
            }
            if($q <>null)
            {
                 echo json_encode ($array);
           }else{
                 $i=0;
                 $q= $this->mpaciente->mostrarByHHCC($searchTerm);
                 foreach ($q as $key ) {
                       $array[$i]=$key->apPaterno."  ".$key->apMaterno.", ".$key->nombre;
                       $i++;
                 }
                  echo json_encode ($array);
          }

            //return json_encode ($q);

      }
}

 ?>
