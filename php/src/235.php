<?php
$persones = array(
    array('nom' => 'Alvaro', 'altura' => 184, 'email' => 'alvarete@gmail.com'),
    array('nom' => 'German', 'altura' => 182, 'email' => 'germanete@gmail.com'),
    array('nom' => 'Quique', 'altura' => 169, 'email' => 'kikete@gmail.com'),
    array('nom' => 'Hector', 'altura' => 177, 'email' => 'hectorete@gmail.com'),
    array('nom' => 'Nacho', 'altura' => 175, 'email' => 'profe@gmail.com')
);

echo '<table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Alçada</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>';

// Recorre el array y muestra los datos en la tabla
foreach ($persones as $persona) {
    echo '<tr>
            <td>' . $persona['nom'] . '</td>
            <td>' . $persona['altura'] . '</td>
            <td>' . $persona['email'] . '</td>
          </tr>';
}

echo '</tbody></table>';
?>
