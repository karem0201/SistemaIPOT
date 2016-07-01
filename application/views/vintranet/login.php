    <div class="container">
          <br>
        <div class="row">
            <div class="col-md-5 col-md-offset-4">
                <div class=" panel ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <div >
                              <?php
                                  echo form_open('login/index');
                                  $attribs = array('placeholder' => 'E-mail');
                                  echo form_input_email('email','',$attribs);
                                  $attribs = array('placeholder' => 'contraseña');
                                  echo form_input_password('password', '',$attribs);
                                  echo form_submit('Iniciar Sesión');
                                  echo form_close();
                               ?>

                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
