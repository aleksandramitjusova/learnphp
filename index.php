<?php
$test = true;
$test = false;
$test = true && true;
$test = true || false;
$test = !false;
$test = 10 > 5;
$test = 10 < 5;
$test = 10 == 10;
$test = 10 != 5;
$test = 10 >= 10;
$test = 10 <= 5;
$test = 10 === 10;
$test = 10 !== 5;
$test = 10 === '10';
$test = 10 !== '10';
$test = true && false || (true && !true);
var_dump($test);