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
          <th></th>
          <th></th>
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
          <td><a href="?c=usuario&a=FormCrear&id=<?=$u->id_usuario?>">Editar</a></td>
          <td><a href="?c=usuario&a=Borrar&id=<?=$u->id_usuario?>">Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <div class="card-body">
      <a type="button" class="btn btn-success btn-block" href="?c=usuario&a=FormCrear">Añadir nuevo</a>
    </div>
  </div>
</div>