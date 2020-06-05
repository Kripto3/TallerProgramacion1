<section class="container-fluid p-4">
        <div class="row">

        <?php foreach($productos as $row){ ?>
             
            <div class="card col-md-3 sony fondo-item" style="width: 10rem;">
                <img class="card-img card-img-top imagencard-sm imagencard-md imagencard-lg" src="<?php echo base_url("uploads/imagenes_producto/" . $row->imagen); ?>" alt="<?php echo $row->titulo?>">
                <div class="card-body">
                    <h5 class="card-title fuente-lg fuente-md fuente-sm"><?php echo $row->titulo?></h5>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row->id_producto?>">
                        VER
                    </button>

                    <?php if($row->stock <= 0){?>

                        <div class="rounded border border- bg-danger text-white">
                            <h3>AGOTADO</h3>
                        </div>

                    <?php }?>
                </div>
            </div>
            
            

            <!-- Modal -->
            <div class="modal fade sony" id="<?php echo $row->id_producto?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content fondo-item">
                        
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $row->titulo?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url("uploads/imagenes_producto/" . $row->imagen); ?>" alt="justdance" class="img-thumbnail bg-primary">
                                    </div>
                                    <div class="col-md-4">

                                        <div class="rounded border border- bg-primary text-white">
                                            <h3>$<?php echo $row->precio?></h3>
                                        </div>

                                        <div>
                                            <h4><?php echo $row->descripcion?></h4>
                                        </div>
                                        
                                    </div>
                                </div>

                                
                        
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">VOLVER</button>
                            <?php
                            if($this->session->userdata('login')){
                                echo form_open('carrito_controller/agregar_carrito');
                                echo form_hidden('id_producto', $row->id_producto);
                                echo form_hidden('titulo', $row->titulo);
                                echo form_hidden('precio', $row->precio);
                                if($row->stock > 0){
                                    echo form_submit('comprar', 'Agregar al carrito',"class='btn btn-primary'");
                                }
                                echo form_close();
                            }
                             ?>                          
                        </div>

                    </div>
                </div>
            </div>
            
        <?php }; ?>
        </div>
        
            
            <nav class="mt-4">
            
            <?php echo $this->pagination->create_links() ?>
            
            
            </nav>
</section>

