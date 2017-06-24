<?php
$inputArr = array(
    'dfdddf',
    1,
    "sdsd",
    'dfdP',
    "I"
);
//$ret = preg_grep("/df/", $inputArr);
$subject = 'Is is is the cost of of gasoline going up up is is';
$r = preg_match_all('/\b([a-z]+) \1\b/i', $subject, $ret);
print_r($ret);
print_r($r);

