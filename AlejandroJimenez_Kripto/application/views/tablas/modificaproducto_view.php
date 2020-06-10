
<div class="container page-content">
<h3 class="display-4 mt-4">Modificar producto</h3>
<div class="col-sm-10 col-md-10">
<hr>
	<div class="row">
		<div class="col-8">
			<div class="alert alert-info text-center">
				<p>Acepta imagenes gif, jpg, jpeg, png. Tamaño maximo de la imagen <strong>2MB</strong><p>
			</div>
		</div>
	</div>
	<?php echo form_open_multipart("verifico_modificaproducto/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Descripcion:', 'descripcion'); ?>
					<?php echo form_input(['name' => 'descripcion', 
													'id' => 'descripcion', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													'autofocus'=>'autofocus',
													'value'=>"$descripcion"]); ?>
					<?php echo form_error('descripcion'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Categoria:', 'categoria_id'); ?>	
					<?php
					
					$lista[$categoria_id] = '';
					//print_r($categoria_id);
					foreach ($categoria as $row){
							$lista[$row->id] = $row->descripcion;
					}
						$propiedades = [
								'name' => 'categoria_id', 
								'id' => 'categoria_id', 
								'class' =>'form-control col-lg-6 rounded-pill border-0 shadow-sm',
								'value'=> "$categoria_id"
						];
					
						$med = ['med'];
						
						echo form_dropdown('Categoria', $lista, $med, $propiedades);
						?> 
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Precio Costo:', 'precio_costo'); ?>
					<?php echo form_input(['name' => 'precio_costo', 
													'id' => 'precio_costo', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													'value'=>"$precio_costo"]); ?>
					<?php echo form_error('precio_costo'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Precio Venta:', 'precio_venta'); ?>
					<?php echo form_input(['name' => 'precio_venta', 
													'id' => 'precio_venta', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													'value'=>"$precio_venta"]); ?>
					<?php echo form_error('precio_venta'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Stock:', 'stock'); ?>
					<?php echo form_input(['name' => 'stock', 
													'id' => 'stock', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													'value'=>"$stock"]); ?>
					<?php echo form_error('stock'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Stock minimo:', 'stock_min'); ?>
					<?php echo form_input(['name' => 'stock_min', 
													'id' => 'stock_min', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													'value'=>"$stock_min"]); ?>
					<?php echo form_error('stock_min'); ?>
				</div>
			</div>
		</div>		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Imagen actual:', 'img_ac'); ?>
					<img  id="imagen_view" name="imagen_view" class="img-thumbnail" src="<?php  echo base_url($imagen); ?>" >
				</div>	
				<div class="form-group">
					<?php echo form_label('Imagen:', 'imagen'); ?>
					<?php echo form_input(['type' => 'file',
												'name' => 'filename', 
												'id' => 'filename', 
												'class' => 'form-control rounded-pill border-0 shadow-sm']); ?> 
					<?php echo form_error('filename'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Infomacion:', 'info'); ?>
					<?php echo form_textarea(['name' => 'info', 
														'id' => 'info', 
														'class' => 'form-control',
														'placeholder' => 'Informacion',
														'value'=>"$info"]); ?>
														<?php echo form_error('info'); ?>
				</div>
				<br>
			<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg col-4 btn-success btn-block d-inline-block'"); ?>
			<a href="<?php echo base_url('productos'); ?>" class="btn btn-lg col-4 btn-secondary">Cancelar</a>
			</div>
		</div>
	<?php echo form_close(); ?>
	<div>
	</div>
</div>
</div>
</div>
