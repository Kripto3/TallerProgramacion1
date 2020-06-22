<body>
  <section class="container bg-imagen-consultas" style="background-image: url('/assets/img/fondos/fondo-color.jpg');">

  <?php echo validation_errors(); ?>  

  <br><br>
    <h3 class=" display-4 text-center ">Consultas</h3>
    <hr class="my-4 ">
    <p class="mb-4 ml-3 mr-2 text-muted text-center">
      Recuerde que su correo electronico y/o n&uacute;m telefonico es importante para comunicarnos con Utd.
    </p>

  <div class="container">
    <div class="offset-md-2 col-md-8 ">
        <?php echo form_open_multipart('verifico_consultas', 
                  ['class' => 'form', 'role' => 'form', 'id' => 'form_consultas']); ?>
         <div class="row">
              <div class="col-md-6">
               <label for="nombre" >Nombre</label>
                  <?php echo form_input(['name' => 'nombre', 
                                          'id' => 'nombre', 
                                          'class' => 'form-control rounded-pill border-0 shadow-sm px-4',
                                          'placeholder' => '', 
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('nombre')]); ?>
              </div>


            <div class="col-md-6">
              <label for="apellido">Apellido</label>
              <?php echo form_input(['name' => 'apellido', 
                                          'id' => 'apellido', 
                                          'class' => 'form-control rounded-pill border-0 shadow-sm px-4',
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('apellido')]); ?>
            </div>
          <br>
            <div class="col-md-6 mt-3">
              <label for="telefono" >Teléfono</label>
                <?php echo form_input(['name' => 'telefono', 
                                          'id' => 'telefono', 
                                          'class' => 'form-control rounded-pill border-0 shadow-sm px-4',
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('telefono')]); ?>
            </div>
            <div class="col-md-6 mt-3">
              <label for="email">Correo electronico</label>
                <?php echo form_input(['name' => 'email', 
                                          'id' => 'email', 
                                          'class' => 'form-control rounded-pill border-0 shadow-sm px-4',
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('email')]); ?>
            </div>

            <div class="col-md-12 mt-3">
              <label for="asunto" >Asunto</label>
                <?php echo form_input(['name' => 'asunto', 
                                          'id' => 'asunto', 
                                          'class' => 'form-control rounded-pill border-0 shadow-sm px-4',
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('asunto')]); ?>
            </div>
            <br>

            <div class="col-sm-12 mt-3">
              <label for="mensaje">Mensaje</label>
               <?php echo form_textarea(['name' => 'mensaje', 
                                          'id' => 'mensaje', 
                                          'class' => 'form-control textarea  border-0 shadow-sm px-4',
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('mensaje')]); ?>
              <br>                                                  
            </div>
            <div class="col-md-6">
            </div>

          </div>
        <br> 
         <div class="row">
          <div class="col-12">
            <?php echo form_submit('submit', 'Enviar Consulta',"class='btn col-3 btn-success  d-inline-block mb-5'"); ?>
            <?php echo form_reset ('reset', 'Limpiar', "class='btn btn-secondary col-3 ml-2 mb-5''"); ?>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
  </div>
  </section>
</body>  
