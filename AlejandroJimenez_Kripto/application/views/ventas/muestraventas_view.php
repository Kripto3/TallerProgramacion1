	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>

	<?php if (!$ventas_cabecera) { ?>
	<div class="container page-content">
		<div class="well">
			<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/construccion.png');?>" width="250">
			<h1 class="text-center"><b> Todavia no se han realizado ventas.</b></h1>	
		</div>

			<a type="button" class="btn btn-success" href="<?php echo base_url('agrega_producto'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
			
	</div>

<?php } else { ?>
	<div class="container page-content">
		<div class="well">
			<h1>Todas las ventas</h1>
		</div>
		<br><br>
		<table class="table table-hover table-dark">
			<thead>
				<tr>
					<th>ID Operacion</th>
					<th>Fecha</th>
					<th>ID Usuario</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Cantidad</th>
					<th>Precio Venta por unidad</th>
					<th>Total de Venta</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($ventas_cabecera->result() as $row)
				{ 
					//$imagen = $row->imagen;
					?>

					<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->fecha;  ?></td>
					<td><?php echo $row->usuario_id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td><?php echo $row->cantidad;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->total_venta;  ?></td>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

	<?php } ?>
<?php } ?>

