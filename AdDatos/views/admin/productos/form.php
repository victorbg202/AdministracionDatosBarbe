<form name="formProductos" id="formProductos" method="POST">
  <h1><?= $titulo; ?></h1>
  <input name="id" type="hidden" value="<?=$p->getId()?>">
  <label>nombre:</label><br>
    <div class="form-group">
      <label >Nombre:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Producto 1">
    </div>
    <div class="form-group">
      <label >Descripcion:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Texto.... ">
    </div>
    <div class="form-group">
      <label >Precio:</label>
      <input type="money" class="form-control" id="exampleFormControlInput1" placeholder="0,00 €">
    </div>
    <div class="modal-footer">
      <a type="button" class="btn btn-secondary" href="?c=producto">Cancelar</a>
      <button type="submit" class="btn btn-success"><?= $titulo; ?> producto</button>
    </div>
</form>