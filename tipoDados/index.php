<?php
    //Testando tipo booleano
    $mostraMensagem = TRUE;

    if($mostraMensagem){
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    //Testando tipo inteiro

    //numero decimal
    $a = 1234;

    //numero negativo
    $b = -123;

    //numero octal(equivalente a 83 em decimal)
    $c = 0123;

    //numero  hexadecimal(equivalente a 26 em decimal)
    $d = 0x1A;

    echo "<br>";
    echo "<br>";
    echo 'a = ' .$a. '<br>';
    echo 'b = ' .$b. '<br>';
    echo 'c = ' .$c. '<br>';
    echo 'd = ' .$d. '<br>' . '<br>';

    //Testando ponto flutuante 
    $a = 1.234; //float ou double
    $b = 1.2e5; //notação científica
    echo 'a = ' .$a. '<br>';
    echo 'b = ' .$b. '<br>';

    //Testando arrays
    echo '<br>Nomes com P<br>';
    $nomesComP = array('Paulo', 'Pedro', 'Pricila');
    echo $nomesComP[0];

    echo '<br><br>Nomes com A<br>';
    $nomesComA = array('Primeiro' => 'Amanda', 'Segundo' => 'Ana');
    echo $nomesComA['Primeiro'];
    echo "<br>";
    echo $nomesComA['Segundo'];

    //Testando tipo Objeto
?>