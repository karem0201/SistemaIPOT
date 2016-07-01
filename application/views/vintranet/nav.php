<nav class="navbar navbar-inverse" role="banner" id="navegador">
    <div class="container ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="<?=base_url()?>/plantillas/images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= base_url()?>intranet">Inicio</a></li>                                                                      <?php
                      if($this->session->userdata('login')){?>
                        <li>
                            <a href="<?= base_url()?>login/logout">Cerrar Sesion</a>
                        </li>
                    <?php
                      }

                   ?>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->
