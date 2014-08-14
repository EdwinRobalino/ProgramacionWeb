<?php
	$nombre = $_POST['Nombre'];
  $parcial = $_POST['Parcial'];
  $final = $_POST['Final'];
  $mejoramiento = $_POST['Mejoramiento'];

	if($parcial>=0 and $parcial<=100) {
		echo 'ok';
	}else
		echo "valor de parcial debe ser entre 0 y 100<br />";
	if($final>=0 and $final<=100) {
		echo 'ok';
	}else
		echo "valor de final debe ser entre 0 y 100<br />";
	if($mejoramiento>=0 and $mejoramiento<=100) {
		echo 'ok';
	}else
		echo "valor de mejormiento debe ser entre 0 y 100<br />";
?>
