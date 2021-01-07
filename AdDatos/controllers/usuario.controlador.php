<?php
        require_once "models/usuario.php";
        require_once "models/producto.php";
        session_start();
        class UsuarioControlador {
    
            private $modelo;
            private $modelo2;
    
            public function __construct() {
                $this->modelo = new Usuario;
                $this->modelo2 = new Producto;
            }

            public function Inicio() {
                require_once "views/admin/header.php";
                require_once "views/admin/usuarios/t_user.php";
                require_once "views/admin/footer.php";
            }

            public function editarPerfil()
            {
                require_once "views/usuario/editarPerfil.php";
            }
    
            public function FormCrear() {
                $titulo = "Registrar";
                $u = new Usuario();
                if (isset($_GET['id'])) {
                    $titulo = "Modificar";
                    $u = $this->modelo->Obtener($_GET['id']);
                }
    
                require_once "views/admin/header.php";
                require_once "views/admin/usuarios/form.php";
                require_once "views/admin/footer.php";
            }

            public function EditarUsuario() {
                if (isset($_GET['id'])) {
                    $titulo = "Modificar";
                    $u = $this->modelo->Obtener($_GET['id']);
                }
                require_once "views/usuario/formEditar.php";
            }

            public function EditarDatos()
            {
                $u = new Usuario;
                $u->setId(intval($_POST['id']));
                $u->setNombre($_POST['nombre']);
                $u->setApellido($_POST['apellido']);
                $u->setCorreo($_POST['correo']);
                $u->setContrasena($_POST['contrasena']);

                
                $_SESSION["name"] = $_POST['nombre'];
                $_SESSION["last_name"] = $_POST['apellido'];
                $_SESSION["mail"] = $_POST['correo'];
                $_SESSION["pssw"] = $_POST['contrasena'];

                $this->modelo->Actualizar($u);
                header("location: ?c=usuario&a=editarPerfil");
            }
    
            public function Guardar() {
                $u = new Usuario;
                $u->setId(intval($_POST['id']));
                $u->setNombre($_POST['nombre']);
                $u->setApellido($_POST['apellido']);
                $u->setCorreo($_POST['correo']);
                $u->setContrasena($_POST['contrasena']);

                //If condicion
                $u->getId() > 0 ? 
                //Verdadero
                $this->modelo->Actualizar($u) : 
                //Falso
                $this->modelo->Insertar($u);
                header("location:?c=usuario");
            }
    
            public function GuardarNuevo() {
                $u = new Usuario;
                $u->setId(intval($_POST['id']));
                $u->setNombre($_POST['nombre']);
                $u->setApellido($_POST['apellido']);
                $u->setCorreo($_POST['correo']);
                $u->setContrasena($_POST['contrasena']);
                   
                $this->modelo->Insertar($u);
                header("location: inicio");
            }
    
            public function Borrar() {
                $this->modelo->Eliminar($_GET['id']);
                header("location:?c=usuario");
            }

            //Exportar datos como admnistrador

            //EXCEL
            public function ExportExcelUsuario() {
                header("Content-type: application/vnd.ms-excel");
                header("Content-Disposition: attachment; filename=usuarios.xls");
            ?>    
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
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
                <?php
            }

            public function ExportExcelProd() {
                header("Content-type: application/vnd.ms-excel");
                header("Content-Disposition: attachment; filename=productos.xls");
            ?>    
                <table class="table" id="tablaUsuarios">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($this->modelo2->ListarProductos() as $r):?>
                    <tr>        
                      <th><?=$r->id_producto ?></th>
                      <td><?=$r->nombre ?></td>
                      <td><?=$r->descripcion ?></td>
                      <td><?=$r->precio ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
                <?php
            }

            //XML
            public function ExportXMLUsuario() {
              header("Content-type: text/xml");
              header("Content-Disposition: attachment; filename=usuarios.xml");
            ?>
            <usuarios>
              <id>ID</id>
              <nombre>Nombre</nombre>
              <apellido>Apellido</apellido>
              <correo>Correo</correo>
            </usuarios>
            <?php foreach ($this->modelo2->Listar() as $r):?>
            <usuarios>        
              <id><?=$r->id_usuario ?></id>
              <nombre><?=$r->nombre ?></nombre>
              <apellido><?=$r->apellido ?></apellido>
              <correo><?=$r->correo ?></correo>
            </usuarios>
            <?php endforeach; ?>
            <?php
          }

            public function ExportXMLProd() {
              header("Content-type: text/xml");
              header("Content-Disposition: attachment; filename=productos.xml");
            ?>
            <productos>
              <id>ID</id>
              <nombre>Nombre</nombre>
              <descripcio>Descripcion</descripcio>
              <precio>Precio</precio>
            </productos>
            <?php foreach ($this->modelo2->ListarProductos() as $r):?>
            <productos>        
              <id><?=$r->id_producto ?></id>
              <nombre><?=$r->nombre ?></nombre>
              <descripcion><?=$r->descripcion ?></descripcion>
              <precio><?=$r->precio ?></precio>
            </productos>
            <?php endforeach; ?>
            <?php
          }
        }
?>