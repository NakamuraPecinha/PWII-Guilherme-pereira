<?php
    $x = "Hello world";
    $y = 'Hello world ';

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    $x = 12.4;

    var_dump($x);
    echo "<br>";

    $y = ['Guilherme','Nakamura'];

    var_dump($y); 
    echo "<br>";
    echo $y[1];
    echo "<br>";

    $meuObj = new stdClass();
    $meuObj -> nome = "Guilherme";
    $meuObj -> idade = 17;
    $meuJson = Json_encode($meuObj);
    echo $meuJson;
    echo "<br>";
    var_dump($meuJson);

?>     