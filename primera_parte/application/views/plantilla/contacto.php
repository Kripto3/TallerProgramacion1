<?php echo form_open('consultas_controller/guardar_consulta'); ?>
<div class=" container-fluid border-primary text-primary row">
    <div class="col-md-8 text-primary fondo-item" style="width: 18rem;">
        <form>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="validationServer01">NOMBRE</label>
                <input type="text" class="form-control" id="validationServer01" placeholder="Nombre" name="nombre" required>
                <?php echo form_error('nombre'); ?>
                
                </div>
                <div class="col-md-4 mb-3">
                <label for="validationServer02">APELLIDO</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Apellido" name="apellido" required>
                <?php echo form_error('apellido'); ?>
                
                </div>
                
                <div class="col-md-4 mb-3">
                <label for="validationServer02">CORREO ELECTRONICO</label>
                <input type="email" class="form-control" id="validationServer02" placeholder="" name="email" required>
                <?php echo form_error('email'); ?>
                <div class="valid-feedback text-primary">
                    Looks good!
                </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                <label for="mensaje">Mensaje</label>
                <div class="form-group"> 
                <textarea class="form-control" id="mensaje" rows="3" name="mensaje"></textarea>
                <?php echo form_error('mensaje'); ?>
                </div>
                </div>
                
            </div>
            
            <button class="btn btn-primary" type="submit">ENVIAR</button>
    </form>
    </div>

    <aside class="card col-md-4 bg-dark fondo-individual text-primary border-primary" style="width: 18rem;">
        
            <div class="card-header">
                ENCONTRANOS EN...
            </div>
        

        <div class="mt-3">
            <iframe class= "card-img-top" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0840064318854!2d-58.833266158307104!3d-27.466643932369397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca6d24ec0c9%3A0xb92ce3fedb0d7729!2sUnne+FaCENA+Centro!5e0!3m2!1ses!2sar!4v1523538662371" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="card-body">
                <p class="card-text">9 de Julio 1002 entre San lorenzo y Catamarca</p>
            </div>
        </div>

    </aside>