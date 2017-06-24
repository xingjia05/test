<?php
namespace designpattern\strategy;

class CashNormal extends CashSuper {
    public function acceptCash($money) {
        return $money;
    } 
}
