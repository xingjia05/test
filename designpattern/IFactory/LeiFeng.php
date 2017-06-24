<?php
namespace designpattern\IFactory;

class LeiFeng {

    public $name;

    public function buyRice() {
        printf("%s buy rice \n", $this->name);
    }

    public function wash() {
        printf("%s wash \n", $this->name);
    }

    public function Sweep() {
        printf("%s sweep \n", $this->name);
    }
}
