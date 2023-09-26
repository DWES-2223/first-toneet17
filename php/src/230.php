<!DOCTYPE html>
<html>
<head>
    <title>230.php</title>
</head>
<body>
    <ul>
        <?php
        $numeros = array();

        for ($i = 0; $i < 50; $i++) {
            $numeros[] = rand(0, 99);
        }

        foreach ($numeros as $numero) {
            echo "<li>$numero</li>";
        }
        ?>
    </ul>
</body>
</html>
