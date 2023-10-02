<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>272.php</title>
</head>
<?php
    include ('atletes.php');
    include ('functions.php');
    global $records;
?>
<body>
<?php

$edat = jove(array_column_ext($records,'natalici',-1),array_column_ext($records,'data',-1));

foreach ($records as $record => $datos){
    if($record == $edat[0]){
        $nom = $records[$record]['atleta'];
    }
}
?>
<p>Record més antic:  <?= vell(array_column_ext($records,'data',-1)); ?></p>
<p>Club amb més títols: <?= laureado(array_column_ext($records,'club',-1)) ?></p>
<p>Persona amb més records: <?= laureado(array_column_ext($records,'atleta',-1)) ?> </p>
<p>Ciutat més propicia: <?= laureado(array_column_ext($records,'lloc',-1)) ?></p>
<p>Mes jove en aconsegir el record: <?= $nom?> - <?= $edat[1]?> anys</p>
<?php
include ('270a.php');
?>
</body>
</html>