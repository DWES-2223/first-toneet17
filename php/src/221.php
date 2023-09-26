<!DOCTYPE html>
<html>
<head>
    <title>221.php</title>
</head>
<body>
<ul>
    <?php
    $total = 0;
    for ($i = 1; $i <= 10; $i += 1) {
        $total += $i;
        if ($i < 10){
            echo "$i+";
        }else{
            echo "$i";
        }

    }
    echo "=$total"
    ?>
</ul>
</body>
</html>
