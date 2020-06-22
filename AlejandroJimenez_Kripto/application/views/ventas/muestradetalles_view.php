
	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>

	<?php if (!$detalles) { ?>
	<div class="container page-content">
		<div class="well">
			<h1 class="text-center"><b> Todavia no se han realizado ventas.</b></h1>	
		</div>
			
	</div>

<?php } else { ?>
	<div class="container page-content">
		<h1 class="text-left display-4 mt-4">Factura</h1>
		<div class="alert alert-info mt-4">
			<h5>Datos del comprador:</h5>
			<h4>Nombre: <?php echo $nombre;  ?> <?php echo $apellido;  ?> - Email: <?php echo $email;  ?></h4>
			<h5>Fecha: <?php echo $fecha;  ?> </h5>
			<hr/> 
			<div class="table-responsive">
				<table  class="table table-bordered " style="background-color: mintcream;">
				<thead>
					<tr>
						<th>Factura Nro</th>
						<th>Descripcion</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>			
					</tr>
				</thead>
				<tbody>
					<?php foreach($detalles->result() as $row) { ?>

						<tr>
						<td><?php echo $row->id_venta;  ?></td>
						<td><?php echo $row->descripcion;  ?></td>
						<td>$<?php echo $row->precio_venta;  ?></td>
						<td><?php echo $row->cantidad;  ?></td>
						<td class="text-right"><?php echo $row->total;  ?></td>
					</tr>
					<?php }
					?>
					<tr>
						<th colspan="4" class="font-weight-bold">Total</th>
						<td class="text-right font-weight-bold">$<?php echo $row->total_venta;  ?></td> 
					</tr>
				</tbody>
				</table>	
			</div>
			<?php echo anchor('listar_ventas', 'Volver',"class='btn btn-outline-dark' "); ?>
		</div>
            
	</div>
</div>

	<?php } ?>
<?php } ?>
