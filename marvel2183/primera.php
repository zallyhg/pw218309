<?php
	$variable=10;
	for ($i=0; $variable < ; $variable++) { 
		print("holaa php <br>")
	}
$servidor="localhost";
$usuario="root";
$password="";
$basedatos="pw09"

$conexion=mysqli_connect($servidor,$usuario,$password,$basedatos);
$sql="select ncontrol,nombre,apellido,edad from alumnos";
$resultado=mysqli_query($conexion,$sql);

var arregloDatos=array();
if (mysqli_num_rows($resultado)>0) {
	while ($registro=mysqli_fetch_array($resultado)) {
		# BOF EOF  apuntador
		$arregloDatos[]=registro;
		// array_push($arregloDatos,$registro);
	}
}
//amonos, imprimimos el arreglon parienton
print($arregloDatos);
//y si kiero json compa??
print json_encode($arregloDatos);
?>