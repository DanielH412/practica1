
<?php

$precio1 = $_POST['precio1'];

$precio2 = $_POST['precio2'];

$precio3 = $_POST['precio3'];

$media = ($precio1+$precio2+$precio3)/3;

$total = ($precio1+$precio2+$precio3);

echo "<br/> &nbsp; DATOS RECIBIDOS";

echo "<br/> &nbsp; Precio producto establecimiento 1: ". $precio1. " pesos";

echo "<br/> &nbsp; Precio producto establecimiento 2: ". $precio2. " pesos";

echo "<br/> &nbsp; Precio producto establecimiento 2: ". $precio3. " pesos <br/>";

echo "<br/> &nbsp; El precio medio del producto es de ". $media. " pesos";

echo "<br/> &nbsp; El precio total del producto es de ". $total. " pesos";

?>