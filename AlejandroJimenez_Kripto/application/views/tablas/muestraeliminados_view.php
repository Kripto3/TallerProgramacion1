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
					<th>Descripcion</th>
					<th>Categoria</th>
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
						<td><?php echo $row->descripcion;  ?></td>
						<td><?php echo $row->categoria_id;  ?></td>
						<td><?php echo $row->precio_venta;  ?></td>
						<td><?php echo $row->stock;  ?></td>
						<td><?php echo $row->eliminado;  ?></td>
						<td><?php echo $row->info;  ?></td>
						<td>
						<a class="text-info" href="<?php echo base_url("modifica_producto/$row->id");?>"><i class="fa fa-edit"></i> Modificar</a>					
						<a class="text-success" href="<?php echo base_url("activa_producto/$row->id");?>"><i class="fa fa-check-circle-o"></i> Activar</a>
						</td>
					</tr>
					<?php } ?>
		        </tbody>
		    </table>            
	</div>

<?php } ?>