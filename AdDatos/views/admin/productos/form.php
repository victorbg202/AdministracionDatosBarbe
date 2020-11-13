<form name="formProductos" id="formProductos" method="POST" action="?c=producto&a=Guardar">
  <h1><?= $titulo; ?></h1>
  <input name="id" type="hidden" value="<?=$p->getId()?>">
 
    <div class="form-group">
      <label >Nombre:</label>
      <input name="nombre" type="text" class="form-control" placeholder="Producto 1" value="<?=$p->getNombre()?>">
    </div>
    <div class="form-group">
      <label >Descripcion:</label>
      <input name="descripcion" type="text" class="form-control" placeholder="Texto.... " value="<?=$p->getDesc()?>">
    </div>
    <div class="form-group">
      <label >Precio:</label>
      <input name="precio" type="money" class="form-control" placeholder="0,00 €" value="<?=$p->getPrecio()?>">
    </div>
    <div class="modal-footer">
      <a type="button" class="btn btn-secondary" href="?c=producto">Cancelar</a>
      <button type="submit" class="btn btn-success"><?= $titulo; ?> producto</button>
    </div>
</form>