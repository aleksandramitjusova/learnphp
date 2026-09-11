<?php

class Box {
    public static $count = 0;
    public function __construct(private $w, private $h, private $l) {
        self::$count++;
// library

class Job {
    public function task(Logger $logger) {
        for($i=0;$i<10;$i++){
            //some work is done (video proccessing or what ever)
            $logger->log("Task $i was done!");
        }
    }
}

    public function volume(){
        return $this->w * $this->h * $this->l;
class ConsoleLogger implements Logger {
    public function log($message) {
        echo "$message\n";
    }
}

class NothingLogger implements Logger {
    public function log($message) {

    public static function me() {
        var_dump(self::class);
        var_dump(static::class);
        
    }
}

class MetalBox extends Box {
interface Logger {
    public function log($message);
}


// user code

class FileLogger implements Logger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

Box::$count = 1;
Box::$count = 2;
Box::me();
MetalBox::me();
var_dump(Box::$count, Box::$count);
$job = new Job();
$logger = new FileLogger();
$job->task($logger);

