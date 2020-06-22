
<?php if (!$usuarios) { ?>
	<div class="container page-content">
		<div class="well">
			<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/construccion.png');?>" width="250">
			<h1 class="text-center"><b> Todavia no se han cargado usuarios.</b></h1>	
		</div>
	</div>

	<?php } else { ?>
	<div class="container page-content">
			<h1 class="display-4  mt-4">Todos los Usuarios</h1>
			<hr>
			<div class="row">
				<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
					<a title="Agregar usuarios" class="card col-4 mb-4 mr-3 text-decoration-none border-success" href="<?php echo base_url('agrega_usuarios'); ?>">
						<div class="card-body">
						<i class="fa fa-address-book-o fa-3x text-success float-left mr-2"></i>
						<div class="card-horizontal-content mr-2">
							<p class="h5 card-title text-success">Agregar Usuarios</p>
						</div>
						</div>
					</a>
					<a title="Ver usuarios usuarios" class="card col-4 mb-4 text-decoration-none border-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">
						<div class="card-body">
							<i class="fa fa-user-times fa-3x text-danger float-left mr-2"></i>
							<div class="card-horizontal-content">
								<p class="h5 card-title text-danger">Usuarios Eliminados</p>
							</div>
						</div>
					</a>
				<?php }else	{ ?>
					<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">Ver Eliminados</a>
				<?php } ?>
			</div>
		<br>
		<div class="table-responsive-sm">	
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>email</th>
						<th>Usuario</th>
						<th>Categoria</th>
						<th>Eliminado</th>
						<th>Acciones</th>
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
						<td><?php echo $row->baja;  ?></td>
						<td>
							<a class="text-success" href="<?php echo base_url("modificar_usuario/$row->id_usuario");?>"><i class="fa fa-edit"></i> Modificar</a> | 
							<?php
								if (($id_usuario != $row->id_usuario) and ($row->baja =="NO" ) ){?>
								<a class="text-danger" href="<?php echo base_url("baja_usuario/$row->id_usuario");?>"><i class="fa fa-trash"></i> Dar de baja</a>
							<?php } ?>
						</td>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
<?php } ?>
	<br><br>
