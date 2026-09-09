<?php

class box {
    public int $width;
    private int $height;
    protected int $length;
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

    public function test() {
        var_dump($this->height);
    }

    public function setHeight($height) {
        if ($height < 0) {
            $this->height = $height;
        }
    }

    public function getHeight() {
        return $this->height;
    }
}


class Metalbox extends box {
    public $weight;

    public function mass() {
        return $this->volume() * $this->weight;
    }
    public function test() {
        var_dump($this->height);
    }
}

$metal1 = new Metalbox();
$metal1->height = 1;
var_dump($metal1);
 