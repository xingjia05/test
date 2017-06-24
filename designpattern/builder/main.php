<?php
namespace designpattern\builder;
require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$d = new Director();
$ba = new BuilderConceretA();
$bb = new BuilderConceretB();

$d->create($ba);
$p = $ba->getResult();
$p->getResult();

$d->create($bb);
$p = $bb->getResult();
$p->getResult();
