<?php
namespace designpattern\builder;

class BuilderConceretA extends Builder {

    public function buildStepOne() {
        $this->product->add('A-1');
    }

    public function buildStepTwo() {
        $this->product->add('A-2');
    }
}
