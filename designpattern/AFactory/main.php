<?php
namespace designpattern\afactory;

require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$factory = new SqlServerFactory();

$user = $factory->createUser();
$department = $factory->createDepartment();

$user->addUser();
$user->getUser();

$department->addDepartment();
$department->getDepartment();
