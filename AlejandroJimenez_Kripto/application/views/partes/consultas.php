<body>
  <section class="container">

  <?php echo validation_errors(); ?>  

  <h1 class="text-center mt-4 text-uppercase font-weight-bold font-italic">Comunicate Con Nosotros</h1>
  <br><br>
    <h3 class="font-weight-bold">Consultas</h3>

    <p class="mb-4 ml-3 mr-2">
      Complete el siguiente formulario y atenderemos su consulta a la brevedad:
    </p>

  <div class="container">
        <?php echo form_open_multipart('verifico_consultas', 
                  ['class' => 'form', 'role' => 'form', 'id' => 'form_consultas']); ?>
         <div class="row">
              <div class="col-md-3">
               <label for="nombre" >Nombre</label>
                  <?php echo form_input(['name' => 'nombre', 
                                          'id' => 'nombre', 
                                          'class' => 'form-control',
                                          'placeholder' => 'Nombre...', 
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('nombre')]); ?>
              </div>


            <div class="col-md-3">
              <label for="apellido">Apellido</label>
              <?php echo form_input(['name' => 'apellido', 
                                          'id' => 'apellido', 
                                          'class' => 'form-control',
                                          'placeholder' => 'Apellido...', 
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('apellido')]); ?>
            </div>
            <div class="col-md-6"></div>
          <br>
            <div class="col-md-3 mt-3">
              <label for="telefono" >Teléfono</label>
                <?php echo form_input(['name' => 'telefono', 
                                          'id' => 'telefono', 
                                          'class' => 'form-control',
                                          'placeholder' => 'Telefono...', 
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('telefono')]); ?>
            </div>
            <div class="col-md-3 mt-3">
              <label for="email">Correo electronico</label>
                <?php echo form_input(['name' => 'email', 
                                          'id' => 'email', 
                                          'class' => 'form-control',
                                          'placeholder' => 'Correo electronico...', 
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('email')]); ?>
            </div>
            <div class="col-md-6"></div>

            <div class="col-sm-6 mt-3">
              <label for="asunto" >Asunto</label>
                <?php echo form_input(['name' => 'asunto', 
                                          'id' => 'asunto', 
                                          'class' => 'form-control',
                                          'placeholder' => 'Asunto...', 
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('asunto')]); ?>
            </div>
            <div class="col-md-6"></div>
            <br>

            <div class="col-sm-6 mt-3">
              <label for="mensaje">Mensaje</label>
               <?php echo form_textarea(['name' => 'mensaje', 
                                          'id' => 'mensaje', 
                                          'class' => 'form-control textarea',
                                          'placeholder' => 'Ingrese su mensaje aqui...', 
                                          'autofocus'=>'autofocus',
                                          'value'=>set_value('mensaje')]); ?>
              <br>                            
             <h6> <b>Tamaño maximo de mensaje 250 caracteres.</b></h6>                              
            </div>
            <div class="col-md-6">
            </div>

          </div>
        <br>  
        <?php echo form_reset ('reset', 'Limpiar', "class='btn btn-danger ml-1'"); ?>
        <?php echo form_submit('submit', 'Enviar Consulta',"class='btn btn-dark'"); ?>
        <?php echo form_close(); ?>
  </div>
  </section>

  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>

</body>  
