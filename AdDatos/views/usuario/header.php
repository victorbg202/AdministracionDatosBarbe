<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MiWeb</title>
   <link rel="stylesheet" href="assets/css/usuario/header.css">
   <link rel="stylesheet" href="assets/css/usuario/principal.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
   <link rel="stylesheet" href="assets/css/usuario/footerUsuario.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
   <script src="js/search.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light">
 <div class="container">
  <a class="navbar-brand aTittle" href="inici">Productazos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?c=tienda&a=Inicio">Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$url?>"><?=$titulo ?></a>
        </li>
        <a href="<?=$nombreUrl?>"><?=$nombre?></a>
      </ul>
    </div>
</div>
</nav>
  <div class="container">
    <div class="textos">
      <h2>A que estas esperando?</h2>
      <a href="?c=tienda&a=Inicio">Tienda</a>
    </div>
    <img class="img_header" src="assets/img/principal_header.svg" alt="Foto Tienda">
  </div>
</header>
<div class="wave">
  <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
</div>