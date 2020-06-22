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
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?php echo base_url('principal');?>">Principal<span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url('catalogo');?>">Cat&aacute;logo</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Autogesti&oacute;n</a>
              <div class="dropdown-menu">
                <a class="nav-link" href="<?php echo base_url('panel');?>">Administraci&oacute;n</a>
                <a class="nav-link" href="<?php echo base_url("listar_compras/$id_usuario");?>">Compras</a>
              </div>
          </li>
        </ul>
        <div class="ml-auto text-white">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span><?= $nombre ?> <?= $apellido ?></span> | <a href="<?php echo base_url('logout');?>" class="btn btn-outline-dark btn-sm">Salir</a>
        </div>
          <!--MENU ADMINISTRADORES-->
        <?php } else if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?> 
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?php echo base_url('principal');?>">Principal<span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url('ver_usuarios');?>">Listado</a>
                <a class="dropdown-item" href="<?php echo base_url('ver_consultas');?>">ver consultas</a>
                <a class="dropdown-item" href="<?php echo base_url('listar_ventas');?>">Listar ventas</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url('productos');?>">Listado</a>
                <a class="dropdown-item" href="<?php echo base_url('alta_producto');?>">Agregar Articulos</a>
                <a class="dropdown-item" href="<?php echo base_url('catalogo');?>">Cat&aacute;logo</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Autogesti&oacute;n</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo base_url('panel');?>">Administraci&oacute;n</a>
            </div>
          </li>
        </ul>
        <div class="ml-auto text-white">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span><?= $nombre ?> <?= $apellido ?></span> | <a href="<?php echo base_url('logout');?>" class="btn btn-outline-dark btn-sm">Salir</a>
          </div>
         <!--MENU PUBLICO-->
         <?php } else { ?> 
         <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link text-white" href="<?php echo base_url('principal');?>">Principal<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url('quienes-somos');?>">Quienes Somos</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url('comercial');?>">Comercializacion</a>        
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url('catalogo');?>">Cat&aacute;logo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url('informacion');?>">Contactos</a>
            </li>
          </ul>
          <div class="ml-auto">
            <a href="<?php echo base_url('login');?>" class="btn btn-outline-light btn-sm mr-2">Ingresar</a> 
            <a href="<?php echo base_url('registrarse');?>" class="btn btn-outline-dark btn-sm">Registrase</a>
         </div>
          <?php } ?> 
      </div>
    </nav>
  </section>
