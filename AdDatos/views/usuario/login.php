<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/usuario/login.css">
    <title>Tienda</title>
  </head>
  <body>
    <a href="index.php"><i class="fas fa-arrow-left flecha"></i></a>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" action="php/login.php" method="GET">
            <h2 class="title texto-naranja">Iniciar sesion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre de usuario" name="nombre"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="*********" name="contrasena"/>
            </div>
            <input type="submit" value="Iniciar" class="btn solid" />
          </form>
          <form action="php/registrar.php" class="sign-up-form" method="GET">
            <h2 class="title texto-naranja">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre" name="nombre"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Apellido" name="apellido"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="correo"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="contrasena"/>
            </div>
            <div class="input-field">
              <i class="fas fa-calendar-alt"></i>
              <input type="date" placeholder="Fecha de nacimiento" name="fechaNacimiento"/>
            </div>
            <input type="submit" class="btn" value="Registrar" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nuevo por aquí ?</h3>
            <p>
              Pulsa en el siguiente boton para registrarte!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrar
            </button>
          </div>
          <img src="assets/img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Uno de nosotros ?</h3>
            <p>
              Si ya estas registrado puedes iniciar sesion directamente.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/img/registro.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/login.js"></script>
  </body>
</html>