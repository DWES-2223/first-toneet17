<!DOCTYPE html>
<html>
<head>
    <title>Operaciones con Números Aleatorios</title>
</head>
<body>
    <h1>Operaciones con Números Aleatorios</h1>
    <?php
        $numeros = array();

        for ($i = 0; $i < 33; $i++) {
            $numeros[] = rand(0, 100);
        }

        $major = max($numeros);
        $menor = min($numeros);
        $mitjana = array_sum($numeros) / count($numeros);

        echo "<p>Array: [" . implode(', ',$numeros) . "]</p>";
        echo "<p>El major és: $major</p>";
        echo "<p>El menor és: $menor</p>";
        echo "<p>La mitjana és: $mitjana</p>"; 
    ?>
</body>
</html>
