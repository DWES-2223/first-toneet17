<!DOCTYPE html>
<html lang="es">

<?php
$Nom = "Antoni";
$Cognom1 = "Medina";
$Cognom2 = "Sanjuan";
$Email = "antonimedinadam@email.com";
$Natalici = 2003;
$Telefon = "684352642";
?>


<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <tr>
        <td>Nom</td>
        <td><?=$Nom?></td>
    </tr>
    <tr>
        <td>Cognoms</td>
        <td><?=$Cognom1 ,' ', $Cognom2?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?=$Email?></td>
    </tr>
    <tr>
        <td>Natalici</td>
        <td><?=$Natalici?></td>
    </tr>
    <tr>
        <td>Telèfon</td>
        <td><?=$Telefon?></td>
    </tr>

</table>
</body>
</html>