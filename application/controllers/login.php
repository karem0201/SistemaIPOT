<?php
/**
 *
 */
class Login extends CI_Controller
{

  public function index()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $this->load->model('muser');
    $fila = $this->muser->getUser($email);

    if($fila != null)
    {
      if($fila->password == $password)
      {
            $this->load->model('muser');
        $Usuario =array(
              'email' => $fila->email,
              'idUsu' =>$fila->idUsuario,
              'login'=>true,
              'idTipUsu'=>$fila->idTipoUsuario

                );
                $this->session->set_userdata($Usuario);

                  header("Location: " . base_url(). "intranet");
      }
      else{
        header("Location: " . base_url() . "intranet");
      }
    }
    else{
      echo "no encontro";
    }
    }

    public function logout()
    {
      $array_sesiones = array('idUsu' => '', 'email' => '','login' => 'false','idTipUsu' => '');
      $this->session->unset_userdata($array_sesiones);
      $this->session->sess_destroy();
      header("Location: " . base_url() . "intranet");
    }






}

 ?>
