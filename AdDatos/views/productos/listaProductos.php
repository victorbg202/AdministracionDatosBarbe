<link rel="stylesheet" href="assets/css/productos/listaProd.css">

<!-- Titulo -->
<h1>Tienda</h1>

<!-- Barra de busqueda -->
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <button type="button" onClick="location.href='tienda.controlador.php?categoria=<?= $this->setCateg('todos'); ?>'" >Todos</button>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="?c=tienda&a=<?= $this->setCateg('todos'); ?>">Ordenadores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pantallas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Impresoaras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Componentes</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Ordenadores</a>
          <a class="dropdown-item" href="#">Impresoaras</a>
          <a class="dropdown-item" href="#">Componentes</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>
<?= $this->getCateg(); ?>
<br>
<br>

<!-- Seccion de productos -->
<div class="container">
  <section class=" card-deck">  
    <?php foreach ($this->modelo->ListarProductos() as $prod):?>
      <article class="card card--1">
        <div class="card__info-hover">
          <button class="btn btn-successful">Añadir al carrito</button>
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info">
          <span class="card__category"> Recipe</span>
          <h3 class="card__title"><?=$prod->nombre ?></h3>
          <span class="card__by">by <a href="#" class="card__author" title="author">Celeste Mills</a></span>
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</div>