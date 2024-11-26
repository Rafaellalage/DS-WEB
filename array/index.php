<?php
   
    include_once('arrays.php');

    /*Exemplo de uso do is_array*/
   $variaveltexto = 'arthur';
    if(is_array($variaveltexto)){
        echo "é uma array <br><br>";
    }else{
        echo "não é uma array  <br> <br>";
    }
    
    /* Exemplo de uso do array_unshify()*/
    array_unshift($estado, "Rio Grande do sul");//Remove do inicio
    array_push($estado, "Paraná"); //Adiciona no fim
    
    foreach ($estado as $estadoLinha){
        echo 'Estado: '. $estadoLinha.'<br>';
    }
    echo '<br><br><br>';

    /* Exemplo de uso do array_shirt() e array_push()*/  
    $removido = array_shift($estado);
    echo $removido. '<br>';
    
    $removido = array_pop($estado); //Remove do final
    echo $removido;

    /* Exemplo de uso do <in_array></in_array*/
    if(in_array("São Paulo", $estado)){
        echo "Estado encontrado";
    }

    /*Exemplo de uso do array_key_exists()*/
    if(array_key_exists('SP', $estado)){
        echo "Chave encontrada";
    }
 ?>