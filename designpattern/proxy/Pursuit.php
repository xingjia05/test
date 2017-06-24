<?php
namespace designpattern\proxy;

class Pursuit implements GiveGift {
    
    public $schoolGirl;
    
    public function __construct($schoolGirl) {
        $this->schoolGirl = $schoolGirl;
    }

    public function giveFollower() {
        printf("give %s followers\n", $this->schoolGirl->name);
    }

    public function giveDolls() {
        printf("give %s doll\n", $this->schoolGirl->name);
    }

    public function giveChocolate() {
        printf("give %s chocolate\n", $this->schoolGirl->name);
    }
}
