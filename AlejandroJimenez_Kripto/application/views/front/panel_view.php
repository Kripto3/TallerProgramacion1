<section class="mt-4 page-content">
  <div class="container">
  <?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '2') ) { ?>
    <h1 class="display-4">Administraci&oacute;n</h1>
    <hr>
      <div class="container">
        <div class="row">
          <a title="Ver usuarios" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-info" href="<?php echo base_url('catalogo');?>">
                <div class="card-body">
                <i class="fa fa-users fa-3x text-info float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-info">Cat&aacute;logo</p>
                </div>
                </div>
          </a>
          <a title="Ver productos" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-success" href="<?php echo base_url("listar_compras/$id_usuario");?>">
                <div class="card-body">
                <i class="fa fa-braille fa-3x text-success float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-success">Ver Compras</p>
                </div>
                </div>
          </a>
        </div>
      </div>
  </div>
    <?php } else { ?>
      <h1 class="display-4">Panel de Control</h1>
      <hr>
    <div class="container">
        <div class="row">
          <a title="Ver usuarios" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-info" href="<?php echo base_url('ver_usuarios');?>">
                <div class="card-body">
                <i class="fa fa-users fa-3x text-info float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-info">Ver usuarios</p>
                </div>
                </div>
          </a>
          <a title="Ver productos" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-success" href="<?php echo base_url('productos');?>">
                <div class="card-body">
                <i class="fa fa-braille fa-3x text-success float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-success">Ver productos</p>
                </div>
                </div>
          </a>
        </div>
        <div class="row">
          <a title="Ver consultas" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-warning" href="<?php echo base_url('ver_consultas');?>">
                <div class="card-body">
                <i class="fa fa-archive fa-3x text-warning float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-warning">Ver consultas</p>
                </div>
                </div>
          </a>
          <a title="Ver Ventas" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-dark"href="<?php echo base_url('listar_ventas');?>">
                <div class="card-body">
                <i class="fa fa-line-chart fa-3x text-dark float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-dark">Ver Ventas</p>
                </div>
                </div>
          </a>
        </div>
        <hr />
        <h5 class="display-5">Administraci&oacute;n de Bajas</h2>
        <div class="row">
          <a title="Baja de usuarios" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">
                <div class="card-body">
                <i class="fa fa-user-times fa-3x text-danger float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-danger">Baja de usuarios</p>
                </div>
                </div>
          </a>
          <a title="Baja de productos" class="shadow bg-white rounded card col-4 mb-4 ml-3 text-decoration-none border-danger" href="<?php echo base_url('productos_eliminados'); ?>">
                <div class="card-body">
                <i class="fa fa-trash fa-3x text-danger float-left mr-2"></i>
                <div class="card-horizontal-content mr-2">
                  <p class="h5 card-title text-danger">Baja de productos</p>
                </div>
                </div>
          </a>
        </div>
      </div>
      <?php } ?>
  </div>
 

</section>
