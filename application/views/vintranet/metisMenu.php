<div class="navbar-default sidebar" >
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="<?= base_url()?>home"><i class="fa fa-th-large fa-fw"></i> Inicio</a>
            </li>
           <?php if($this->session->userdata('login')){
             $estructura="";

                 foreach ($categoria as $cat){
                       $estructura .='<li>';
                          $estructura .='<a href="#"><i class="fa fa-medkit fa-fw" ></i>'. $cat->descripcion.'<span class="fa arrow"></span></a>';
                              $estructura .='<ul class="nav nav-second-level">';
                                foreach ($permiso as $per) {
                                    if ($per->idPermiso_categoria===$cat->idPermiso_categoria) {
                                      $swCategoria=1;
                                      $estructura .= '<li>';
                                          $estructura .='<a href="'.base_url().$cat->nombre.'/'.$per->nombPermiso.'">'.$per->desPermiso.'</a>';
                                      $estructura .= '</li>';
                                    }
                                }
                              $estructura .='</ul>';
                        $estructura .='</li>';
                  }
                  echo $estructura;
              }
              ?>

              <li>
                  <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="flot.html">Flot Charts</a>
                      </li>
                      <li>
                          <a href="morris.html">Morris.js Charts</a>
                      </li>
                  </ul>
                  <!-- /.nav-second-level -->
              </li>
            </ul>
        </div><!-- /.sidebar-collapse -->
      </div><!-- /.navbar-static-side -->
