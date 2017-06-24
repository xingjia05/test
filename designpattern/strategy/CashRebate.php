<?php
namespace designpattern\strategy;

class CashRebate extends CashSuper {

    private $rebate = 0;

    public function __construct($rebate) {
        $this->rebate = $rebate;
    }

    public function acceptCash($money) {
        return $money * $this->rebate;
    }
}
