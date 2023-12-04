<?php include_once "encabezado.php" ;
include_once "base_de_datos.php";
?>

<div class="col-xs-12">
	<h1>Nuevo Proveedor</h1>
	<form method="post" action="guardarproveedor.php">

	<label for="Nombre">Nombre del proveedor</label>
			<input class="form-control" name="Nombre" required type="text" id="Nombre" placeholder="Nombre del proveedor">

	    	<label for="Correo">Correo</label>
			<input class="form-control" name="Correo" required type="text" id="Correo" placeholder="Correo">

			<label for="usuario">Usuario</label>
			<input class="form-control" name="usuario" required type="text" id="usuario" placeholder="usuario">

			<label for="telefono">Telefono:</label>
			<input class="form-control" name="telefono" required type="number" id="telefono" placeholder="telefono">

			<label for="domicilio">Domicilio:</label>
			<input class="form-control" name="domicilio" required type="text" id="domicilio" placeholder="Escribe la domicilio">

			<label for="cp">Código postal:</label>
			<input class="form-control" name="cp" required type="text" id="cp" placeholder="Escribe el Código postal">

			<label for="ciudad">Ciudad:</label>
			<input class="form-control" name="ciudad" required type="text" id="ciudad" placeholder="Escribe la ciudad">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>