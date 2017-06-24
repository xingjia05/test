<?php
namespace designpattern\builder;

abstract class Builder {

    public $product;

    public function __construct() {
        $this->product = new Product();
    }

    abstract public function buildStepOne();

    abstract public function buildStepTwo();

    public function getResult() {
        return $this->product;
    }
}
