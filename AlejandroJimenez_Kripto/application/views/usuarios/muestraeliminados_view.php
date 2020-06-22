
<?php if (!$usuarios) { ?>

	<div class="container page-content">
		<h1 class="display-4 text-center"><b>No se encuentran bajas realizadas.</b></h1>	
	</div>

<?php } else { ?>

	<div class="container page-content">
		<h1 class="display-4 mt-4 text-left">Usuarios Eliminados</h1>
		<hr/>
		<div class="table-responsive-sm">	
			<table id="example" class="table table-striped table-bordered dt-responsive " style="width:100%">
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
							<a class="text-success text-decoration-none" href="<?php echo base_url("activa_usuario/$row->id_usuario");?>"> <i class="fa fa-check-circle"></i> Activar</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<a href="<?php echo base_url('ver_usuarios'); ?>" class="btn btn-lg col-2 btn-secondary">Volver</a>	
		</div>	            
	</div>

	<?php } ?>
