<div class="container">
<h2 class="display-4 text-center">Cargar nuevo producto</h2>
 <hr class="my-4">
	<div class="row">
		<div class="offset-md-3 col-6">
			<div class="alert alert-info text-center">
				<p>Acepta imagenes gif, jpg, jpeg, png. Tamaño maximo de la imagen <strong>2MB</strong><p>
				<p>Ir al listado de  <a href="<?php echo base_url('productos');?>"><strong>Art&iacute;culos</strong></a></p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="offset-md-2 col-md-8">
			<?php echo validation_errors(); ?>
			<!-- Genero el formulario para cargar un producto -->

			<div class="well bs-component form-horizontal">
				<?php echo form_open_multipart('verifico_nuevoproducto', 
									['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
				<fieldset>
					<div class="form-group">
						<label class="col-lg-3 control-label">Descripción<strong class="text-danger"> *</strong></label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'descripcion', 
													'id' => 'descripcion', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													'autofocus'=>'autofocus',
													'value'=>set_value('descripcion')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Categoría<strong class="text-danger"> *</strong></label>
						<?php
							$lista['0'] = 'Seleccione categoria';
							foreach ($categoria as $row){
								$lista[$row->id] = $row->descripcion;
							}
										
							$propiedades = [
									'name' => 'categoria_id', 
									'id' => 'categoria_id', 
									'class' =>'form-control col-md-6 rounded-pill border-0 shadow-sm',
									'value'=>set_value('categoria_id')
							];
							$med = ['med'];
							echo form_dropdown('Categoria', $lista, $med, $propiedades);
							?>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Precio Costo<strong class="text-danger"> *</strong></label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'precio_costo', 
													'id' => 'precio_costo', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
												
													'value'=>set_value('precio_costo')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Precio Venta<strong class="text-danger"> *</strong></label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'precio_venta', 
													'id' => 'precio_venta', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
												
													'value'=>set_value('precio_venta')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Stock<strong class="text-danger"> *</strong></label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'stock', 
													'id' => 'stock', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													
													'value'=>set_value('stock')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Stock Minimo<strong class="text-danger"> *</strong></label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'stock_min', 
													'id' => 'stock_min', 
													'class' => 'form-control rounded-pill border-0 shadow-sm',
													
													'value'=>set_value('stock_min')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">Informaci&oacute;n</label>
						<div class="col-lg-10">
							<?php echo form_textarea(['name' => 'info', 
													'id' => 'info', 
													'class' => 'form-control',	
													
													'value'=>set_value('info')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Imagen<strong class="text-danger"> *</strong></label>
						<div class="col-lg-10">
							<?php echo form_input(['type' => 'file',
													'name' => 'filename', 
													'id' => 'filename', 
													'class' => 'form-control rounded-pill border-0 shadow-sm']); ?> 

						</div>
					</div>
					<div class="container">	
						<div class="row">
							<div class="col-lg-3 col-lg-offset-5">
									<?php echo form_submit('submit', 'Cargar',"class='btn btn-lg btn-primary btn-block'"); ?> 
									<?php echo form_close(); ?>
							</div>
						</div>
					</div>

				</fieldset>
				
			</div>
		</div>
	</div>
</div>    
