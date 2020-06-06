
<section class="container-fluid bg-green sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container bg-green">
      <a class="navbar-brand" href="<?php echo base_url('principal');?>" title="Kripto | Saca el gamer que llevas dentro ">
       <img src="<?php echo base_url('assets/img/logo.png');?>" height="50"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <!--MENU CLIENTES-->
        <?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '2') ) { ?> 
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('principal');?>">Principal<span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url('catalogo');?>">Cat&aacute;logo</a>
                <a class="dropdown-item" href="<?php echo base_url('comercial');?>">Comercializaci&oacute;n</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mi Perfil</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0)"><?= $nombre ?> <?= $apellido ?></a>
              <a class="dropdown-item" href="#two">Carrito</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url('logout');?>">Salir</a>
            </div>
          </li>
        </ul>
          <!--MENU ADMINISTRADORES-->
        <?php } else if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?> 
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('principal');?>">Principal<span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administraci&oacute;n</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url('ver_usuarios');?>">Usuarios</a>
                <a class="dropdown-item" href="<?php echo base_url('productos');?>">Articulos</a>
                <a class="dropdown-item" href="<?php echo base_url('ver_consultas');?>">ver consultas</a>
                <a class="dropdown-item" href="<?php echo base_url('alta_producto');?>">Agregar art</a>
                <a class="dropdown-item" href="<?php echo base_url('mostrar_electrodomesticos');?>">electro</a>
                
                
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mi Perfil</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0)"><?= $nombre ?> <?= $apellido ?></a>
              <a class="dropdown-item" href="#">Estado de Cuenta</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo base_url('logout');?>">Salir</a>
            </div>
          </li>
        </ul>
         <!--MENU PUBLICO-->
         <?php } else { ?> 
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('principal');?>">Principal<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('quienes-somos');?>">Quienes Somos</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('comercial');?>">Comercializacion</a>        
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('catalogo');?>">Cat&aacute;logo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('informacion');?>">Contactos</a>
            </li>
          </ul>
          | <a href="<?php echo base_url('login');?>" class="btn">Ingresar</a> | <a href="<?php echo base_url('registrarse');?>" class="btn">Registrase</a>
          <?php } ?> 
      </div>
    </nav>
  </section>
    