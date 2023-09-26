<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>209.php</title>
</head>
<body>
<?php

$hora = isset($_GET['hora']) ? (int)$_GET['hora'] : null;
$minut = isset($_GET['minut']) ? (int)$_GET['minut'] : null;
$segon = isset($_GET['segon']) ? (int)$_GET['segon'] : null;

if ($hora !== null && $minut !== null && $segon !== null) {

    $segon++;

    if ($segon >= 60) {
        $segon = 0;
        $minut++;

        if ($minut >= 60) {
            $minut = 0;
            $hora++;

            if ($hora >= 24) {
                $hora = 0;
            }
        }
    }


    $horaFormateada = str_pad($hora, 1, '0', STR_PAD_LEFT);
    $minutFormateado = str_pad($minut, 1, '0', STR_PAD_LEFT);
    $segonFormateado = str_pad($segon, 1, '0', STR_PAD_LEFT);

    echo "$horaFormateada:$minutFormateado:$segonFormateado";
} else {
    echo "<p>Posa les variables hora, minut i segon pel QueryString</p>";
}
?>
</body>
</html>
