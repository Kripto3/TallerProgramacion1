<div class="container d-flex align-items-center flex-column text-light fondo-individual mb-2">
<?php echo form_open_multipart('producto_controller/registrar_producto', ['class' => 'formsignin', 'role' => 'form']); ?>
<form>
  <div class="form-group itemMenu">
        <label for="titulo">TITULO</label>
        <input type="text" class="form-control" name="titulo" value="<?php echo set_value('titulo');?>" id="titulo" placeholder="Ingrese título del producto">
        <?php echo form_error('titulo');?>
  </div>

  <div class="form-group">
        <label for="tipo">TIPO DE PRODUCTO</label>
        <?php
            $lista1['0'] = 'Seleccione Tipo de producto';
            foreach ($tipos as $row){
                $lista1[$row->id_tipo] = $row->nombre;
            }
            echo form_dropdown('tipo',$lista1,'0','class="form-control"');
        ?>
  </div>
  <span class="text-danger"><?php echo form_error('tipo'); ?> </span>

  <div class="form-group">
    <label for="Consolas">CONSOLA CORRESPONDIENTE</label>
    <?php
        $lista['0'] = 'Seleccione Consola';
        foreach ($consolas as $row){
            $lista[$row->id_consola] = $row->nombre_consola;
        }
        echo form_dropdown('consola',$lista,'0','class="form-control"');
    ?>
  </div>
  <span class="text-danger"><?php echo form_error('consola'); ?> </span>

    <div class="form-group">
        <label for="descripcion">DESCRIPCION</label>
        <?php echo form_input(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control','placeholder' => 'Ingrese descripción', 'required'=>'required',
        'value'=>set_value('descripcion')]); ?>
    </div>
    <span class="text-danger"><?php echo form_error('descripcion'); ?> </span>

    <div class="form-group">
        <label for="precio">Precio</label>
        <?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control','placeholder' => 'Ingrese precio', 'required'=>'required', 'value'=>set_value('precio')]);
        ?>
    </div>
    <span class="text-danger"><?php echo form_error('precio'); ?> </span>

    <div class="form-group">
        <label for="imagen">IMAGEN</label>
        <?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'class' => 'form-control-file', 'type'=>'file',
        'value'=>set_value('imagen')]); ?>
    </div>
    <span class="text-danger"><?php echo form_error('imagen'); ?> </span>

    <div class="form-group">
        <label for="precio">Stock</label>
        <?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'Ingrese stock', 'required'=>'required', 'value'=>set_value('stock')]);
        ?>
    </div>
    
    <div style="margin-top:10px" class="form-group">
<!-- Button -->
        <div class="col-sm-12 controls">
        <?php echo form_submit('Agregar', 'Agregar',"class='btn btn-primary'"); ?>
        </div>
        
        </div>

    <?php echo form_close();?>

</form>

</div>