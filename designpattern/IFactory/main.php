<?php
namespace designpattern\IFactory;

require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$student = new StudentFactory();
$student->createLeiFeng()->buyRice();
