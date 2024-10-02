<?php 

    for($count = 0; $count <= 10; $count++){
        if($count <= 3){
            echo '<div style="width: 300px; height: 300px; background:blue"; display:flex; align-items: center; justify-content: center>'.$count.'</div>';
            echo "<br/>";
        }else if($count == 7){
            echo '<div style="width: 300px; height: 300px; background:purple"; display:flex; align-items: center; justify-content: center>'.$count.'</div>';
            echo "<br/>";
        }else if($count == 8){
            echo '<div style="width: 300px; height: 300px; background:orange"; display:flex; align-items: center; justify-content: center>'.$count.'</div>';
            echo "<br/>";
        }else{
            echo '<div style="width: 300px; height: 300px; background:green"; display:flex; align-items: center; justify-content: center>'.$count.'</div>';
            echo "<br/>";
        }
    }

?>

