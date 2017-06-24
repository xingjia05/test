<?php
namespace designpattern\facade;

class FacadeFund {
    public $stock1;
    public $stock2;
    public $stock3;
    public $nationalDebt;
    public $realty;

    public function __construct() {
        $this->stock1 = new Stock1();
        $this->nationalDebt = new NationalDebt();
        $this->realty = new Realty();
    }

    public function buyStock() {
        $this->stock1->buy();
    }

    public function buyOther() {
        $this->nationalDebt->buy();
        $this->realty->buy();
    }
}
