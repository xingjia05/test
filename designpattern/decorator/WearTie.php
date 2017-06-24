<?php
namespace designpattern\decorator;

class WearTie extends Finery {
    public function show() {
        printf("weartie \n");
        parent::show();
    }
}
