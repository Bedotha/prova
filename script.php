<?php

    $ano = $_GET["ano"];
    $f = fopen('violencia-domestica-df.csv', 'r');
    $i = 0;
    $d = fgetcsv($f);
    foreach($d as $d) {
        if($d != $ano)
            $i++;
        else
            break;
    }
    $d = fgetcsv($f);
    while($d) {
        echo " A localidade é: $d[0] e sua ocorrência é: $d[$i] <br>";
        $d = fgetcsv($f);
    }
    fclose($f);

?>