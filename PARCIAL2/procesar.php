<?php
$NOMBRE = $_POST["NOMBRE"];
$CORREO = $_POST["CORREO"];
$CONSULTA = $_POST["CONSULTA"];
echo "<h1>CITA RESELVADA TU OPTICA DE CONFIANZA, MIRASOL</h1>";
echo "<p><strong>NOMBRE COMPLETO:</strong> " . $NOMBRE . "</p>";
echo "<p><strong>CORREO GMAIL:</strong> " . $CORREO . "</p>";
echo "<p><strong>CONSULTA:</strong> " . $CONSULTA . "</p>";
$servicios = [
    "EXAMEN DE VISTA - Bs 50",
    "ARMAZON CLASICO - Bs 180",
    "LENTES DE SOL - Bs 120"
];
echo "<h2>SERVICIOS DE LA OPTICA</h2>";
echo "<ul>";
foreach ($servicios as $servicio) {
    echo "<li>" . $servicio . "</li>";
}
echo "</ul>";
echo "<p>TE ATENDERA SILVESTRE M. MELGAR COIMBRA</p>";
?>