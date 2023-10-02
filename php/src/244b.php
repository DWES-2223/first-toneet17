<!DOCTYPE html>
<html lang="en">
<?php
    include_once('functions.php');
?>
<head>
    <meta charset="UTF-8">
    <title>244b.php</title>
</head>
<body>
<?php
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo '<table><thead><tr><th>Producto</th><th>Precio €</th><th>Precio Pesetas</th></tr></thead><tbody>';
            $total = 0;
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'nom') !== false) {
                    echo '<tr><td>'.$value.'</td>';
                }
                if (strpos($key, 'preu') !== false && is_numeric($value)) {
                    echo '<td>'.$value.'</td><td>'.euro2pesetes($value).'</td></tr>';
                    $total += $value;
                }
            }
            echo '<tr><td>Total</td><td>'.$total.'</td><td>'.euro2pesetes($total).'</td></tr>';
            echo '</tbody></table>';
    }
?>
</body>
</html>