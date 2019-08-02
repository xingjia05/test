<?php
class person {
    public $name = 'qq';
    
    public function __tostring() {
        return 'name is' . $this->name . "\n";
    }
}

$p = new person();
echo $p;

class A {
    protected $aa = '1';
    private $bb = '2';

    public function __set($name, $value) {
        echo '__set' . $name . '=' . $value . "\n";
        $this->$name = $value;
    }
}

$atest = new A();
$atest->aa = 'aa';
$atest->bb = 'bb';
echo $atest->aa . "\n";
