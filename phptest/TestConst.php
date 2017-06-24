<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class A {
    const a = '111';
    public $b = '111';
    public function getValue() {
        echo self::a;
    }
    public function getValueb() {
        echo self::a;
    }
    
}

class B extends A {
    const a = '22222';
    public $b = '33333';
//    public function getValue() {
//        echo self::a;
//    }
}

$b = new B();
$b->getValue();

