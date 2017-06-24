<?php
namespace Test;

class TestAutoLoad {
    static public function test($name) {
        print '[['. $name .']]';
    }
}

print_r(__NAMESPACE__);die;

spl_autoload_register(__NAMESPACE__ .'\Foo::test'); // 自 PHP 5.3.0 起

new InexistentClass;
