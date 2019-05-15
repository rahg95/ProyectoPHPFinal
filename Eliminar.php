<?php  
    if (!empty($_GET)) {
        include 'includes/db.php';

        $conexion1 = new DB();
        $con = $conexion1->connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query = $con->prepare("SELECT Imagen FROM eventos WHERE idEventos = ?");
        $query->execute(array($_GET['id']));

        while($datos = $query->fetch(PDO::FETCH_ASSOC)){
            $nombreimg = $datos['Imagen'];
        }

        unlink("img/Eventos/".$nombreimg);

        $conexion =  new DB();
        $cn = $conexion->connect();
        $cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        
        $query = $cn->prepare("DELETE FROM eventos where idEventos = ?"); 
        $query->execute(array($_GET['id'])); 
        
        header("Status: 301 Moved Permanently");
        header("Location: Eventos.php");
    }else {
        echo "nada ha venido"; 
    } 
?>     