<?php 

    function foiMordido($num){         

            $resto = $num % 2;

            if ($resto == 0){
                return true;
            }else{
                return false;
            }
       
    }
    

   // Um número par qualquer
   $numero = 10;

   echo "<h3> Considerando a entrada de um número par = 10</h3>";

   for ($i=1; $i<=$numero;$i++){

       $resposta = foiMordido($i);

       if($resposta==true){
        echo "<p>Pedrinho foi morido!";
       }else{
        echo "<p>Pedrinho NÃO foi morido!";
       }
   }