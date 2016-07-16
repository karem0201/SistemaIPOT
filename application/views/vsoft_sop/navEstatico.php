<div class="navbar-default sidebar" >
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="<?= base_url()?>soft_sop"><i class="fa fa-th-large fa-fw"></i> Inicio</a>
            </li>
           <?php if($this->session->userdata('login')){
                 $result = $permiso;
                 foreach ($result as $key){  ?>
                       <li >
                             <a href="#">
                       <?php
                       if($key->nombPermiso=="soft_sop"){?>
                             <i class="fa fa-medkit fa-fw"></i><?= $key->desPermiso?><span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                 <li>
                                     <a href="<?= base_url()?>soft_sop/nuevo">Nuevo</a>
                                 </li>
                                 <li>
                                     <a href="morris.html">Morris.js Charts</a>
                                 </li>
                             </ul>
                             <?php }
                             else{ echo $key->desPermiso ?></a><?php }?>
                     </li>
                 <?php }
              }?>



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
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="icons.html"> Icons</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                           <li>
                                <a href="#">Third Level Item</a>
                           </li>
                           <li>
                                <a href="#">Third Level Item</a>
                           </li>
                           <li>
                                <a href="#">Third Level Item</a>
                           </li>
                           <li>
                                <a href="#">Third Level Item</a>
                           </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul><!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul><!-- /.nav-second-level -->
            </li>
            <li>
               <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
               <ul class="nav nav-second-level">
                   <li>
                       <a href="#">Second Level Item</a>
                   </li>
                   <li>
                       <a href="#">Second Level Item</a>
                   </li>
                   <li>
                       <a href="#">Third Level <span class="fa arrow"></span></a>
                       <ul class="nav nav-third-level">
                          <li>
                              <a href="#">Third Level Item</a>
                          </li>
                          <li>
                              <a href="#">Third Level Item</a>
                          </li>
                          <li>
                              <a href="#">Third Level Item</a>
                          </li>
                          <li>
                              <a href="#">Third Level Item</a>
                          </li>
                       </ul><!-- /.nav-third-level -->
                   </li>
               </ul><!-- /.nav-second-level -->
           </li>
        </ul>
    </div><!-- /.sidebar-collapse -->
</div><!-- /.navbar-static-side -->
</nav>
