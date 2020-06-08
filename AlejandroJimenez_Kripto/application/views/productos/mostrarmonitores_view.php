<?php if (!$productos) { ?>

<div class="container">
	<div class="well">
		<h1 class="text-center display-4">No hay Productos.</h1>
	</div>	
</div>

<?php } else { ?>

<div class="container-fluid">

<h2 class="text-center display-4">Monitores</h2>

<hr>

<div class="row text-center">
	<div class="col-md-3">
			<div class="card" >
		<div class="card-header font-weight-bold card-title-categorias">
			Categor&iacute;as
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item bg-secondary ">
				<a href="javascript:void(0);" class="text-decoration-none text-white">Auriculares</a>
			</li>
			<li class="list-group-item bg-info">
				<a class="text-decoration-none text-white" href="<?php echo base_url('productos/mouse');?>">Mouse</a>
			</li>
			<li class="list-group-item bg-info">
				<a class="text-decoration-none text-white" href="<?php echo base_url('productos/teclado');?>">Teclado</a>
			</li>
			<li class="list-group-item bg-info">
				<a class="text-decoration-none text-white" href="<?php echo base_url('productos/monitor');?>">Monitor</a>
			</li>
			<li class="list-group-item bg-info">
				<a class="text-decoration-none text-white" href="<?php echo base_url('productos/notebook');?>" class="">Notebook</a>
			</li>
			<li class="list-group-item bg-info">
				<a class="text-decoration-none text-white" href="<?php echo base_url('productos/escritorio');?>" class="">Escritorio</a>
			</li>
		</ul>
	</div>
	</div>
	<div class="col-md-9">
	<!-- <?php	print_r($productos->result());?> -->
	<?php foreach($productos->result() as $row){ ?>
		<div class="container bg-white">
			<div class="thumbnail mb-4">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-fluid max-w-80 ">
					</div>
					<div class="col-md-6">
						<div class="caption text-left">
							<h4><?php echo trim($row->descripcion); ?></h4>
							<div class="row">
								<div class="col-md-6">
									<p>
										<?php 
										if($row->stock == 0){
											echo '<span class="badge badge-danger">Sin Stock</span><br/>';
												} elseif ($row->stock_min >= $row->stock) {
													echo '<span class="badge badge-warning">Últimas unidades</span><br/>';
															} else {
																echo '<span class="badge badge-success">Hay Stock</span> <br/>';
											}
											
											if ($row->stock < $row->stock_min && $row->stock > 0) {
												echo 'Por debajo del valor minimo: '.$row->stock_min;
											} elseif ($row->stock == 0) {
												echo 'No hay unidades disponibles';
											}else {
												echo 'Disponible:'.$row->stock.' unidades';
											}
										?>
									</p>
								</div>
								<div class="col-md-6">
									<p>Precio: $ <?php echo $row->precio_venta; ?> </p>
									<p>Detalles:<br />
									<?php echo $row->info ?>
									</p>
								</div>
							</div>
							<p>
							<?php 
								if (($row->stock > 0) && ($session_data = $this->session->userdata('logged_in'))) {

									// Envia los datos en forma de formulario para agregar al carrito
									echo form_open('carrito_agrega');
									echo form_hidden('id', $row->id);
									echo form_hidden('descripcion', $row->descripcion);
									echo form_hidden('precio_venta', $row->precio_venta);
									echo form_hidden('stock', $row->stock);
							?>
									<div>
							<?php
									$btn = array(
										'class' => 'btn btn-outline-success',
										'value' => 'Agregar al carrito',
										'name' => 'action'
										);
									
									echo form_submit($btn);
									echo form_close();
							?>
									</div>
							<?php 
									echo "<br/ >";

								}else{
									echo "<br/ >";
								}
							?>	
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>	
	</div>
</div>
<hr>
</div>
<?php } ?>