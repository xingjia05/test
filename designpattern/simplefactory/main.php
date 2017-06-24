<?php
namespace designpattern\simplefactory;
require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$opt = OperationFactory::getOperation('+');
$opt->number1 = 1;
$opt->number2 = 2;
echo $opt->getResult();
