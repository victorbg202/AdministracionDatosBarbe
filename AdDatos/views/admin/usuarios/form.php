<form name="formUsuarios" id="formUsuarios" method="POST" action="?c=usuario&a=Guardar">
    <h1><?= $titulo; ?></h1>
    <input name="id" type="hidden" value="<?=$u->getId()?>">

    <div class="form-group">
      <label >Nombre:</label>
      <input name="nombre" type="text" class="form-control" placeholder="Usuario 1" value="<?=$u->getNombre()?>">
    </div>
    <div class="form-group">
      <label >Apellido:</label>
      <input name="apellido" type="text" class="form-control" placeholder="Apellido 1" value="<?=$u->getApellido()?>">
    </div>
    <div class="form-group">
      <label >Correo:</label>
      <input name="correo" type="text" class="form-control" placeholder="hola@hola.com" value="<?=$u->getCorreo()?>">
    </div>
    <div class="form-group">
      <label >Contraseña:</label>
      <input name="contrasena" type="text" class="form-control" placeholder="***********" value="<?=$u->getContrasena()?>">
    </div>

    <div class="modal-footer">
      <a type="button" class="btn btn-secondary" href="?c=usuario&a=Inicio">Cancelar</a>
      <button type="submit" class="btn btn-success"><?= $titulo; ?> Usuario</button>
    </div>
</form>