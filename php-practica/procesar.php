<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];
echo "<h1>Datos recibidos correctamente</h1>";
echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
echo "<p><strong>Correo:</strong> " . $correo . "</p>";
echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
?>