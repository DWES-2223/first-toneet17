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
                if (($i == 1 && $j != 2) || ($i == 3 && $j != 2) || ($i == 2 && $j == 2)) {
                    echo "<td>".chr(64 + $i).$j."</td> "; 
                }else{
                    echo "<td></td> "; 
                }
                
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
