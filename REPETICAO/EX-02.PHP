<?php
//Variável linha com o valor 10 atribuído a ela
$linha = 0;

//Enquanto a linha for menor que 10 ele escreve oi e pula uma linha
while ($linha < 10) {
        echo "Oi<br>";
        //Incrementa a variável linha para que não gere um loop infinito
        $linha++;
}
