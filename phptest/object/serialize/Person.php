<?php

namespace Phptest\Object\Serialize;

class Person {
    public $name;
    public $age;
    
    public function say($name, $age) {
        echo $name . 'is' . $age . 'year old';
    }
}

