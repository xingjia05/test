<?php
namespace designpattern\simplefactory;

class OperationSub extends Operation {
    public function getResult() {
        return $this->$number1 - $this->$number2;
    }
}
