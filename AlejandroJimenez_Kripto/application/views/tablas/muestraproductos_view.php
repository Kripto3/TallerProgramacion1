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
			<h3 class="text-center mt-3">Listado de productos</h3>
		<br> <br>
			<a type="button" class="btn btn-success" href="<?php echo base_url('alta_producto'); ?>">Agregar</a>
            <a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
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
							<td>
								<a class="dropdown-item" href="<?php echo base_url("modifica_producto/$id");?>"><i class="fa fa-edit"></i> Modificar</a> 
								<a class="dropdown-item" href="<?php echo base_url("baja_producto/$id");?>"><i class="fa fa-trash"></i> Eliminar</a>
							</td>
						   </tr>
						<?php } ?>
		        </tbody>
		    </table>
		    <br>	<br>	
		</div>
<?php } ?>
