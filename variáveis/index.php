<?php 
    //Nomes de variáveis
    $nome;
    $professor_1;
    $last_name;
    $lastName;

    /* Não deve se usar: 
    $1nome;
    $last name;
    $#nome;
    */

    //Testando variáveis
    $a = 1;
    $b = 2;
    $c = $a + $b;

    echo "O valor da variável a é: " . $a;
    echo "<br>";
    echo "O valor da variável b é: " . $b;
    echo "<br>";
    echo "O valor da variável c é: " . $c;
    echo '<br>';
    echo '<br>';


    $a = 'hello';
    $$a = 'world';
    echo $a, ${$a};
    echo '<br>';
?>