
<section class="container  page-content">
	<h1 class="text-left mt-4 display-4">Agregar Usuario</h1>
	<hr>
	<div class="container">
		<?php echo validation_errors(); ?>
		<!-- Genero el formulario para crear una usuario -->
		<?php echo form_open('verificar_usuario', ['class' => 'form-group', 
								'role' => 'form', 'id' => 'form_registro']); ?>
		<div class="row mt-2">
	    	<div class="col-md-6">		
				<label for="nombre">Nombre</label>
					<?php echo form_input(['name' => 'nombre', 
											'id' => 'nombre', 
											'class' => 'form-control rounded-pill border-0 shadow-sm',
											'required'=>'required', 
											'autofocus'=>'autofocus',
											'value'=>set_value('nombre')]); ?>
			</div>
			<div class="col-md-6">
				<label for="apellido">Apellido</label>
					<?php echo form_input(['name' => 'apellido', 
											'id' => 'apellido', 
											'class' => 'form-control rounded-pill border-0 shadow-sm',
											'required'=>'required',
											'value'=>set_value('apellido')]); ?>
			</div>
		</div>	
		<div class="row mt-2">
			<div class="col-md-6">		
				<label for="email">Correo Electronico</label>
								<?php echo form_input(['type'=>'email', 
														'name' => 'email', 
														'id' => 'email', 
														'class' => 'form-control rounded-pill border-0 shadow-sm',
														'required'=>'required',
														'value'=>set_value('email')]); ?>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-6 ">		
				<label for="usuario">Nombre de usuario</label>
								<?php echo form_input(['name' => 'username', 
														'id' => 'username', 
														'class' => 'form-control rounded-pill border-0 shadow-sm',
														'required'=>'required',
														'value'=>set_value('username')]); ?>
			</div>
			<div class="col-md-6">		
				<label for="perfil">Perfil</label>
								<?php echo form_input(['name' => 'perfil_id', 
														'id' => 'perfil_id', 
														'class' => 'form-control rounded-pill border-0 shadow-sm',
														'placeholder' => '1- Admin | 2-Cliente ', 
														'required'=>'required',
														'value'=>set_value('perfil_id')]); ?>
			</div>
		</div>	
		<div class="row mt-2">
			<div class="col-md-6">		
				<label for="pass">Contraseña</label>
								<?php echo form_password(['name' => 'password', 
														'id' => 'password', 
														'class' => 'form-control rounded-pill border-0 shadow-sm',
														'required'=>'required']); ?>
			</div>
			<div class="col-md-6">		
				<label for="re_password">Reingrese su contraseña</label>
								<?php echo form_password(['name' => 're_password', 
														'id' => 're_password', 
														'class' => 'form-control rounded-pill border-0 shadow-sm',
														'required'=>'required']); ?>
			</div>
		</div>
		<br>
		<?php echo form_submit('submit', 'Registrar',"class='btn btn-lg btn-success btn-block col-3 d-inline-block' "); ?>
		<a href="<?php echo base_url('ver_usuarios'); ?>" class="btn btn-lg col-3 btn-secondary">Cancelar</a>	
		<?php echo form_close(); ?>
	</div>
	</section>