<?php
 
function hello() {
    var_dump('Hello');
}
 
$hi = hello();
var_dump($hi);
hello();
hello();
 
function helloName($name = 'nameless') {
    var_dump("Hello, $name!");
}
 
helloName('sandra');
helloName('laura');

function helloNameAndAge($name = 'nameless', $age = 0) {
    var_dump("Hello, $name! You are $age years old.");
}

helloNameAndAge('sandra', 25);
helloNameAndAge('laura', 30);

helloName();

$test = function() {

};

var_dump($test);
   
   $numbers = [1, 2, 3, 4, 5];

  $squares = array_map(function($n) {
    return $n * $n;
       }, $numbers);
    var_dump($squares);

    function cube(int $a): int|string {
        if($a < 0) {
            return 'perforator eto kruto';
        } else {
            return $a * $a * $a;
        }
        var_dump('TOO MUCH ICE ON ME');
    }

    var_dump(cube(4));

    $answer = cube('asdasd');
    $text = "cube of 5 is $answer";
    echo $text;
