<?php 
    $minhaString = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda recusandae, reprehenderit sint tenetur, rerum asperiores perferendis reiciendis animi maiores, vitae omnis tempore quidem expedita iure! Dignissimos quia numquam veniam sint?";
    
    //Recortando uma string
    echo substr($minhaString, 0, 20);

    echo '<br/>';

    //Recortando com base no espaço e retornando array
    $nome = 'Felipe Coutinho Castilho';
    $nome =  explode(' ', $nome);

    print_r($nome);

    echo '<br/>';

    //Vai juntar os itens com o que está dentro dos parenteses
    echo implode(' - ', $nome);

    echo '<br/>';

    //Removendo as tags HTML
    $conteudo = '<h1>Felipe<h1/>';

    echo strip_tags($conteudo);

    //Mostrando códigos html na página
    echo htmlentities('<h1></h1>')

?>