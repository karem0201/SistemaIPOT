<nav class="navbar navbar-inverse" id="navegador" role="banner">
    <div class="container" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="<?=base_url()?>/plantillas/images/logoPage2.png" alt="logo"></a>
            <!-- <a class="navbar-brand" href="index.html"><div class="logo"style="background-color:red; width:70px; height:70px;">Instituo Peruano de <br>Ortopedia y Traumatologia</div></a> -->
        </div>

        <div class="collapse navbar-collapse navbar-right" >
            <ul class="nav navbar-nav" >
                <li class="active"><a href="<?= base_url()?>"><spam class="fa fa-home"></spam> Inicio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url()?>/home/historia">Historia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Especialidades <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url()?>home/staff">Staff M&eacute;dico</a></li>
                        <li><a href="<?= base_url()?>home/staff">Preg&uacute;ntale a tu m&eacute;dico</a></li>
                        <li><a href="blog-item.html">Testimonios</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url()?>home/tienda">Tienda</a></li>
                        <li><a href="<?= base_url()?>home/podologia">Podolog&iacute;a</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Traumatolog&iacute;a al d&iacute;a</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cont&aacute;ctanos <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url()?>home/staff">Preg&uacute;ntale a tu m&eacute;dico</a></li>
                        <li><a href="<?= base_url()?>cita">Separa tu cita</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->
