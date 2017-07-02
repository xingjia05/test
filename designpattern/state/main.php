<?php
namespace designpattern\state;

require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$w = new Work();
$w->time = 10;
$w->writeProgram();
$w->time = 12;
$w->writeProgram();
$w->time = 13;
$w->writeProgram();
$w->time = 15;
$w->writeProgram();
$w->workFinished = true;
$w->time = 18;
$w->writeProgram();
