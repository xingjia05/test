<?php
namespace designpattern/iterator;

class ConcreteAggregate extends Aggregate {

    private $list = [];

    public function createIterator() {
        return new ConcreteIterator($this);
    }

    public function count() {
        return count($list);
    }
    
    public function set($k, $v) {
        $this->list[$k] = $v;
    }

    public function get($k) {
        return $this->list[$k];
    }

}
