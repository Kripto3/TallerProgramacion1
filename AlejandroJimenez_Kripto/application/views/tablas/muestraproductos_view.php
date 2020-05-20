<?php if (!$productos) { ?>

	<div class="container page-content"">
		<div class="well">
			<h1>No hay Productos</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>

			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>

		<div class="container page-content"">
			<h1>TListado de productos</h1>


		<br> <br>

	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
				<th>ID</th>
				<th>Descripcion</th>
				<th>Precio Venta</th>
				<th>Stock</th>
				<th>Imagen</th>
				<th>Eliminado</th>
				<th>Modificar</th>
            </tr>
        </thead>
        <tbody>
           	<?php foreach($productos->result() as $row)
				{ 
					$imagen = $row->imagen;	?>
					<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
				     <td><img height="80px" src="<?php echo $imagen; ?>"/></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td></td>
				</tr>
				<?php } ?>
        </tbody>
    </table>
<?php } ?>
