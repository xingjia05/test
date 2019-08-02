<?php
class A {
    public function test(): array
    {
        return [1];
    }
}

$a = new A();
print_r($a->test());
