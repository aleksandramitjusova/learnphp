<?php

class Cat {
    use MakesSound;
}
class Box {

class Dog {
    use HasSmell, MakesSound;
}
    public function __construct(private $w, private $h, private $l) {
        var_dump('Box was created!');
    }

trait HasSmell {
    public $smell;
    public function sniff() {
        return 'Smells like ' . $this->smell;
    public function volume(){
        return $this->w * $this->h * $this->l;
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __get($name) {
        var_dump($name);
        return 'YOLO';
    }

    public function __invoke() {
        var_dump('Im a function');
    }
    
    public function __call($name, $args) {
        var_dump($name, $args);
    }
}

trait MakesSound {
    public $sound;
    public function noise() {
        return $this->sound;
    public function __toString() {
        return "Im a box with W: $this->w H: $this->h L: $this->l";
    }
}

    public function __destruct() {
        var_dump('Box was destroyed!');
    }
    
}

function lol(){
    $box4 = new Box(4, 4, 5);
}

lol();

$box1 = new Box(1,2,3);
$box1->color = 'hello';
$box1();
$box1->hello(1, 'aasda', 'azczxc');
var_dump($box1->lolollol);
$box1 = 1;
$box2 = new Box(4,5,6);
var_dump($box1, $box2);
$box3 = clone $box2;
echo $box1;