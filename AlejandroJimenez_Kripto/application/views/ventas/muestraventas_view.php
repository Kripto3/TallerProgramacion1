	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>

	<?php if (!$ventas_cabecera) { ?>
	<div class="container page-content">
			<h1 class="display-4 text-left"><b> Todavia no se han realizado ventas.</b></h1>		
	</div>

<?php } else { ?>
	<div class="container page-content">
		<h1 class="display-4 text-left mt-4">Listado de Ventas</h1>
		<hr>
		
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>Factura Nro</th>
					<th>Fecha Compra</th>
					<th>ID Usuario</th>
					<th>Total</th>
					<th>Factura</th>
				</tr> 	
			</thead>
			<tbody>
				<?php $venta_anterior = 0; ?>

				<?php foreach($ventas_cabecera->result() as $row){ ?>

					<?php if ($venta_anterior != $row->id_venta){ ?>
					<tr>
						<td><?php echo $row->id_venta; ?> </td>
						<td><?php echo $row->fecha;  ?></td>
						<td><?php echo $row->usuario_id;  ?></td>
						<td class="text-right"><?php echo $row->total_venta;  ?></td>
						<td>
							<a href="<?php echo base_url("detalle_venta/$row->id_venta");?>" class="text-info"><i class="fa fa-file-text-o" ></i> ver Factura</a>
						</td>
					</tr>
					<?php } ?>
					
					<?php $venta_anterior = $row->id_venta; ?>
				
				<?php } ?>
			</tbody>
		</table>	            
	</div>

	<?php } ?>
<?php } ?>

