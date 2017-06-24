<?php
namespace designpattern\strategy;

require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

const NORMAL = 'normal';
const REBATE = 'rebate';

$superCash = null;
switch ($argv[1]) {
    case NORMAL:
        $superCash = new CashContext(new CashNormal());
        break;
    case REBATE:
        $superCash = new CashContext(new CashRebate(0.8));
        break;
    default:
        break;
}
$ret = $superCash->getResult($argv[2]);
print_r($ret);
