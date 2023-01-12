<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
    echo count($fruits);
    echo "<br>";
    echo $fruits[1];
//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " .$age["Ben"] . " years old.<br><br>";

foreach ($age as $x => $y) {
    echo "<br>Key=" .$x . ", Value=" .$y ;
}

echo "<br><br>";
//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
    sort($colors);
    print_r($colors);
    echo "<br><br>";
    rsort($colors);
    print_r($colors);

echo "<br><br>";
// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"50", "Joe"=>"43");
    asort($age);
    print_r($age);






