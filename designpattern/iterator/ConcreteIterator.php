<?php
namespace designpattern\iterator;

class ConcreteIterator extends Iterator {

    private $aggregate = [];

    private $current = 0;

    public function __construct($aggregate) {
        $this->aggregate = $aggregate;
    }

    public function first() {
        return $this->aggregate[0];
    }

    public function next() {
        $this->current++;
        if ($this->aggregate->count() < $this->current) {
	    return null;
        }
	return $this->aggregate[$this->current];
    }

    public function isEnd() {
        if ($this->current >= $this->aggregate->count()) {
            return true;
	}
        return false;
    }

    public function currentItem() {
        return $this->aggregate[$this->current];
    } 

}
