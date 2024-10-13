<?php
    function minhoca($string) 
    {
        $n = mb_strlen($string);                                            //Conta o número de caracteres na string
        $caracteres = mb_str_split($string);                                //Divide a string em caracteres e armazena em um array
        $resultados = [];                                                   //Cria um array para armazenar as novas strings      
                                                                                
        for ($i = 0; $i < $n; $i++)
        {                   
            $caracteres[$i] = mb_strtoupper($caracteres[$i]);               //Transforma o caractere atual em maiúsculo
                                                                          
            $resultados[] = implode('', $caracteres);                       //Une os caracteres em uma nova string e adiciona ao array de resultados
            $caracteres[$i] = mb_strtolower($caracteres[$i]);               //Retorna o caractere atual para minusculo
        }
                                                                
        foreach($resultados as $resultado)                                  //Imprime todas as strings resultantes
        {                               
            echo $resultado . "<br>";
        }
    }
    $string = "crédito";
    minhoca($string);
?>
