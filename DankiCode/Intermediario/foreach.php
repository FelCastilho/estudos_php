<?php 
    //Looping foreach

    $arr = ["Felipe", "Miguel", "Gohan"];

    //vai percorrer cada indice e retornar o valor;

    foreach ($arr as $key => $value) {
        echo $key;
        echo " => ";
        echo $value;
        echo "<hr/>";
    }

    //retornando o número de valores de um array;
    
    $total = count($arr);

    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
        echo "<br/>";
    }
    
?>