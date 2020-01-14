<?php
// Conectar con la base de datos y seleccionarla
$conexion = mysql_connect('localhost', 'miusuario', 'micontrasena');
mysql_select_db('blog_db', $conexion);
// Ejecutar la consulta SQL
$resultado = mysql_query('SELECT fecha, titulo FROM articulo',$conexion);
// Crear el array de elementos para la capa de la vista
$articulos = array();
while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC)){
$articulos[] = $fila;
}
// Cerrar la conexión
mysql_close($conexion);
// Incluir la lógica de la vista
require('vista.php');
?>