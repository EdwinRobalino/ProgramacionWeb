<?php
require_once("CalificacionCollector.php");

$CalificacionCollectorObj = new CalificacionCollector();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
    <body>
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Parcial</th>
                <th>Final</th>
                <th>Mejoramiento</th>
                <th>Promedio</th>
              </tr>
            </thead>
            <tbody>
		        <?php
		            foreach ($CalificacionCollectorObj->showCalificaciones() as $c) {
		        ?>
		            <tr>
		                <td><?php echo $c->getNombre(); ?></td>
		                <td><?php echo $c->getParcial(); ?></td>
		                <td><?php echo $c->getFinal(); ?></td>
		                <td><?php echo $c->getMejoramiento(); ?></td>
		                <td><?php echo $c->getPromedio(); ?></td>
		            </tr>
		        <?php } ?>
            </tbody>
          </table>
        </div>
</html>
