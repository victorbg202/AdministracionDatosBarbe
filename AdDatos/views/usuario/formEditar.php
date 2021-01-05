<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"  rel="stylesheet"  id="bootstrap-css"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/usuario/perfilUsu.css" />
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

<div class="container emp-profile">
    <form name="formUsuarios" id="formUsuarios" method="POST" action="?c=usuario&a=EditarDatos">
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
          <input name="correo" type="email" class="form-control" placeholder="hola@hola.com" value="<?=$u->getCorreo()?>">
        </div>
        <div class="form-group">
          <label >Contraseña:</label>
          <input name="contrasena" type="text" class="form-control" placeholder="***********" value="<?=$u->getContrasena()?>">
        </div>
    
        <div class="modal-footer">
          <a type="button" class="btn btn-secondary" href="?c=usuario&a=editarPerfil">Cancelar</a>
          <button type="submit" class="btn btn-success"><?= $titulo; ?> Datos</button>
        </div>
    </form>
</div>
