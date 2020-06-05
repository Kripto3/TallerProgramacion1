<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>       "      >
    <title>Home</title>
</head>

<body>
<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  mb-5" >
  <a class="navbar-brand" href="#">INICIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">CONSOLAS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ACCESORIOS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          JUEGOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">SONY</a>
          <a class="dropdown-item" href="#">XBOX</a>
          <a class="dropdown-item" href="#">NINTENDO</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
 </nav>
    </header>

    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img width="100%" src="<?php echo base_url("assets/imagenes/codww2.png"); ?>" alt="First slide">
              </div>
              <div class="carousel-item">
                <img width="100%" src="<?php echo base_url("assets/imagenes/farcry5.jpg"); ?>" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img width="100%" src="<?php echo base_url("assets/imagenes/ghost.png"); ?>" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </section>
<div class="container-fluid row">
    <section class="col-md-9 container">
        <div class="row">
          <div class="col-md-4">
              <p>item1</p>
          </div>
          <div class="col-md-4">
              <p>item2</p>
          </div>
          <div class="col-md-4">
              <p>item3</p>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>item1</p>
            </div>
            <div class="col-md-4">
                <p>item2</p>
            </div>
            <div class="col-md-4">
                <p>item3</p>
            </div>
        </div>
        <div class="row bg-dark container">
            <div class="col-md-4">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quas quo necessitatibus aperiam quae, nihil fugiat. Laudantium ipsam ut adipisci, et molestiae doloremque porro iusto quae. Aliquid rem eligendi eius?</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla vitae maxime ratione architecto laboriosam earum blanditiis deleniti, aliquam et facere nihil numquam saepe quis obcaecati! Quas, sequi. Sit, suscipit alias!</p>
            </div>
            <div class="col-md-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat commodi iure eaque saepe accusantium voluptatum architecto accusamus eum explicabo cumque ad alias voluptate laborum est ipsam, magnam reiciendis blanditiis?</p>
            </div>
        </div>
    </section>

    <aside class="col-md-3">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ipsa perferendis nemo voluptate et, officia minima? Libero aliquid itaque repellat repellendus quasi earum nemo soluta, eos explicabo architecto sunt et?</p>
    </aside>
</div>
      

    <footer>
        <p>&copy Copyright 2018</p>
    </footer>
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/popper.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

</body>

</html>