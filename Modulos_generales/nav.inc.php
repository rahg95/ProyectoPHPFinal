<?php
	$listitems = "";
	$listitems .= "	<header id=\"header\">";
	$listitems .= " <hgroup>";
	$listitems .= "	<img src=\"img/logo.png\" id=\"logo\" alt=\"logo\">";
	$listitems .= "	<h2 id=\"site-description\">Agenda electronica con manejo de eventos por categorias</h2>";
	$listitems .= " </hgroup>";

	$listitems .= "<nav>";
	$listitems .= "<ul id=\"main-nav\" class=\"clearfix\">";

	$menuopciones = array(
		"Inicio.php" => "Inicio",
		"Eventos" => array(
			"Eventos.php" => "Eventos",
			"Mis_eventos.php" => "Mis Eventos"
		),
		"Experiencias_de_exito.php" => "Experiencias de Exito",
		"Temas_de_interes.php" => "Temas de Interes",
		"Calendario.php" => "Calendario"
	);


	foreach ($menuopciones as $enlace => $nombre) {
		if($enlace == "Eventos"){
			$listitems .= "<li><a>Eventos</a><ul>";
			foreach($nombre as $enlace2 => $nombre2){
				$listitems .= "<li><a href='".$enlace2."'>".$nombre2."</a><li>";
			}
			$listitems .= "</ul></li>";
		}else{
			$listitems .= "<li><a href='".$enlace."'>".$nombre."</a></li>";
		}
	}

	$listitems .= "<li style=\"float:right\">";
	$listitems .=    "<a href=\"includes/logout.php\">Cerrar sesión</a>";
	$listitems .= "</li>";

	$listitems .= "<li style=\"float:right\">";
	$listitems .=  "<a> Empleado: ".$user->getUsername()."</a>";
	$listitems .= "</li>";
	
	$listitems .= "</ul>";
	$listitems .= "</nav>";
	$listitems .= "</header>";

	echo $listitems;

?>