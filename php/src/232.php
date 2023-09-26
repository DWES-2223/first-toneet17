<!DOCTYPE html>
<html>
<head>
    <title>Contador de M y F</title>
</head>
<body>
    <h1>Contador de M y F</h1>
    <?php
    $genero = array();

    for ($i = 0; $i < 100; $i++) {
        $genero[] = rand(0, 1) ? 'M' : 'F'; 
    }

    $contador = array('M' => 0, 'F' => 0);

    foreach ($genero as $valor) {
        $contador[$valor]++;
    }
    echo "<p>Array: [" . implode(', ',$genero) . "]</p>";
    echo "<p>Número de 'M': " . $contador['M']."</p>";
    echo "<p>Número de 'F': " . $contador['F']."</p>";
    ?>
</body>
</html>
