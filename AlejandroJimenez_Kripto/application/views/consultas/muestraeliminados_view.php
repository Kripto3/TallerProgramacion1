
	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
	<?php if (!$consultas) { ?>
		<div class="container page-content">
			<h1 class="text-left display-4 mt-4">Sin consultas.</h1>	
			<a class="btn btn-secondary" href="<?php echo base_url('ver_consultas'); ?>">Volver a Consultas</a>
	</div>
<?php } else { ?>

	<div class="container page-content">
		<h1	 class="display-4 text-left">Listado de consultas archivadas</h1>
		<hr>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
				<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>email</th>
					<th>Asunto</th>
					<th>Mensaje</th>
					<th>Archivar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consultas->result() as $row) { ?>	
					<tr>
					<td><?php echo $row->id_mensaje;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->telefono;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->asunto;  ?></td>
					<td><?php echo $row->mensaje;  ?></td>
					<td>
					<a class="text-warning" href="<?php echo base_url("restaurar_consulta/$row->id_mensaje");?>"><i class="fa fa-window-restore"></i> Restaurar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	
		<a href="<?php echo base_url('ver_consultas'); ?>" class="btn btn-lg col-2 btn-secondary">Volver</a>	            
	</div>
	<?php } ?>
		
<?php } ?>
