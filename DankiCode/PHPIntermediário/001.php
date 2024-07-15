<?php 
    //For each (Percorrendo Arrays)

    $arr = array("Felipe", "Miguel", "Alex");
    
    foreach($arr as $key => $value) {
        //echo $key;
        //echo $value;
    }

    //Percorrendo o array utilizando uma função do PHP
    $total = count($arr);

    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
    }

?>