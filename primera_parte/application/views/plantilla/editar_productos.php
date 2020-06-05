<div class="container d-flex align-items-center flex-column text-light fondo-individual mb-2">
<?php echo form_open_multipart("producto_controller/actualizar_producto/$id_producto", ['class' => 'formsignin', 'role' => 'form']); ?>
<form>
  <div class="form-group itemMenu">
        <label for="titulo">TITULO</label>
        <input type="text" class="form-control" name="titulo" value="<?php echo $titulo ?>" id="titulo" placeholder="Ingrese título del producto">
        <?php echo form_error('titulo');?>
  </div>

  <div class="form-group">
        <label for="tipo">TIPO DE PRODUCTO</label>
        <?php
            $lista1['0'] = 'Seleccione Tipo de producto';
            foreach ($tipos as $row){
                $lista1[$row->id_tipo] = $row->nombre;
            }
            echo form_dropdown('tipo',$lista1, $tipo,'class="form-control"');
        ?>
  </div>
  <span class="text-danger"><?php echo form_error('tipo'); ?> </span>

  <div class="form-group">
    <label for="Consolas">CONSOLA CORRESPONDIENTE</label>
    <?php
        $lista['0'] = 'Seleccione Consola del producto';
        foreach ($consolas as $row){
            $lista[$row->id_consola] = $row->nombre_consola;
        }
        echo form_dropdown('consola',$lista,$consola,'class="form-control"');
    ?>
  </div>
  <span class="text-danger"><?php echo form_error('consola'); ?> </span>

    <div class="form-group">
        <label for="descripcion">DESCRIPCION</label>
        <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion ?>" id="descripcion" placeholder="Ingrese descripcion del producto">
        <?php echo form_error('descripcion');?>
    </div>
    <span class="text-danger"><?php echo form_error('descripcion'); ?> </span>

    <div class="form-group">
        <label for="precio">Precio</label>
        <i class="icon-coin-dollar"></i><input type="text" class="form-control" name="precio" value="<?php echo $precio ?>" id="precio" placeholder="Ingrese precio del producto">
        <?php echo form_error('precio');?>
    </div>
    <span class="text-danger"><?php echo form_error('precio'); ?> </span>

    <div class="form-group">
        <label for="precio">Stock</label>
        <input type="text" class="form-control" name="stock" value="<?php echo $stock ?>" id="stock" placeholder="Ingrese stock del producto">
        <?php echo form_error('stock');?>
    </div>
    <span class="text-danger"><?php echo form_error('stock'); ?> </span>

    <div class="form-group">
        <label for="imagen">IMAGEN</label>
        <?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'class' => 'form-control-file', 'type'=>'file',
        'value'=>set_value('imagen')]); ?>
    </div>
    <span class="text-danger"><?php echo form_error('imagen'); ?> </span>
    
    <div style="margin-top:10px" class="form-group">
<!-- Button -->
        <div class="col-sm-12 controls">
        <?php echo form_submit('Agregar', 'Modificar',"class='btn btn-primary'"); ?>
        </div>
        
        </div>

    <?php echo form_close();?>

</form>

</div>