<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">

	<label for="Nombre_producto">Nombre del producto</label>
			<input class="form-control" name="Nombre_producto" required type="text" id="Nombre_producto" placeholder="Nombre del producto">

			<label for="stock">Cantidad en el stock:</label>
			<input class="form-control" name="stock" required type="text" id="stock" placeholder="Stock">

			<label for="categoria">categoria:</label>
			<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="categoria">

			<label for="precio">precio:</label>
			<input class="form-control" name="precio" required type="text" id="precio" placeholder="Escribe el precio">

			<label for="color">Color:</label>
			<input class="form-control" name="color" required type="text" id="color" placeholder="Escribe la color">

			<label for="material">Material:</label>
			<input class="form-control" name="material" required type="text" id="material" placeholder="Escribe el material">

			<label for="talla">talla:</label>
			<input class="form-control" name="talla" required type="text" id="talla" placeholder="talla">

			<label for="marca">Marca:</label>
			<input class="form-control" name="marca" required type="text" id="marca" placeholder="Marca">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>