<?php
//creacion del arreglo
$numeros = array();
for ($i = 0; $i < 50; $i++) {
    $numeros[$i] = rand(1, 100);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos</title>
</head>
<body>
    <h1>Arreglo de 50 números aleatorios</h1>
    <?php
    //mostrar los numeros en un renglon separados por una coma, solo una ajaj
    echo implode(", ", $numeros);
    ?>
</body>
</html>
