<form method="POST" action="?c=producto&a=Guardar" method="POST">
<h1><?= $titulo; ?></h1>
  <input name="id" type="hidden" value="<?=$p->getId()?>">
  <label>nombre:</label><br>
  <input type="text" name="nombre" value="<?=$p->getNombre()?>"><br>

  <label>descripcion:</label><br>
  <input type="text" name="descripcion" value="<?=$p->getDesc()?>"><br>

  <label>precio:</label><br>
  <input type="text" name="precio" value="<?=$p->getPrecio()?>"><br>

  <button type="submit">Enviar</button>
</form>