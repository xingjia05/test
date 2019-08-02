<?php

namespace designpattern\iterator;

abstract class Iterator {
    abstract function first();

    abstract function next();
    
    abstract function isEnd();

    abstract function currentItem();
}
