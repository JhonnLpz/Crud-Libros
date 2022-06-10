<?php
$servidor='localhost';
$basedatos='id18710109_dbcrud';
$usuario='id18710109_jhon';
$contrasena='77JIBzRE*V99/}B/';

$conexionlibros = new mysqli($servidor,$usuario,$contrasena,$basedatos);
if ($conexionlibros->connect_errno)
{
	echo"<h1>Error de conexion verifique sus datos</h1> ";
}
else
{
	echo "";
}
?>