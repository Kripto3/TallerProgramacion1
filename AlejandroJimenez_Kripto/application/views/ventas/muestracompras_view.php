<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '2') ) { ?>

<?php if (!$ventas_detalle) { ?>
	<div class="container page-content">
		<h1 class="display-4 text-left"><b> Todavia no se han realizado Compras.</b></h1>	
	</div>

<?php } else { ?>
	<div class="container page-content">
			<h1 class="display-4 mt-4">Listado de Compras</h1>
		<br>
		
		<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>Factura ID</th>
				<th>Fecha</th>
				<th>Descripcion</th>
				<th>Categoria</th>
				<th>Cantidad</th>
				<th>Precio Venta por unidad</th>
				<th>Total de Venta</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach($ventas_detalle->result() as $row)
				{ 
					?>

					<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->fecha;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->descripcion_categoria;  ?></td>
					<td><?php echo $row->cantidad;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->total_venta;  ?></td>
					
				</tr>
				<?php } ?>
			</tbody>
			</tbody>
		</table>            
	</div>
	<?php } ?>
<?php } ?>

