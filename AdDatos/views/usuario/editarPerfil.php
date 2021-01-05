<link
  href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
  rel="stylesheet"
  id="bootstrap-css"
/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/usuario/perfilUsu.css" />
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>


<a href="index.php"><i class="fas fa-arrow-left flecha"></i></a>
<div class="container emp-profile">
  <form method="post">
    <div class="row">
      <div class="col-md-4">
        <div class="profile-img">
          <img
            src="<?= $_SESSION['img'];?>"
            alt="imagen de perfil"
          />
        </div>
      </div>
      <div class="col-md-6">
        <div class="profile-head">
          <h2><?= $_SESSION['name'];?></h2>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="home-tab"
                data-toggle="tab"
                href="#home"
                role="tab"
                aria-controls="home"
                aria-selected="true"
                >Info</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <a class="btn btn-primary" href="?c=usuario&a=EditarUsuario&id=<?=$_SESSION['id']?>">Editar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="profile-work">
        </div>
      </div>
      <div class="col-md-8">
        <div class="tab-content profile-tab" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <div class="row">
              <div class="col-md-6">
                <label>Id Usuario</label>
              </div>
              <div class="col-md-6">
                <p><?= $_SESSION['id'];?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Nombre</label>
              </div>
              <div class="col-md-6">
                <p><?= $_SESSION['name'];?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Apellido</label>
              </div>
              <div class="col-md-6">
                <p><?= $_SESSION['last_name'];?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Email</label>
              </div>
              <div class="col-md-6">
                <p><?= $_SESSION['mail'];?></p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
