<?php 
    //Datas em PHP

    //ajustando fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    //Pegando a data e hora
    echo $data = date("d/m/Y H:i:s");

    echo "<br/>";

    echo $data = date("d/m/Y H:i:s", time() + (60*10));
    
?>