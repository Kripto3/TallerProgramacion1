<body>
	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
	<?php if (!$consultas) { ?>
	<div class="container page-content">
			<h1 class="text-left display-4 mt-4">Sin consultas.</h1>	
			<a class="btn btn-danger" href="<?php echo base_url('ver_archivados'); ?>">Ver Arhivados</a>
	</div>
<?php } else { ?>

	<div class="container page-content">
			<h1 class="text-left display-4 mt-4">Listado de Consultas</h1>
			<hr>
			<div class="row">
			<a title="Ver archivados" class="card col-4 mb-4 ml-3 text-decoration-none border-warning" href="<?php echo base_url('ver_archivados'); ?>">
						<div class="card-body">
						<i class="fa fa-archive fa-3x text-warning float-left mr-2"></i>
						<div class="card-horizontal-content mr-2">
							<p class="h5 card-title text-warning">Ver Archivados</p>
						</div>
						</div>
					</a>
			</div>
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
						<a class="text-success" href="<?php echo base_url("archiva_consulta/$row->id_mensaje");?>"> <i class="fa fa-archive"></i> Archivar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php } ?>
		
<?php } ?>
</body>
