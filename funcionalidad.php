
<?php
session_start(); // arreglo por si no esta creado nada mas
if (!isset($_SESSION['numeros'])) {
    $numeros = array();
    for ($i = 0; $i < 50; $i++) {
        $numeros[$i] = rand(1, 100);
    }
    $_SESSION['numeros'] = $numeros;
}
//guardar el arreglo de la sesion
$numeros = $_SESSION['numeros'];
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
    //comas
    echo implode(", ", $numeros);
    ?>
    <br><br>
    <form method="POST" action="">
        <button type="submit" name="mostrar">Mostrar los tres números más grandes</button>
    </form>
    <?php
    if (isset($_POST['mostrar'])) {
        //ordenar de mayor a menor
        $mayores = $numeros;
        rsort($mayores);
        echo "<h2>Los tres números más grandes son:</h2>";
        for ($i = 0; $i < 3; $i++) {
            echo $mayores[$i] . "<br>";
        }
    }
    ?>
</body>
</html>
