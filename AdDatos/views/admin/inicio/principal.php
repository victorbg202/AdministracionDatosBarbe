<h1>Inicio administracion productos</h1>
<div class="container">
  <h3>Lista de productos</h3>
  <div class="card">
    <table class="table" id="tablaProductos">
      <thead class="table-warning">
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
  <h3>Lista de Usuarios</h3>
  <div class="card">
    <table class="table" id="tablaProductos">
      <thead class="table-warning">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Correo</th>
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