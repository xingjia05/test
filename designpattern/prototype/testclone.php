<?php
class A {
    public $a;
    public $app;

    public function setApp($app) {
        $this->app = $app;
    }

    public function __clone() {
        $this->app = new App();
    }
}

class App {
    public $v;
}

$a = new A();
$a->a = 'asas';
$a->setApp(new App);
$a->app->v ='app_v';

$b = clone $a;
$b->a = '222';
$b->app->v = 'app_v_b';

print_r($a);
print_r($b);
