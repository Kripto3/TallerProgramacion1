<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>


<?php if (!$usuarios) { ?>

	<div class="container">
		<div class="well">
			<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/construccion.png');?>" width="250">
			<h1 class="text-center"><b> Todavia no se han eliminado usuarios.</b></h1>	
		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Usuarios Eliminados</h1>
		</div>	

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>email</th>
					<th>Usuario</th>
					<th>Categoria</th>
					<th>Habilitar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row) { ?>	
					<tr>
					<td><?php echo $row->id_usuario;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->username;  ?></td>
					<td><?php echo $row->perfil_id;  ?></td>

					<td>
						<!--
						<a href="<?php echo base_url("modifica_usuario/$row->id_usuario");?>">Modificar</a>|
						-->
						<a href="<?php echo base_url("activa_usuario/$row->id_usuario");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

	<?php } ?>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
</body>