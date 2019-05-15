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
		"index.php" => "Inicio",
		"Experiencias_de_exito.php" => "Experiencias de Exito",
		"Temas_de_interes.php" => "Temas de Interes",
		"Calendario.php" => "Calendario"

	);


	foreach ($menuopciones as $enlace => $nombre) {

			$listitems .= "<li><a href='".$enlace."'>".$nombre."</a></li>";
		}
	

	$listitems .= "<li style=\"float:right\">";
	$listitems .=    "<a href=\"../Registrarse.php\">Registrarse</a>";
	$listitems .= "</li>";
	$listitems .= "<li style=\"float:right\">";
	$listitems .=    "<a href=\"../index.php\">Loguearse</a>";
	$listitems .= "</li>";
	
	
	$listitems .= "</ul>";
	$listitems .= "</nav>";
	$listitems .= "</header>";

	echo $listitems;

?>