<?php
namespace designpattern\decorator;

class Person{
    private $name = '';

    public function __consruct($name) {
        $this->name = $name;
    }
    
    public function show() {
        printf("this is %s:\n", $this->name);
    }
}
