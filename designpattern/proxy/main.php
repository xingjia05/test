<?php
namespace designpattern\proxy;
require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$girl = new SchoolGirl('mm');
$proxy = new Proxy($girl);

$proxy->giveFollower();
$proxy->giveChocolate();
$proxy->giveDolls();
