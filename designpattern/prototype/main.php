<?php
namespace designpattern\prototype;

require_once "/Users/xjzhang/Documents/website/test/Autoloader.php";

$r = new Resume();
$r->name = 'zxj';
$r->age = 9;
$r->setWorkExperience('greenway', 'beijing');
$r1 = clone $r;
$r1->name = 'zxj1';
$r1->setWorkExperience('skyfield', 'nanjing');
print_r($r);
$r->show();
print_r($r1);
$r1->show();
