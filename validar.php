<?php 
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base
$conexion=mysqli_connect("localhost","root","","bdprueba");
$consulta="SELECT * FROM  usuarios WHERE usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
	header("location:bienvenidos.html");
}
else{
	echo "Error en la utentificación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);






?>