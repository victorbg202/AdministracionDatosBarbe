<?php

    echo "productos";

?>

<table>

  <tr>

    <td>id_producto</td>

    <td>nombre</td>

    <td>dexcripcion</td>

    <td>precio</td>

  </tr>
<?php foreach ($this->modelo->Listar() as $r):?>
  <tr>

    <td><?=$r->id_producto ?></td>
    <td><?=$r->nombre ?></td>
    <td><?=$r->descripcion ?></td>
    <td><?=$r->precio ?></td>
    <td><a href="?c=producto&a=FormCrear&id=<?=$r->id_producto?>">Editar</a></td>
    <td><a href="?c=producto&a=Borrar&id=<?=$r->id_producto?>">Eliminar</a></td>
  </tr>
<?php endforeach; ?>
</table>

<a href="index.php">Inicio</a>
<a href="?c=producto&a=FormCrear">Nuevo</a>