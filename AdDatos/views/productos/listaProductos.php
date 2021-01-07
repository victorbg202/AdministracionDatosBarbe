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
          <li>
            <a class="nav-link" href="?c=tienda&categoria=todos">Todos</a>
          </li>
      <?php foreach ($this->modelo->ListarCategorias() as $categorias) : ?> 
          <li>
            <a class="nav-link" href="?c=tienda&categoria=<?=$categorias->nombreCat; ?>"><?=$categorias->nombreCat; ?></a>
          </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>
<?= $this->categoria ?>
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
<br>
<br>
<br>
<br>