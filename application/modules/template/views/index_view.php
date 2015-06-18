<?php
  $username = array(
    'name'        => 'username', 
    'placeholder' => 'Email',
    'required'    => 'required'
  );
  
  $password = array(
    'name'        => 'password', 
    'placeholder' => 'Password',
    'required'    => 'required'
  );
  
  $submit = array(
    'name'  => 'submit', 
    'value' => 'Ingresar', 
    'title' => 'Iniciar sesión',
    'class' => 'btn btn-danger btn-lg',
    'style' => 'border-radius: 0px;'
  );
?>
    <?php echo $this->load->view('front/layout/head_view') ?>

    <body>
     <div class="container">
          <div class="col-md-12">
            <a id="Title" href="#">
                <h1 class="">
                  <span lang="es-ES">Gobernanza Rutas de Lima</span>
                </h1>
            </a>
            <span id="Logo">
              <img src="<?php echo base_url() ?>assets/images/logo_rutas_de_lima.png" alt="Rutas de Lima">
            </span>
          </div>
      
          <div id="Login">
            <?php $correcto = $this->session->flashdata('usuario_incorrecto');
                $texto = "";
                switch ($correcto) {
                  case 'error_login':
                      $texto = "Usuario y/o contraseña incorrecta";
                  break;
                  case 'sesion_login':
                      $texto = "Tu sesión ha caducado";
                  break;
                  case '':
                      $texto = "";
                  break;
                }
            ?>
            <?php echo $texto ?>
            <?php echo form_open(base_url().'login/inicio/valid','id="loginform" class="form-inline" role="form"')?>
                  <div class="Box">
                    <div class="User">bg-user</div>
                    <h2 class="Translate">Usuario</h2>
                    <?php echo form_input($username)?>
                    <?php echo form_hidden('token',$token)?>
                </div>
                  <div class="Box">
                    <div class="Password">bg-password</div>
                      <h2 class="Translate">Contraseña</h2>
                      <?php echo form_password($password)?>
                  </div>
                  <div align="center">
                    <?php echo form_submit($submit)?>
                  </div>
              <?php echo form_close()?>
          </div>
      </div> <!-- /container -->
      

      <div id="Footer" class="Translate">
        <div class="container">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
      </div>
    
    </body>
</html>