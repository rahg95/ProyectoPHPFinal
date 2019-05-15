<?php
	$listitems = "";
	$listitems .= "	<header id=\"header\">";
	$listitems .= " <hgroup>";
	$listitems .= "	<img src=\"../img/logo.png\" id=\"logo\" alt=\"logo\">";
	$listitems .= "	<h2 id=\"site-description\">Agenda electronica con manejo de eventos por categorias</h2>";
	$listitems .= " </hgroup>";

	$listitems .= "<nav>";
	$listitems .= "<ul id=\"main-nav\" class=\"clearfix\">";

	$menuopciones = array(
		"Empleados.php" => "Empleados",
		"Registro.php" => "Registros",
		"Eventos.php" => "Eventos",
		"Calendario.php" => "Calendario"
	);


	foreach ($menuopciones as $enlace => $nombre) {
		$listitems .= "<li><a href='".$enlace."'>".$nombre."</a></li>";
	}


	$listitems .= "<li style=\"float:right\">";
	$listitems .=    "<a href=\"../includes/logout.php\">Cerrar sesión</a>";
	$listitems .= "</li>";

	$listitems .= "<li style=\"float:right\">";
	$listitems .=  "<a id = 'usuario' name = 'usuario'> Administrador: ".$user->getUsername()."</a>";
	$listitems .= "</li>";
	$listitems .= "</ul>";
	$listitems .= "</nav>";
	$listitems .= "</header>";

	echo $listitems;

?>