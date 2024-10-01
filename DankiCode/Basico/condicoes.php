<?php 
    
    $n1 = "Gohan";
    $n2 = "Felipe";
    $n3 = "Miguel";

    if($n1 == $n2){
        echo '<div style="width:300px;height:300px;background:red;"></div>';
    }else if($n1 == $n3){
        echo '<div style="width:300px;height:300px;background:blue;"></div>';
    }else{
        echo '<div style="width:300px;height:300px;background:green;"></div>';
    }

?>