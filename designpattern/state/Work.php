<?php
namespace designpattern\state;

class Work {
    public static $state;

    public $workFinished;
    public $time;

    public function __construct() {
        self::$state = new ForenoonState();
    }

    public function setState($stateObj) {
        self::$state = $stateObj;
    }

    public function writeProgram() {
        self::$state->writeProgram($this);
    }

}
