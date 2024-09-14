<!-- views/home.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <?php require_once 'layouts/partials/css.php'; ?>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php echo $logo ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            Tienda MAS
        </a>
        <ul class="navbar-nav ml-auto d-flex flex-row">
            <li class="nav-item mr-3">
                <a class="nav-link" href="#"><i class="fab fa-facebook"></i> Facebook</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            </li>
        </ul>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            <?php foreach ($img_sliders as $key => $img_slider) { ?>
                <div class="carousel-item <?php if ($key == 0) {
                                                echo 'active';
                                            } ?>">
                    <img src="<?php echo $img_slider ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>



    <div class="container py-3 ">
        <h3 class="text-center mb-4">Nuestros Productos</h3>
        <div class="row">
            <?php foreach ($productos as $producto) { ?>
                <div class="col-md-12 col-lg-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?php echo $producto['image'] ?>" alt="..." class="img-fluid"> <!-- Añade la clase img-fluid para que la imagen se ajuste al tamaño del contenedor -->
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $producto['title'] ?></h5>
                                    <p class="card-text"><?php echo $producto['description'] ?></p>
                                    <p class="card-text"><small class="text-muted"><?php echo $producto['enlace'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <div class="container mb-4">
        <footer class="bg-light py-3 border">
            <div class="container-fluid text-md-left text-center">
                <p class="mb-1"><i class="fas fa-map-marker-alt"></i> Jr. Amazonas 120</p>
                <p class="mb-1"><i class="fas fa-phone-alt"></i> Teléfono: 930766011</p>
                <p class="text-muted text-center">Todos los Derechos Reservados 2024</p>
            </div>
        </footer>
    </div>

    </div>


    <?php require_once 'layouts/partials/scripts.php'; ?>
</body>

</html>