<?php
namespace designpattern\decorator;

class BigTrouser extends Finery {
    public function show() {
        printf("big trouser \n");
        parent::show();
    }
}
