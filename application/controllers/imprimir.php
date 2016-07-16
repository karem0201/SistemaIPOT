<?php

class Imprimir extends CI_Controller
{
      function __construct()
      {
           parent::__construct();
           $this->load->model(array('mcirugia'));
           $this->load->model(array('mproductos'));
           $this->load->library('pdf');
      }

      public function pdf_hojaMat($id="")
      {
            if($this->session->userdata('idTipUsu')==2 || 1){//2 medico, 1 administrador
                  $cirugia=$this->mcirugia->getCirugiaById($id);
                  $materiales = $this->mproductos->mostrarByCirugia($id);
                  $data=array('data'=>$cirugia,'material'=>$materiales);
                  $this->pdf->load_view('vpdf/hojaMat',$data);
                  $this->pdf->render();
                  $this->pdf->stream("reqMAterial".$cirugia->hhcc.".pdf", array("Attachment" =>0));
            }
            else{
                  header("Location: " . base_url(). "index");
            }
      }

      public function prueba($id='')
      {if($this->session->userdata('idTipUsu')=="2"){
            $data=$this->mcirugia->getCirugiaById($id);
            $materiales = $this->mproductos->mostrarByCirugia($id);
            $data=array('data'=>$data,'material'=>$materiales);
            $this->load->view('vpdf/hojaMat', $data);
      }

      }
}

 ?>
