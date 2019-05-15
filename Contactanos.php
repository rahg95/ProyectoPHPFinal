<?php
	require('Modulos_generales/header.inc.php');
?>

<body>
	<div id="pagewrap">
		
		<!-- #header y #nav -->
		<?php
			spl_autoload_register(function ($className){
				include_once "class/$className.class.php";
			});

			$datosSesion = new datosSesion();

			$datosSesion->setPagina(basename($_SERVER['PHP_SELF']));

			$datosSesion::insertarDatos($datosSesion->getPagina());
		?>

		<?php
			require ('Modulos_de_Contactanos/content.php');
		?>

		<?php
			require ('Modulos_de_Contactanos/sidebar.php');
		?>

		<?php
			require ('Modulos_generales/footer.inc.php');
		?>
	</div>
	
</body>
</html>