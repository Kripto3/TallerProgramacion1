<div class="container-fluid p-5">

    <div class="row">

            <?php foreach($productos as $row){ ?>

                <div class="card col-md-3 m-2 sony fondo-item" style="width: 10rem;">
                        <img class="card-img" src="<?php echo base_url("uploads/imagenes_producto/" . $row->imagen); ?>" alt="xbox one">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row->titulo?></h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row->id_producto?>">
                                VER
                            </button>
                        </div>
                </div>

                <!-- Modal -->
                <div class="modal fade sony" id="<?php echo $row->id_producto?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content fondo-individual">

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
                                            <img src="<?php echo base_url("uploads/imagenes_producto/" . $row->imagen); ?>" alt="xbox one" class="img-thumbnail bg-primary">
                                        </div>
                                        <div class="col-md-4">

                                            <div class="rounded border border-primary bg-primary text-white">
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
                                echo form_open('agregar_al_carrito');
                                echo form_hidden('id_producto', $row->id_producto);
                                echo form_hidden('titulo', $row->titulo);
                                echo form_hidden('precio', $row->precio);
                                if($row->stock != 0){
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
    
</div>



