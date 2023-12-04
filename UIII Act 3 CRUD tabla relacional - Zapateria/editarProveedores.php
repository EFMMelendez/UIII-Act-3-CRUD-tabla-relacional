<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM proveedores WHERE id = ?;");
$sentencia->execute([$id]);
$proveedor = $sentencia->fetch(PDO::FETCH_OBJ);
if($proveedor === FALSE){
	echo "¡No existe algún proveedor con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar Proveedor con el ID <?php echo $proveedor->id; ?></h1>
		<form method="post" action="editadosProveedores.php">
			<input type="hidden" name="id" value="<?php echo $proveedor->id; ?>">

			<label for="Nombre">Nombre del proveedor</label>
			<input value="<?php echo $proveedor->Nombre; ?>" class="form-control" name="Nombre" required type="text" id="Nombre" placeholder="Nombre del proveedor">

	    	<label for="Correo">Correo</label>
			<input value="<?php echo $proveedor->Correo; ?>" class="form-control" name="Correo" required type="text" id="Correo" placeholder="Correo">

			<label for="usuario">Usuario</label>
			<input value="<?php echo $proveedor->usuario; ?>" class="form-control" name="usuario" required type="text" id="usuario" placeholder="usuario">

			<label for="telefono">telefono:</label>
			<input value="<?php echo $proveedor->telefono; ?>" class="form-control" name="telefono" required type="number" id="telefono" placeholder="telefono">

			<label for="domicilio">Domicilio:</label>
			<input value="<?php echo $proveedor->domicilio; ?>" class="form-control" name="domicilio" required type="text" id="domicilio" placeholder="Escribe la domicilio">

			<label for="cp">Código postal:</label>
			<input value="<?php echo $proveedor->cp; ?>" class="form-control" name="cp" required type="text" id="cp" placeholder="Escribe el Código postal">

			<label for="ciudad">Ciudad:</label>
			<input value="<?php echo $proveedor->ciudad; ?>" class="form-control" name="ciudad" required type="text" id="ciudad" placeholder="Escribe la ciudad">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>