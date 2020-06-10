<?php if (!$productos) { ?>

	<div class="container page-content">
		<div class="well">
			<h1>No hay Productos</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>

			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>

		<div class="container page-content">
			<h3 class="text-left display-4 mt-4">Listado de productos</h3>
			<br> 
			<div class="row">
				<a title="Agregar productos" class="card col-4 mb-4 mr-3 text-decoration-none border-success" href="<?php echo base_url('alta_producto'); ?>">
					<div class="card-body">
					<i class="fa fa-plus-square-o fa-3x text-success float-left mr-2"></i>
					<div class="card-horizontal-content mr-2">
						<p class="h5 card-title text-success">Agregar productos</p>
					</div>
					</div>
				</a>
				<a title="Ver usuarios usuarios" class="card col-4 mb-4 text-decoration-none border-danger"  href="<?php echo base_url('productos_eliminados'); ?>">
					<div class="card-body">
						<i class="fa fa-trash-o fa-3x text-danger float-left mr-2"></i>
						<div class="card-horizontal-content">
							<p class="h5 card-title text-danger">Ver productos eliminados</p>
						</div>
					</div>
				</a>
			</div>
			<br> 
			<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
						<th>ID</th>
						<th>Descripcion</th>
						<th>Categoria</th>
						<th>Precio de Venta</th>
						<th>Stock</th>
						<th>Imagen</th>
						<th>Eliminado</th>
						<th>Informacion</th>
						<th>Acciones</th>
		            </tr>
		        </thead>
		        <tbody>
		           	<?php foreach($productos->result() as $row)
						{ 
							$imagen = $row->imagen;	
							$id = $row->id;	?>
							<tr>
							<td><?php echo $id;  ?></td>
							<td><?php echo $row->descripcion;  ?></td>
							<td><?php echo $row->categoria_id;  ?></td>
							<td><?php echo $row->precio_venta;  ?></td>
							<td><?php echo $row->stock;  ?></td>
						    <td><img height="80px" src="<?php echo $imagen; ?>"/></td>
							<td><?php echo $row->eliminado;  ?></td>
							<td><?php echo $row->info;  ?></td>
							<td>
								<a class="dropdown-item text-info" href="<?php echo base_url("modifica_producto/$id");?>"><i class="fa fa-edit"></i> Modificar</a> 
								<a class="dropdown-item text-danger" href="<?php echo base_url("baja_producto/$id");?>"><i class="fa fa-trash"></i> Eliminar</a>
							</td>
						   </tr>
						<?php } ?>
		        </tbody>
		    </table>
		    <br>		
		</div>
<?php } ?>
