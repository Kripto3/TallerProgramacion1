<div class="container">
	<div class="well col-lg-8">
		<h2>Cargar nuevo producto</h2>
		<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
		<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>	
	</div>
	
	<div class="row">
		<div class="col-lg-8">

			<?php echo validation_errors(); ?>
			<!-- Genero el formulario para cargar un producto -->

			<div class="well bs-component form-horizontal">
				<?php echo form_open_multipart('verifico_nuevoproducto', 
									['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
				<fieldset>
					<div class="form-group">
						<label class="col-lg-2 control-label">Descripción</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'descripcion', 
													'id' => 'descripcion', 
													'class' => 'form-control',
													'placeholder' => 'Descripcion', 
													'autofocus'=>'autofocus',
													'value'=>set_value('descripcion')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Categoría</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'categoria_id', 
													'id' => 'categoria_id', 
													'class' => 'form-control',
													'placeholder' => '1- Electrodomesticos - 2-Muebles', 
													'value'=>set_value('categoria_id')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Precio Costo</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'precio_costo', 
													'id' => 'precio_costo', 
													'class' => 'form-control',
													'placeholder' => 'Precio Costo', 
													'value'=>set_value('precio_costo')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Precio Venta</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'precio_venta', 
													'id' => 'precio_venta', 
													'class' => 'form-control',
													'placeholder' => 'Precio Venta',
													'value'=>set_value('precio_venta')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Stock</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'stock', 
													'id' => 'stock', 
													'class' => 'form-control',
													'placeholder' => 'Stock',
													'value'=>set_value('stock')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Stock Minimo</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'stock_min', 
													'id' => 'stock_min', 
													'class' => 'form-control',
													'placeholder' => 'Stock Minimo',
													'value'=>set_value('stock_min')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Imagen</label>
						<div class="col-lg-10">
							<?php echo form_input(['type' => 'file',
													'name' => 'filename', 
													'id' => 'filename', 
													'class' => 'form-control']); ?> 

						</div>
					</div>
					<div class="col-lg-3 col-lg-offset-5">
						<?php echo form_submit('submit', 'Cargar',"class='btn btn-lg btn-primary btn-block'"); ?> <br>
						<?php echo form_close(); ?>
					</div>
				</fieldset>
				
			</div>
		</div>
	</div>
</div>    
