<?php
#Salir si alguno de los datos no está presente
if( !isset($_POST["id"]) ||
	!isset($_POST["Nombre_producto"]) || 
	!isset($_POST["categoria"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["color"]) || 
	!isset($_POST["material"]) || 
	!isset($_POST["talla"]) ||
	!isset($_POST["marca"]) ||
	!isset($_POST["stock"]))


#Si todo va bien, se ejecuta esta parte del código...

$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "bd__zapateria";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, "");
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
$id = $_POST["id"];
$Nombre_producto = $_POST["Nombre_producto"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$color = $_POST["color"];
$material = $_POST["material"];
$talla = $_POST["talla"];
$marca = $_POST["marca"];
$stock = $_POST["stock"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET Nombre_producto = ?, categoria = ?, precio = ?, color = ?, material = ?, talla = ?, marca = ?, stock = ? WHERE id = ?;");
$resultado = $sentencia->execute([$Nombre_producto, $categoria, $precio, $color, $material, $talla, $marca, $stock, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del proveedor";
?>