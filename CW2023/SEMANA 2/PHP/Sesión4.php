<?php

//comentario
    /*Hola
    microtime
    nbf
    */ 
    //CONSTANTES
    /* const y define() las constantes en mayusculas*/
    const CONSTANTE = "Hola soy una CONSTANTE";
    //echo manda a imprimir algo en la pantalla
    /* al poner el nombre de la constante la mandas 
    a llamar el valor de la constente y se imprime*/
    
    define("HOLA2", 56);
    //echo HOLA2;
    //para declarar variables se pone $
    //variables enteras
    $var1 = 1;
    $var2 = 50;

    //variables float
    $flotantes = 5.5;
    $PI = 13.1416;

    //nulo
    $sereUnNulo = NULL;

    echo "<br>";
    echo $var2;
    /* es importante que se pongan comillas para que lo
    identifique como elemento de html y lo pueda ejecutar*/
    echo "<br>";
    echo $PI;
    echo "<br>";
    echo $sereUnNulo;
    echo "<br>";

    //Bool
    $soy_un_bool = false;
    echo $soy_un_bool;
    
    //print tambien imprime pero solo permite un argumento
    print "Soy un print";
    echo "<br>";
    //printf
    //se uso %s para indicar que es un valor de cadena 
    printf("A mi me gusta %s", $var2);
    echo "<br>";
    
    //muestra el tipo de dato y el valor de una variable
    var_dump($var1);
?> 

