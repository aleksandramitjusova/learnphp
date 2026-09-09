<?php

class cat {
    use makesSound;
}

class dog {
use hasSmell, makesSound;
}

trait hasSmell {
    public $smell;
    public function sniff() {
        return 'smells like' . $this->smell;
    }
}

trait makesSound {
    public $sound;
    public function noise() {
        return $this->sound;
    }
}