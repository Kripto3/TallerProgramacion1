<?php if (!$productos) { ?>

	<div class="container page-content">
		<h1 class="display-4 text-left mt-4">No hay Eliminados</h1>
	</div>
	<hr/>

<?php } else { ?>

	<div class="container page-content">
			<h1 class="display-4 text-left mt-4">Listado de Productos Eliminados</h1>
		<hr/>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
					<th>ID</th>
					<th>Categoria</th>
					<th>Descripcion</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Informacion</th>
					<th>Modificar</th>
		            </tr>
		        </thead>
		        <tbody>
					<?php foreach($productos->result() as $row){ ?>
					<tr>
						<td><?php echo $row->id;  ?></td>
						<td><?php echo $row->descripcion_categoria;  ?></td>
						<td><?php echo $row->descripcion;  ?></td>
						<td><?php echo $row->precio_venta;  ?></td>
						<td><?php echo $row->stock;  ?></td>
						<td><?php echo $row->eliminado;  ?></td>
						<td><?php echo $row->info;  ?></td>
						<td>
						<a class="text-success" href="<?php echo base_url("activa_producto/$row->id");?>"><i class="fa fa-check-circle-o"></i> Activar</a>
						</td>
					</tr>
					<?php } ?>
		        </tbody>
		    </table>
			<a href="<?php echo base_url('productos'); ?>" class="btn btn-lg col-1 mb-3 btn-secondary">Volver</a>	              
	</div>

<?php } ?>