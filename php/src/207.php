<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>207.php</title>
</head>
<body>
<?php

$numero1 = isset($_GET['numero1']) ? (int)$_GET['numero1'] : null;
$numero2 = isset($_GET['numero2']) ? (int)$_GET['numero2'] : null;
$numero3 = isset($_GET['numero3']) ? (int)$_GET['numero3'] : null;

if ($numero1 !== null && $numero2 !== null && $numero3 !== null) {
    $mayor = $numero1;

    if ($numero2 > $mayor) {
        $mayor = $numero2;
    }

    if ($numero3 > $mayor) {
        $mayor = $numero3;
    }

    echo "El nombre més gran entre $numero1, $numero2 i $numero3 és el $mayor";
} else {
    echo "<p>Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString</p>";
}
?>
</body>
</html>
