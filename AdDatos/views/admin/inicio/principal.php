<h1>Inicio administracion productos</h1>
<div class="container">
  <div class="card">
    <div class="card-header">
      Litsa de productos
    </div>
    <table class="table" id="tablaProductos">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($this->modelo->Listar() as $r):?>
        <tr>        
          <th><?=$r->id_producto ?></th>
          <td><?=$r->nombre ?></td>
          <td><?=$r->descripcion ?></td>
          <td><?=$r->precio ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>