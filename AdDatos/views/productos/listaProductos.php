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
  <section class="card-group">  
      <?php foreach ($this->modelo->ListarProductos() as $prod):?>
        <form class="card card--1" name="prodForm" id="prodForm" action="?c=tienda&a=AnadirProducto"  method="POST">
          <?php if(isset($_SESSION['name'])) {?>
            <button class="btn btn-primary">Añadir al carrito</button>
          <?php };?>
          <div class="card__img"></div>
          <div class="card__info">
            <span class="card__category"> Recipe</span>
            <h3 class="card__title"><?=$prod->nombre ?></h3>
            <span class="card__by"><?=$prod->precio ?> <a href="#" class="card__author" title="author">€</a></span>
          </div>
          <input name="nombre" type="hidden" value="<?=$prod->nombre ?>">
          <input name="precio" type="hidden" value="<?=$prod->precio ?>">
        </form>
      <?php endforeach; ?>
  </section>
</div>
<br>
<br>
<br>
<br>