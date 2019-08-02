<?php
include_once 'autoload.php';
spl_autoload_register('Loader::autoload');
//include_once '/Users/xjzhang/Documents/website/test/phptest/lock/App/LockSys.php';
//use Lock;
$lockSys = new \Lock\LockSys(\Lock\LockSys::LOCK_TYPE_DB);
die('ss');
$ret = $lockSys->getLock('sss', 10);
var_dump($ret);
print_r(date('H:i:s'));
sleep(5);
$lockSys->releaseLock('ss');
print_r(date('H:i:s'));
