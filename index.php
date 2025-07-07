<?php
    //escreve na tela seja bem-vindo
    echo "<h1>Seja bem-vindo ao PHP</h1>";
    # escreve na tela Hello World
    echo "<p>Hello World</p>";
    /*
        escreve na
        tela
        Progremação Websd
        com PHP
    */
    echo "<h2>Programação Web</h2>";

    //testando comando de saída
    echo "Utilizando echo <br>";
    echo 'a <br>', "b";
    echo "<br>";
    print ('ab');
    echo "<br>";

    //utilizando var_dump
    echo "<br>Utilizando var_dump <br>";
    $a = array ("a", "b", "c");
    echo "<br>";
    var_dump ($a);

    //utilizando print_r
    echo "<br> Utilizando print_r <br>";
    $a = array ("a", "b", "c");
    echo "<br>";
    print_r($a);
?>