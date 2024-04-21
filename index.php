<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Empresa</title>
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados para el modo nocturno -->
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mi Empresa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Nuestros Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contáctenos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutUs">Nosotros</a>
            </li>
            <li class="nav-item">
                <button id="toggleMode" class="btn btn-link">Cambiar Modo</button>
            </li>
        </ul>
    </div>
</nav>

<!-- Home -->
<div class="container mt-5" id="home">
    <h1>¡Bienvenidos a Mi Empresa!</h1>
    <p>Introducción a nuestra empresa...</p>
</div>

<!-- Nuestros Servicios -->
<div class="container mt-5">
    <h2>Nuestros Servicios</h2>
    <div class="row" id="services">
    </div>
</div>

<!-- Contáctenos -->
<div class="container mt-5" id="contact">
    <h2>Contáctenos</h2>
    <form>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded" loading="lazy" src="./images/con-ingenio-solo-colores.png" alt="About 1">
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11" id="aboutUs">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Agrega los enlaces a los archivos JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Script para alternar entre los modos de estilo -->
<script src="./scripts/index.js"></script>
</body>
</html>