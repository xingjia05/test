<?php
namespace designpattern\prototype;

abstract class Prototype {

    private $id = 0;
    private $name;
    private $age;
    private $workExperience;

    public function __clonew() {
        $this->cloneObj();
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    abstract public function cloneObj();
}
