<?php 

    //Usando switch
    
    $nome = "felipe";

    switch($nome){
        case 'Felipe':
            echo 'O nome é felipe'; 
            break;
        case 'Miguel':
            echo "O nome é Miguel";
            break;
        default:
            echo $nome;
            break;
    }
?>