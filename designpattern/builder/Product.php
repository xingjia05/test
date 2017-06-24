<?php
namespace designpattern\builder;

class Product{
    public $parts=array();

    public function add($part) {
        $this->parts[] = $part;
    }

    public function getResult() {
        foreach ($this->parts as $k=>$v) {
            printf("part %s is %s\n", $k, $v);
        }
    }
}
