<?php 

$danios = array("golpe" => 10, "patada" => 20, "espadazo" => 50);

function calcularDanio($vida, $ataque, $pocion){
    if($vida < 50 && $pocion == 2){
        $danio = $danios[$ataque] * 2;
    }
    else if($ataque = "golpe" && $pocion == 0){
        $danio = $danios[$ataque] * 3;
    }
    else if($ataque = "patada" && pocion == 1){
        $danio = $danios[$ataque] * 3;
    }
    else{
        $danio = $danios[$ataque];
    }
    return $danio;
}

function calcularVida($vida, $ataque, $pocion){
    $danio = calcularDanio($vida, $ataque, $pocion);
    $vida -= $danio;
    return $vida;
}

?>