<?php

class box {
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public $hasBeenOpened = false;

    public function open() {
        $this->isOpen = true;
        $this->hasBeenOpened = true;
    }

    public function close() {
        $this->isOpen = false;
    }

    public function volume () {
        return $this->height * $this->width * $this->length;
    }
}


$box1 = new box();
$box1->width = 10;
$box1->height = 20;
$box1->length = 30;
$box1->open();
var_dump($box1);
var_dump($box1->volume());
var_dump($box1);