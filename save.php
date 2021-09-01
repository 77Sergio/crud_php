<?php

include("db.php");

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];


$insertar = "INSERT INTO tareas(titulo, descripcion) VALUES('$titulo', '$descripcion')";
$enviar = mysqli_query($conn, $insertar);



if (!$enviar) {
    die('No se pudo guardar');
}
echo 'Guardado con éxito';
