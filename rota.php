<?php

function naves($numeroNave, $distancia){
    $url = "https://swapi.dev/api/starships/".$numeroNave."/";
    $json = file_get_contents($url);
    $jo = json_decode($json);
    $contParadas=($distancia/$jo->MGLT);
    return "Nome Nave: ".$jo->name." -- Quantidade de paradas: ".round($contParadas)."\n";
}

if($_GET['fnum']==''){
    print "Você deve passar o valor da nave.";
}else{
    print "<h1>".naves($_GET['fnum'],100)."</h1>";
}


//print "<h1>".naves(10,100)."</h1>";

//print $_GET['fnum'];




?>