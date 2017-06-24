<?php

namespace designpattern\simplefactory;

class OperationPlus extends Operation {

    public $number1 = 10;

    public function getResult() {
        return $this->number1 + $this->number2;
    }

}
