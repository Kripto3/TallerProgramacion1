<div class="container text-light">

  <?php echo form_open('cliente_controller/registrar_cliente'); ?>
    <div class="form-row fondo-item">

      <div class="form-group col-md-6">
      <label for="name">NOMBRE</label>
      <input type="text" class="form-control" name="nombre" value="<?php echo set_value('nombre');?>" id="name" placeholder="Nombre">
      <?php echo form_error('nombre');?>
      </div>

      <div class="form-group col-md-6">
          <label for="surname">APELLIDO</label>
          <input type="text" class="form-control" name ="apellido" value="<?php echo set_value('apellido');?>" id="surname" placeholder="Apellido">
          <?php echo form_error('apellido');?>
      </div>
    <div class="form-row d-flex justify-content-between align-items-end">

      <div class="form-group col-md-2">
        <label for="inputPassword4">CONTRASEÑA</label>
        <input type="password" class="form-control" name= "password" value="<?php echo set_value('password');?>" id="password" placeholder="Contraseña">
        <?php echo form_error('password');?>
      </div>
      

      <div class="form-group col-md-2">
        <label for="inputPassword4">CONFIRMAR CONTRASEÑA</label>
        <input type="password" class="form-control" name= "confirm_password" value="<?php echo set_value('confirm_password');?>" id="inputPassword4" placeholder="Confirmar Contraseña">
        <?php echo form_error('confirm_password');?>
      </div>

      <div class="form-group col-md-2">
        <label for="inputEmail4">CORREO ELECTRONICO</label>
        <input type="email" class="form-control" name= "correo" value="<?php echo set_value('correo'); ?> " id="inputEmail4" placeholder="Email">
        <?php echo form_error('correo'); ?>
      </div>

        <div class="form-group col-md-2">
        <label for="inputAddress">DIRECCION</label>
        <input type="text" class="form-control" name = "direccion" value="<?php echo set_value('direccion'); ?> " id="inputAddress" placeholder="">
        <?php echo form_error('direccion'); ?>
        </div>

        <div class="form-group col-md-2">
            <label for="dni">DNI</label>
            <input type="number"  class="form-control" name="dni" value="<?php echo set_value('dni'); ?> " id="dni">
            <?php echo form_error('dni'); ?>
        </div>
    </div>
  </div>


    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Acepto los <a href="<?php echo base_url("primera_parte_controller/terminos"); ?>">Terminos y Condiciones</a>
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">REGISTRARME</button>
  </form>
</div>