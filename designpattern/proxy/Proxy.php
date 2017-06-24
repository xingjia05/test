<?php
namespace designpattern\proxy;

class Proxy  {
    public $gg;

    public function __construct($shoolGirl) {
        $this->gg = new Pursuit($shoolGirl);
    }

    public function giveFollower() {
        $this->gg->giveFollower();
    }

    public function giveDolls() {
        $this->gg->giveDolls();
    }

    public function giveChocolate() {
        $this->gg->giveChocolate();
    }
}
