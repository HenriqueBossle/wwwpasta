<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $var1 = 2;
       $var2 = 2;
       $soma = $var1 + $var2;
       echo "A soma dos numeros é: {$soma} <br>";
       
       $subtracao = $var1 - $var2;
       echo "A subtração dos numeros é: {$subtracao} <br>";

       $multiplicacao = $var1 * $var2;

       echo "A multiplicação dos números é: {$multiplicacao} <br>";

       $divisao = $var1 / $var2;

       echo "A divisão dos números é: {$divisao} <br>";

       echo "Iniciando a contagem";
       for ($i=1; $i <= 10; $i++) { 
           echo " <br> Número {$i}";
       }
       echo "<br> fim <br>";


       echo "Lista de frutas";
       $arrayFrutas = ["Banana", "Maça", "Melão"];

       foreach ($arrayFrutas as $chave => $valor) {
           echo "{$chave}: {$valor}";
       }
 

       $i = 0;
       $sair = false;
       while ($sair === false) {
         $i ++;
         if($i == 1000){
            $sair = true;
         } 
       }
    ?>
    Olá mundo

</body>
</html>