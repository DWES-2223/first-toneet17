<?php

function esParell(int $num):bool{
    return $num % 2 ===0;
}

function arrayAleatori(int $tam, int $min, int $max): array {
    $resultat = [];
    
    for ($i = 0; $i < $tam; $i++) {
        $resultat[] = rand($min, $max);
    }
    
    return $resultat;
}

function countParells(array &$array): int {
    $comptador = 0;
    
    foreach ($array as $numero) {
        if ($numero % 2 === 0) {
            $comptador++;
        }
    }
    
    return $comptador;
}
function major() : int {
    $numeros = func_get_args(); 
    $major = $numeros[0]; 
    

    foreach ($numeros as $numero) {
        if ($numero > $major) {
            $major = $numero;
        }
    }

    return $major;
}


function concatenar(...$paraules) : string {
    return implode(' ', $paraules);
}


function digits(int $num): int {
    $num = abs($num); 
    return strlen((string)$num);
}

function digitsN(int $num, int $post): int {
    $numStr = (string)$num;
    
    if ($post < 1 || $post > strlen($numStr)) {
        return false; 
    }
    
    return (int)$numStr[$post - 1]; 
}


function llevaDarrere(int $num, int $cant): int {
    $numStr = (string)$num;
    
    if ($cant < 1 || $cant > strlen($numStr)) {
        return false; 
    }
    
    $nouNumStr = substr($numStr, 0, strlen($numStr) - $cant);
    return (int)$nouNumStr;
}


function llevaDavant(int $num, int $cant): int {
    $numStr = (string)$num;
    
    if ($cant < 1 || $cant > strlen($numStr)) {
        return false; 
    }
    
    $nouNumStr = substr($numStr, $cant);
    return (int)$nouNumStr;
}

function peseta2euros(float $quantitat, float $cotitzacio = 166): float {
    return $quantitat / $cotitzacio;
}

function euro2pesetes(float $quantitat, float $cotitzacio = 166): float {
    return $quantitat * $cotitzacio;
}

function fecha_inglesa($date){
    $fechaPartida = explode('.',$date);
    return $fechaPartida[2] . '/' . $fechaPartida[1] . '/' . $fechaPartida[0];
}

function vell($fechas){
    $llaveFechaMasAntigua = null;
    $fechaMasAntigua = null;

    foreach ($fechas as $llave => $fecha){
        $fechaConvertida = strtotime(fecha_inglesa($fecha));

        if($fechaConvertida < $fechaMasAntigua || $fechaMasAntigua === null){
            $llaveFechaMasAntigua = $llave;
            $fechaMasAntigua = $fechaConvertida;
        }
    }

    return $llaveFechaMasAntigua;
}

function laureado($valores){
    $conteoValores = array_count_values($valores);
    arsort($conteoValores);
    $valorMasFrecuente = reset($conteoValores);
    $valoresMasFrecuentes = array_keys($conteoValores, $valorMasFrecuente);
    return $valoresMasFrecuentes[0];
}

function any($fecha){
    return explode('.', $fecha)[2];
}

function jove($nacimientos, $fechas){
    $atletaMasJoven = null;
    $diferenciaEdadMasPequena = null;

    foreach ($nacimientos as $indice => $natalicio){
        $diferenciaEdad = any($fechas[$indice]) - intval($natalicio);

        if ($diferenciaEdad < $diferenciaEdadMasPequena || $diferenciaEdadMasPequena === null){
            $atletaMasJoven = $indice;
            $diferenciaEdadMasPequena = $diferenciaEdad;
        }
    }

    return [$atletaMasJoven, $diferenciaEdadMasPequena];
}

function array_column_ext($array, $columnaClave, $columnaIndice = null) {
    $resultado = [];

    foreach ($array as $subarray => $valor) {
        $valorColumna = ($columnaClave === null) ? $valor : $array[$subarray][$columnaClave];

        if ($columnaIndice === null) {
            $resultado[] = $valorColumna;
        } elseif ($columnaIndice == -1 || array_key_exists($columnaIndice, $valor)) {
            $resultado[($columnaIndice == -1) ? $subarray : $array[$subarray][$columnaIndice]] = $valorColumna;
        }
    }

    return $resultado;
}

?>

