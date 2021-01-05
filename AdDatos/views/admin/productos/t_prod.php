<div class="container">
  <h1>Gestion de productos</h1>
  <div class="card">
    <table class="table" id="tablaProductos">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($this->modelo->ListarProductos() as $r):?>
        <tr>        
          <th><?=$r->id_producto ?></th>
          <td><?=$r->nombre ?></td>
          <td><?=$r->descripcion ?></td>
          <td><?=$r->precio ?></td>
          <td><a href="?c=producto&a=FormCrear&id=<?=$r->id_producto?>">Editar</a></td>
          <td><a href="?c=producto&a=Borrar&id=<?=$r->id_producto?>">Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <div class="card-body">
      <a type="button" class="btn btn-success btn-block" href="?c=producto&a=FormCrear">Añadir nuevo</a>
    </div>
  </div>
</div>