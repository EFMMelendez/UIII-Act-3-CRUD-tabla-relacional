<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">

			<label for="Nombre_producto">Nombre del producto</label>
			<input value="<?php echo $producto->Nombre_producto ?>" class="form-control" name="Nombre_producto" required type="text" id="Nombre_producto" placeholder="Nombre del producto">

			<label for="stock">Cantidad en el stock:</label>
			<input value="<?php echo $producto->stock ?>" class="form-control" name="stock" required type="text" id="stock" placeholder="Stock">

			<label for="categoria">categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="categoria">

			<label for="precio">precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="text" id="precio" placeholder="Escribe el precio">

			<label for="color">Color:</label>
			<input value="<?php echo $producto->color ?>" class="form-control" name="color" required type="text" id="color" placeholder="Escribe la color">

			<label for="material">Material:</label>
			<input value="<?php echo $producto->material ?>" class="form-control" name="material" required type="text" id="material" placeholder="Escribe el material">

			<label for="talla">talla:</label>
			<input value="<?php echo $producto->talla ?>" class="form-control" name="talla" required type="text" id="talla" placeholder="talla">

			<label for="marca">Marca:</label>
			<input value="<?php echo $producto->marca ?>" class="form-control" name="marca" required type="text" id="marca" placeholder="Marca">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
