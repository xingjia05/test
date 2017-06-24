<?php
namespace designpattern\builder;

class BuilderConceretB extends Builder {
    
    public function buildStepOne() {
        $this->product->add('B-1');
    }

    public function buildStepTwo() {
        $this->product->add('B-2');
    }
}
