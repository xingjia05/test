<?php
namespace designpattern\decorator;

class TShirts extends Finery {
    public function show() {
        printf("big TShirt \n");
        parent::show();
    }
}
