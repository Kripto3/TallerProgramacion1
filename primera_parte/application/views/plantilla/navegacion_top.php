
<div class=" d-flex flex-row-reverse fondo-nav resaltado">

                

                
                <?php
                if($this->session->userdata('login')){

                    if($this->session->userdata('perfil') == 2){
                        ?>
                            <a class="nav-link" href="<?php echo base_url("carrito"); ?>"><i class="icon-cart2 icon-size"></i></a>
                        <?php
                        } ?>
                    
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#user" aria-expanded="false" aria-controls="collapseExample">
                        <i class="icon-user2"></i><?php echo $this->session->userdata('nombre')?>
                    </button>

                    <div class="collapse" id="user">
                        <a class="nav-link itemMenu" href="<?php echo base_url("cerrar_sesion"); ?>">CERRAR SESION</a>
                    </div>

                    
                <?php
                }
                else{ ?>
                    <button type="button" class="btn btn-primary itemMenu" data-toggle="modal" data-target="#login" data-whatever="@mdo">LOGIN</button>
                    <a class="nav-link itemMenu" href="<?php echo base_url("registro"); ?>"><i class="icon-user-plus"></i>REGISTRARME</a>
                <?php }
                ?>

                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <?php echo form_open('iniciar_sesion'); ?>
                    <div class="modal-dialog" role="document">

                        <div class="modal-content">

                            <div class="modal-header">

                                <h5 class="modal-title text-primary" id="exampleModalLabel">INGRESO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>

                            <div class="modal-body">

                                <form>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">CORREO ELECTRONICO:</label>
                                        <input type="text" class="form-control" name="id">
                                    </div>

                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">CONTRASEÑA</label>
                                        <input type="password" class="form-control" name= 'password' placeholder="" value="" required>
                                        <?php echo form_error('password');?>
                                        <p>La contraseña debe contener al menos 8 caracteres</p>
                                    </div>
                                            
                                </form>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ATRAS</button>
                                <button type="submit" class="btn btn-primary">INGRESAR</button>
                            </div>

                        </div>

                    </div>
                    </form>
                </div>
                
            </div>
