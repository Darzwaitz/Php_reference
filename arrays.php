<?php

    // Arrays
    // - Indexed
    // - Associative
    // - Multi-dimensional


    //Indexed Arrays ----------------

    $people = array('Kevin', 'Jeremy', 'Sarah');
    // echo $people[1]; //Jeremy

    $ids = array(23, 55, 12);
    // echo $ids[2]; //12

    //use brackets without using the array keyword
    $cars = ['Honda', 'Toyota', 'Ford'];
    // echo $cars[1];//Toyota
    //add to end of array with empty brackets 
    $cars[] = 'BMW'; //['Honda', 'Toyota', 'Ford', 'BMW']
    // echo count($cars); //4

    //print entire array
    // print_r($cars); //Array ( [0] => Honda [1] => Toyota [2] => Ford [3] => BMW ) 

    //show data type too
    // var_dump($cars); //array(4) { [0]=> string(5) "Honda" [1]=> string(6) "Toyota" [2]=> string(4) "Ford" [3]=> string(3) "BMW" }


    //Associative Arrays ----------------
    //assign key and value
    $people = array('Darz' => 38, 'Kurt' => 27, 'Bill' => 34);
    // echo $people['Darz']; //38

    $ids = [22 => 'Dennis', 50 => 'Terrence', 'Alan' => 73];
    // echo $ids[50]; //Terrence

    $people['Jill'] = 42;
    // echo $people['Jill']; //42

    // print_r($people); //Array ( [Darz] => 38 [Kurt] => 27 [Bill] => 34 [Jill] => 42 ) 
    ?>

    <!-- <br><br> -->
    
    <?php
    // var_dump($people); //array(4) { ["Darz"]=> int(38) ["Kurt"]=> int(27) ["Bill"]=> int(34) ["Jill"]=> int(42) } 


    //Multi-Dimensional Arrays ----------------
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
    );

    // echo $cars[1][0]; //Toyota
    echo $cars[1][2]; //20
