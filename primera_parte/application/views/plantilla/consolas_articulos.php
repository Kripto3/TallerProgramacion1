<div class="container-fluid p-5">

    <div class="row">

        <section class="col-md-9">

            <div class="row d-flex justify-content-between mr-2 fondo-item">

                <div class="card col-md-3 m-2 xbox" style="width: 10rem;">
                    <img class="card-img" src="<?php echo base_url("assets/imagenes/consolas/xboxone.png"); ?>" alt="xbox one">
                    <div class="card-body">
                        <h5 class="card-title fuente-lg fuente-md fuente-sm">XBOX ONE</h5>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#xbox">
                            VER
                        </button>
                    </div>
                </div>

                <div class="card col-md-3 m-2 sony" style="width: 10rem;">
                    <img class="card-img" src="<?php echo base_url("assets/imagenes/consolas/ps4.png"); ?>" alt="play station 4">
                    <div class="card-body">
                        <h5 class="card-title fuente-lg fuente-md fuente-sm">Play Station 4</h5>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ps4">
                            VER
                        </button>
                    </div>
                </div>

                <div class="card col-md-3 m-2 nintendo" style="width: 10rem;">
                    <img class="card-img" src="<?php echo base_url("assets/imagenes/consolas/nintendoSW.png"); ?>" alt="nintendo switch">
                    <div class="card-body">
                        <h5 class="card-title fuente-lg fuente-md fuente-sm">Nintendo Switch</h5>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#switch">
                            VER
                        </button>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-between mr-2 fondo-item">

                <div class="card col-md-3 m-2 xbox" style="width: 10rem;">
                    <img class="card-img" src="<?php echo base_url("assets/imagenes/consolas/xbox360.png"); ?>" alt="xbox 360">
                    <div class="card-body">
                        <h5 class="card-title fuente-lg fuente-md fuente-sm">XBOX 360</h5>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#xbox360">
                            VER
                        </button>
                    </div>
                </div>

                <div class="card col-md-3 m-2 sony" style="width: 10rem;">
                    <img class="card-img" src="<?php echo base_url("assets/imagenes/consolas/ps3.png"); ?>" alt="play station 3">
                    <div class="card-body">
                        <h5 class="card-title fuente-lg fuente-md fuente-sm">Play Station 3</h5>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ps3">
                            VER
                        </button>
                    </div>
                </div>

                <div class="card col-md-3 m-2 nintendo" style="width: 10rem;">
                    <img class="card-img" src="<?php echo base_url("assets/imagenes/consolas/wiiu.png"); ?>" alt="wii u">
                    <div class="card-body">
                        <h5 class="card-title fuente-lg fuente-md fuente-sm">Nintendo Wii U</h5>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#wiiu">
                            VER
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </div>
    
</div>

<!-- Modal -->
<div class="modal fade xbox" id="xbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content fondo-individual">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">XBOX ONE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url("assets/imagenes/consolas/xboxone.png"); ?>" alt="xbox one" class="img-thumbnail bg-success">
                        </div>
                        <div class="col-md-4">

                            <div class="rounded border border-success bg-success text-white">
                                <h3>$12.000</h3>
                            </div>

                            <div>
                                <h4>500GB | <br> 1 JOYSTICK</h4>
                            </div>
                            
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet perspiciatis molestias dolorem maxime debitis nam reiciendis, nihil doloremque consectetur. Ratione unde, officiis perferendis repudiandae soluta magnam dolorum veniam vitae?</p>
                    </div>
            
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">VOLVER</button>
                <button type="button" class="btn btn-success">AGREGAR AL CARRITO</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade sony" id="ps4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content fondo-individual">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">PLAY STATION 4</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url("assets/imagenes/consolas/ps4.png"); ?>" alt="play station 4" class="img-thumbnail bg-primary">
                        </div>
                        <div class="col-md-4">

                            <div class="rounded border border-primary bg-primary text-white">
                                <h3>$12.000</h3>
                            </div>

                            <div>
                                <h4>500GB | <br> 1 JOYSTICK</h4>
                            </div>
                            
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet perspiciatis molestias dolorem maxime debitis nam reiciendis, nihil doloremque consectetur. Ratione unde, officiis perferendis repudiandae soluta magnam dolorum veniam vitae?</p>
                    </div>
            
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">VOLVER</button>
                <button type="button" class="btn btn-primary">AGREGAR AL CARRITO</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade nintendo" id="switch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content fondo-individual">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">NINTENDO SWITCH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url("assets/imagenes/consolas/nintendoSW.png"); ?>" alt="nintendo switch" class="img-thumbnail bg-danger">
                        </div>
                        <div class="col-md-4">

                            <div class="rounded border border-danger bg-danger text-white">
                                <h3>$14.000</h3>
                            </div>

                            <div>
                                <h4>500GB | <br> 1 JOYSTICK</h4>
                            </div>
                            
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet perspiciatis molestias dolorem maxime debitis nam reiciendis, nihil doloremque consectetur. Ratione unde, officiis perferendis repudiandae soluta magnam dolorum veniam vitae?</p>
                    </div>
            
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>
                <button type="button" class="btn btn-danger">AGREGAR AL CARRITO</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade xbox" id="xbox360" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content fondo-individual">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">XBOX 360</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url("assets/imagenes/consolas/xbox360.png"); ?>" alt="xbox 360" class="img-thumbnail bg-success">
                        </div>
                        <div class="col-md-4">

                            <div class="rounded border border-success bg-success text-white">
                                <h3>$6.500</h3>
                            </div>

                            <div>
                                <h4>500GB | <br> 1 JOYSTICK</h4>
                            </div>
                            
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet perspiciatis molestias dolorem maxime debitis nam reiciendis, nihil doloremque consectetur. Ratione unde, officiis perferendis repudiandae soluta magnam dolorum veniam vitae?</p>
                    </div>
            
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">VOLVER</button>
                <button type="button" class="btn btn-success">AGREGAR AL CARRITO</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade sony" id="ps3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content fondo-individual">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">PLAY STATION 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url("assets/imagenes/consolas/ps3.png"); ?>" alt="play station 3" class="img-thumbnail bg-primary">
                        </div>
                        <div class="col-md-4">

                            <div class="rounded border border-primary bg-primary text-white">
                                <h3>$7.000</h3>
                            </div>

                            <div>
                                <h4>500GB | <br> 1 JOYSTICK</h4>
                            </div>
                            
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet perspiciatis molestias dolorem maxime debitis nam reiciendis, nihil doloremque consectetur. Ratione unde, officiis perferendis repudiandae soluta magnam dolorum veniam vitae?</p>
                    </div>
            
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">VOLVER</button>
                <button type="button" class="btn btn-primary">AGREGAR AL CARRITO</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade nintendo" id="wiiu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content fondo-individual">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">NINTENDO WII U</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url("assets/imagenes/consolas/wiiu.png"); ?>" alt="wii u" class="img-thumbnail bg-danger">
                        </div>
                        <div class="col-md-4">

                            <div class="rounded border border-danger bg-danger text-white">
                                <h3>$####</h3>
                            </div>

                            <div>
                                <h4>50GB | <br> 1 JOYSTICK</h4>
                            </div>
                            
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet perspiciatis molestias dolorem maxime debitis nam reiciendis, nihil doloremque consectetur. Ratione unde, officiis perferendis repudiandae soluta magnam dolorum veniam vitae?</p>
                    </div>
            
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>
                <button type="button" class="btn btn-danger">AGREGAR AL CARRITO</button>
            </div>

        </div>
    </div>
</div>