<nav class="navbar navbar-expand-lg navbar-dark fondo-nav sticky-top container-fluid resaltado mb-2">
    <a class="navbar-brand" href="<?php echo base_url('quienesSomos'); ?>">QUIENES SOMOS</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link itemMenu" href="<?php echo base_url('consolas'); ?>">CONSOLAS</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link itemMenu" href="<?php echo base_url('accesorios'); ?>"><i class="icon-gamepad2"></i>ACCESORIOS</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link itemMenu" href="<?php echo base_url('contacto'); ?>"><i class=""></i>CONTACTO</a>
            </li>

            </li>

            <li class="nav-item dropdown active">

                <a class="nav-link dropdown-toggle itemMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-pacman"></i>JUEGOS
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <?php foreach($consolas as $row){ ?>
             
                        <a class="dropdown-item" href="<?php echo base_url("juegos/$row->id_consola"); ?>"><?php echo $row->nombre_consola?></a>
 
                     <?php }?>
   
                </div>

            </li>
        </ul>

    </div>

</nav>