<?php
class A {
    public $a = 0;

}

class B {
    public $objA;
    public function __construct() {
        $this->objA = new A();
    }

    public $b = 1;

    public function myClone() {
        $objB = new B();
        $objB->objA = clone $this->objA;
        $objB->b = $this->b;
        return $objB;
    }
}

$objB = new B();
$objC = $objB;
$objC->b = 'bb';
$objC->objA->a='aabb';
$objD = $objB->myClone();
$objD->b = 'CC';
$objD->objA->a='aadd';
print_r($objB);
print_r($objC);
print_r($objD);
die;
