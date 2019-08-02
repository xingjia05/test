<?php
namespace designpattern\iterator;
require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$data = [
    1,
    [1,2,4,'d'],
    '22222'
];
$iterator = new ConcreteIterator($data);

while (!$iterator->isEnd()) {
    print_r($iterator->currentItem());
    $iterator = $iterator->next();
}

