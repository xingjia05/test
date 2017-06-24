<?php
namespace designpattern\prototype;

class WorkExperience {
    private $company;
    private $address;

    public function  __set($name, $value) {
        $this->$name = $value;
    }

    public function  __get($name) {
        return $this->$name;
    }
}
