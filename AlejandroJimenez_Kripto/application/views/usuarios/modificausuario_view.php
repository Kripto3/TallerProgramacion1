
<div class="container">
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Modificar Datos</h1>		
	</div>	            

	<?php echo form_open_multipart("verificomodifica_usuario/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row">
	   		<div class="col-md-6">
				<label for="nombre">Nombre</label>		
					<?php echo form_input(['name' => 'nombre', 
											'id' => 'nombre', 
											'class' => 'form-control',
											'placeholder' => 'Nombre...', 
											'required'=>'required', 
											'autofocus'=>'autofocus',
											'value'=>$nombre]); ?>
			</div>
			<div class="col-md-6">
				<label for="apellido">Apellido</label>
					<?php echo form_input(['name' => 'apellido', 
											'id' => 'apellido', 
											'class' => 'form-control',
											'placeholder' => 'Apellido...', 
											'required'=>'required',
											'value'=>$apellido]); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label for="email">Correo Electronico</label>
					<?php echo form_input(['type'=>'email', 
											'name' => 'email', 
											'id' => 'email', 
											'class' => 'form-control',
											'placeholder' => 'Correo electronico...', 
											'required'=>'required',
											'value'=>$email]); ?>
			</div>
			<div class="col-md-6">
				<label for="username">Nombre de usuario</label>
					<?php echo form_input(['name' => 'username', 
											'id' => 'username', 
											'class' => 'form-control',
											'placeholder' => 'username', 
											'required'=>'required',
											'value'=>$username]); ?>
			</div>
			<div class="col-md-6">
				<label for="Perfil">Nombre de usuario</label>
					<?php echo form_input(['name' => 'perfil_id', 
											'id' => 'perfil_id', 
											'class' => 'form-control',
											'placeholder' => 'username', 
											'required'=>'required',
											'value'=>$perfil_id]); ?>
			</div>
		</div>
		<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>	
		</div>
	<?php echo form_close(); ?>
</div>
</div>