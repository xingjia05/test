<?php
$i = 1;
print_r($i);
print_r(add($i));
print_r($i);

function add(&$i) {
    $i++;
    return $i;
}

