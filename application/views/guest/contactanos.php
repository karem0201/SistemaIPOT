<section id="contact-info">
    <div class="center">
        <h2>¿C&oacute;mo encontrarnos?</h2>
        <p class="lead">Nuestra prioridad es tu bienestar.</p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15605.227070799056!2d-77.017915!3d-12.091139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe340e97ae03b86a4!2sInstituto+de+Ortopedia+y+Traumatolog%C3%ADa+Cl%C3%ADnica+Ricardo+Palma!5e0!3m2!1ses!2spe!4v1471381700838" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-8 col-sm-offset-1">
                            <address>
                                <h5>Nuestro Local</h5>
                                <h5>Instituto Peruano de Ortopedia y Traumatolog&iacute;a</h5>
                                <p>Calle Ricardo Angulo N° 180 <br>
                                Urb Corpac - San Isidro</p>
                                <p>Tel&eacute;fono: (01) 224 2224 Anexo 4070 <br>
                                Direccion e-mail: contacto@ipot-clinicaricardopalma.pe</p>
                            </address>

                            <address>
                                <h5>Otras l&iacute;neas</h5>
                                <p>(01) *** *****<p>
                                <p>Tienda de ortopedia :**** ******<br>
                                Direcci&oacute;n e-mail: ortopedia@ipot-clinicaricardopalma.pe</p>
                            </address>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>D&eacute;janos tu mensaje</h2>
            <p class="lead">Tus consultas y sugerencias nos ayudan a mejorar</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Nombre *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>tel&eacute;fono</label>
                        <input type="number" class="form-control">
                    </div>

                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Asunto *</label>
                        <input type="text" name="subject" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Mensaje *</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-info btn-lg" required="required">Enviar mensaje</button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
