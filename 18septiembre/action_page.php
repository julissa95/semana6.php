<?php
$MiObjeto=new stdClass();
$MiObjeto->Nombre=$_GET['Nombre'];
$MiObjeto->Apellido=$_GET['Apellido'];
if($objeto->nombre ==$_GET['nombre'])
{
	
}


$archivo = fopen("usuario.txt", "a");
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?>
<!--



-->