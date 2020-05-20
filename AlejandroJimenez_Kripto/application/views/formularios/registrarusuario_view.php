<section  class="mt-4 page-content">
  <div class="container">
    <h2 class="text-center">Registrarme</h3>
    <hr class="my-4 ">
    <div class="container">
    <?php  echo validation_errors(); ?>

    <div class="offset-md-2 col-md-8 ">
    <?php echo form_open('verificar_registro', ['class' => 'form-group mb-3', 'role' => 'form', 'id' => 'formularioRegistro']);  ?>

      <div class="form-group col-md-12">
        <label for="nombre">Nombre:</label>
        <?php  echo form_input(['name' => 'nombre',
                                'id' => 'nombre',
                              'class' => 'form-control',
                            'placeholder' => 'Nombre',
                          'required' => 'required',
                        'autofocus' => 'autofocus',
                      'value' => set_value('nombre')]); ?>
      </div>
      <div class="form-group col-md-12">
        <label for="apellido">Apellido:</label>
        <?php  echo form_input(['name' => 'apellido',
                                'id' => 'apellido',
                              'class' => 'form-control',
                            'placeholder' => 'Apellido',
                          'required' => 'required',
                      'value' => set_value('apellido')]); ?>
      </div>
      <div class="form-group col-md-12">
        <label for="username">usuario:</label>
        <?php  echo form_input(['name' => 'username',
                                'id' => 'username',
                              'class' => 'form-control',
                            'placeholder' => 'usuario',
                          'required' => 'required',
                      'value' => set_value('username')]); ?>
      </div>
      <div class="form-group col-md-12">
        <label for="email">Email:</label>
        <?php  echo form_input(['name' => 'email',
                                'id' => 'email',
                              'class' => 'form-control',
                            'placeholder' => 'ejemplo@correo.com',
                          'required' => 'required',
                          'type' => 'email',
                      'value' => set_value('email')]); ?>
      </div>
      <div class="form-group col-md-12">
        <label for="password">Contraseña</label>
        <?php  echo form_input(['name' => 'password',
                                'id' => 'password',
                                'class' => 'form-control',
                                'placeholder' => '',
                                'required' => 'required',
                                'type' => 'password',
                                'value' => set_value('password')]); ?>
      </div>
       <div class="form-group col-md-12">
        <label for="re_password">Repetir Contraseña</label>
        <?php  echo form_input(['name' => 're_password',
                                'id' => 're_password',
                              'class' => 'form-control',
                            'placeholder' => '',
                          'required' => 'required',
                           'type' => 'password',
                      'value' => set_value('re_password')]); ?>
      </div>
     <button class="btn btn-success btnConsultas ml-3">Crear</button>
    </div>
  </div>
</div>
</section>