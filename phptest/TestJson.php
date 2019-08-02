<?php
$a = [
    0 => '1288',
    2 => '1289',
    3 => '1230'
];
echo json_encode($a, JSON_FORCE_OBJECT);

$b = [
    0 => '1288',
    1 => '1231',
    2 => '1289',
    3 => '1230'
];

echo json_encode($b, JSON_FORCE_OBJECT);
