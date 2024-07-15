<?php 
    //Condições no PHP

    $nome1 = "Felipe";
    $nome2 = "Miguel";

    if($nome1 == $nome2){
        echo '<div style="width:300px;height:300px;background:green;display:flex;align-items:center;justify-content:center">Eles são iguais</div>';
    }else if($nome1 != $nome2){
        echo '<div style="width:300px;height:300px;background:red;display:flex;align-items:center;justify-content:center">Eles são diferentes</div>';
    }else{
        echo "false";
    }

?>