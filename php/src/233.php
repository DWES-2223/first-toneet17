<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>233.php</title>
</head>
<body>
<?php

if (isset($_GET['quantitat'])) {
    $quantitat = (int)$_GET['quantitat'];
    $valors = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    $resultat = [];

    foreach ($valors as $valor) {
        $quantitatActual = intdiv($quantitat, $valor);

        if ($quantitatActual > 0) {
            $resultat[$valor] = $quantitatActual;
        }

        $quantitat %= $valor;
    }

    if (!empty($resultat)) {
        echo "<ul>";
        foreach ($resultat as $valor => $quantitatActual) {
            echo "<li>$quantitatActual ";
            if ($valor >= 5) {
                echo "bitllet";
            } else {
                echo "moneda";
            }
            if ($quantitatActual > 1) {
                echo "s";
            }
            echo " de $valor</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hi ha quantitats amb valor.</p>";
    }
} else {
    echo "<p>Posa la quantitat a la variable quantitat pel QueryString</p>";
}
?>
</body>
</html>
