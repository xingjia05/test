<?php
namespace designpattern\strategy;

class CashContext {
    private $cashSuper;

    public function __construct($cashSuper) {
        $this->cashSuper = $cashSuper;
    }

    public function getResult($money) {
        return $this->cashSuper->acceptCash($money);
    }
}
