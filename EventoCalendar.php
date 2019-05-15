<?php
header('Content-Type: application/json');
$pdo=new PDO ("mysql:dbname=gestoreventos;host=127.0.0.1","root","");

//seleccionar los eventos del calendario

$sentenciaSQL = $pdo->prepare("SELECT EM.Nombres, EM.Apellidos, EV.idEventos as id,  EV.Titulo as title,  EV.descripcion as descripcion,  EV.Fecha_inicio as start, EV.Fecha_inicio as finicio,  EV.Fecha_final as end, EV.Fecha_final as ffinal FROM eventos as EV INNER JOIN empleados as EM on EV.idEmpleados = EM.idEmpleados");
$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);



?>