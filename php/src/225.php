<!DOCTYPE html>
<html>

<?php
    extract($_POST);
?>
<head>
    <title>225.php</title>
</head>
<body>
<?php
    if (isset($files,$columnes)) {
        echo "<table>";

        for ($i = 1; $i <= $files; $i++) {
            echo "<tr> ";
            for ($j = 1; $j <= $columnes; $j++) {
                echo "<td>".chr(64 + $i).$j."</td> "; 
            }
            echo "</tr> ";
        }

        echo "</table>";
    }
    else {
            echo "Posa el valor de les files i les columnes en el QueryString";
        }

?>
</body>
</html>
