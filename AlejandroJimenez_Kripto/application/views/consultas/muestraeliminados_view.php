<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
	<?php if (!$consultas) { ?>
	<div class="container">
		<div class="well">
			<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/construccion.png');?>" width="250">
			<h1 class="text-center"><b> No hay consultas archivadas.</b></h1>	
		</div>
	</div>
<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Consultas Archivadas</h1>
		</div>	
		<br><br>
		<table class="table table-hover table-dark">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>email</th>
					<th>Asunto</th>
					<th>Mensaje</th>
					<th>Restaurar</th>
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
						<a href="<?php echo base_url("restaurar_consulta/$row->id_mensaje");?>">Restaurar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>
	<?php } ?>
		
<?php } ?>

	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
</body>