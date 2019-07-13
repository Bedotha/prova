<?php
    $f = fopen("violencia-domestica-df.csv", "r");
    $local = $_POST["local"];
    $d = fgetcsv($f);
    $j = 0;
    $soma = 0;
    while($d){
        if($local==$d[0]){
            for($i=1;$i<=6;$i++){
                $soma= $soma + $d[$i];
            }
            foreach($d as $j){
                echo " $j";
            }
            echo "O somatório de casos nesse local infelizmente é $soma";
        }
        $d = fgetcsv($f);
    }
    fclose($f);
?>

