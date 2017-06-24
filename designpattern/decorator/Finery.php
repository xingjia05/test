<?php
namespace designpattern\decorator;

class Finery extends Person {
    protected $compnent;
    
    public function decorator($compnent) {
        $this->compnent = $compnent;
    }
    
    public function show() {
        print_r($this->compnent);
        if (!empty($this->compnent)) {
            $this->compnent->show();
        }
    }
}
