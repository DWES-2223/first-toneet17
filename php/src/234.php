<?php
$persones = array(
    "Quique" => 178,
    "German" => 163,
    "Hector" => 193,
    "Tonet" => 173,
    "Boki" => 184,
);

$altura_promedio = array_sum($persones) / count($persones);

echo '<table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Alçada</th>
            </tr>
        </thead>
        <tbody>';

foreach ($persones as $nom => $alçada) {
    echo '<tr>
            <td>' . $nom . '</td>
            <td>' . $alçada . '</td>
          </tr>';
}

echo '<tr>
        <td>Altura promedio</td>
        <td>' . $altura_promedio . '</td>
      </tr>';

echo '</tbody></table>';
?>
