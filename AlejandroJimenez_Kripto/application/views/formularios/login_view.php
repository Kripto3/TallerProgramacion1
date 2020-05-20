<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4 text-center">Inicio de sesi&oacute;n</h3>
                            
                            <p class="text-muted text-center mb-4">Aun no estas registrado ? | <a href="<?php echo base_url('registrarse');?>" class="btn">Registrarme</a></p>
                                                            <?php echo validation_errors(); ?> 
                                <?php echo form_open('verifico_usuario', ['class' => 'form-signin', 'role' => 'form']); ?> <br>
                                
                                <?php echo form_input(['name' => 'username', 
                                            'id' => 'username', 
                                            'class' => 'form-control rounded-pill border-0 shadow-sm px-4"',
                                            'placeholder' => 'Usuario', 
                                            'required'=>'required', 
                                            'autofocus'=>'autofocus']); ?>
                                
                                <?php echo form_input(['type' => 'password',
                                            'name' => 'password', 
                                            'id' => 'password', 
                                            'class' => 'form-control rounded-pill border-0 shadow-sm px-4 mt-3"',
                                            'placeholder' => 'Contraseña', 
                                            'required'=>'required']); ?> <br>

                                <?php echo form_submit('submit', 'Ingresar',"class='btn btn-lg btn-success btn-block'"); ?> <br>
                                
                                <?php echo form_close(); ?>

                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>