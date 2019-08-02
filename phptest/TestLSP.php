<?php
class A {
    public function fun($q) {
        echo '111';
    }
}

class B extends A {
    public function fun(int $p) {
        echo '2222';
    }
}

$a = new A();
$a->fun(1);

$b = new B();
$b->fun(2);
