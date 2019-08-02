<?php

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
//    declare(ticks=1);
    print($a);
}

declare(ticks=1){
    $b = 2;
    $b = 2;
}

