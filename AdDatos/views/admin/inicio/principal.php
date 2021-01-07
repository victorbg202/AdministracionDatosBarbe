<br>
<h1>Inicio administracion productos</h1>
<br>
<br>
<br>
<div class="container">
  <h2>Gestion de productos</h2>
  <div class="card">
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
      <?php foreach ($this->modelo->ListarProductos() as $r):?>
        <tr>        
          <th><?=$r->id_producto ?></th>
          <td><?=$r->nombre ?></td>
          <td><?=$r->descripcion ?></td>
          <td><?=$r->precio ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <div class="card-body">
      <a type="button" class="btn btn-success btn-block" href="?c=usuario&a=ExportXMLProd">Exportar XML</a>
      <a type="button" class="btn btn-success btn-block" href="?c=usuario&a=ExportExcelProd">Exportar Excel</a>
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <h1>Gestion de usuarios</h1>
  <div class="card">
    <table class="table" id="tablaUsuarios">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Correo</th>
          <th scope="col">Contraseña</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($this->modelo->Listar() as $u):?>
        <tr>        
          <th><?=$u->id_usuario ?></th>
          <td><?=$u->nombre ?></td>
          <td><?=$u->apellido ?></td>
          <td><?=$u->correo ?></td>
          <td><?=$u->contrasena ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <div class="card-body">
      <a type="button" class="btn btn-success btn-block" href="?c=usuario&a=ExportXMLUsuario">Exportar XML</a>
      <a type="button" class="btn btn-success btn-block" href="?c=usuario&a=ExportExcelUsuario">Exportar Excel</a>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>