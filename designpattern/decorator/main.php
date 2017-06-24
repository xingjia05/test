<?php
namespace designpattern\decorator;
require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$person = new Person('zxj');
$bigtrouser = new BigTrouser();
$tshirt = new TShirts();
$waertie = new WearTie();

$bigtrouser->decorator($person);
$tshirt->decorator($bigtrouser);
$waertie->decorator($tshirt);
$waertie->show();
