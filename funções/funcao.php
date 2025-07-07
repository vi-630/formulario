<?php
    $a = 2;
    $b = 3;
    $c = $a + $b;

function soma(){
    echo 'O valor da variável c é: '.$GLOBALS['c'];
}
echo 'A é igual a: ' .$a;
echo "<br>";
echo 'B é igual b: ' .$b;
echo "<br>";

soma();
?>