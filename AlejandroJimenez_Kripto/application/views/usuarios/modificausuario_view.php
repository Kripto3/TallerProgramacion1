
<div class="container page-content">
<div class="col-sm-10 col-md-10">
		<h1 class="display-4 text-left mt-4">Modificar Datos</h1>		
	<hr/>
	<?php echo form_open_multipart("verificar_modificar_usuario/$id_usuario", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row mt-4">
	   		<div class="col-md-6">
				<label for="nombre">Nombre:</label>		
					<?php echo form_input(['name' => 'nombre', 
											'id' => 'nombre', 
											'class' => 'form-control rounded-pill border-0 shadow-sm',
											'required'=>'required', 
											'autofocus'=>'autofocus',
											'value'=>$nombre]); ?>
											<?php echo form_error('nombre'); ?>
			</div>
			<div class="col-md-6">
				<label for="apellido">Apellido:</label>
					<?php echo form_input(['name' => 'apellido', 
											'id' => 'apellido', 
											'class' => 'form-control rounded-pill border-0 shadow-sm',
											'required'=>'required',
											'value'=>$apellido]); ?>
											<?php echo form_error('apellido'); ?>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-6">
				<label for="email">Correo Electronico:</label>
					<?php echo form_input(['type'=>'email', 
											'name' => 'email', 
											'id' => 'email', 
											'class' => 'form-control rounded-pill border-0 shadow-sm',
											'placeholder' => 'Correo electronico', 
											'required'=>'required',
											'value'=>$email]); ?>
											<?php echo form_error('email'); ?>
			</div>
			<div class="col-md-6">
				<label for="username">Nombre de usuario:</label>
					<?php echo form_input(['name' => 'username', 
											'id' => 'username', 
											'class' => 'form-control rounded-pill border-0 shadow-sm',
											'placeholder' => 'username', 
											'required'=>'required',
											'value'=>$username]); ?>
											<?php echo form_error('username'); ?>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-6">
				<label for="Perfil">Perfil:</label><br />
					<span class="text-muted">1 - Admin | 2- cliente</span>
					<?php echo form_input(['name' => 'perfil_id', 
											'id' => 'perfil_id', 
											'class' => 'form-control rounded-pill border-0 shadow-sm',
											'placeholder' => 'username', 
											'required'=>'required',
											'value'=>$perfil_id]); ?>
											<?php echo form_error('perfil_id'); ?>
			</div>
		</div>
		<?php echo form_submit('modificar', 'Modificar',"class='btn col-3 btn-lg btn-success mt-4 btn-block d-inline-block'"); ?>
		<a href="<?php echo base_url('ver_usuarios'); ?>" class="btn btn-lg col-3 btn-secondary mt-4 ">Cancelar</a>	
		</div>
		<br/>
	<?php echo form_close(); ?>
</div>
</div>