<?php
header('Content-type: text/html; charset=gbk');

//echo "----sql注入use bindParam\n";
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "123456");
////$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//$pdo->query('SET NAMES gbk');
//$st = $pdo->prepare("SELECT * FROM test_pdo where name = :name");
//$name = '"a"' . ' or 1=1 \*';
//$name = 'a' . chr(0x27) . ' or 1=1 #';
//$st->bindParam('name', $name);
//$st->execute();
//$a = $st->fetchAll();
//print_r($a);
//echo "\n";
//die;
//
//$name = chr(0xbf) . chr(0x27) . " OR 1=1 #";
//print_r($name);
//echo "\n";


$nameHan = "张三";
$name = "zhangsan";

pri($nameHan);
$nameHan = iconv('utf8', 'GBK', $nameHan);
pri($nameHan);

$name = iconv('utf8', 'GBK', $name);
//pri($name);

function pri($name) {
    print_r($name);
    echo "\n";
    $lenth = strlen($name);
    print_r($lenth);
    echo "\n";
    for ($i=0; $i<$lenth; $i++) {
        echo $name[$i] . ' ';
    }
    echo "\n";
    for ($i=0; $i<$lenth; $i++) {
        echo ord($name[$i]) . ' ';
    }
    echo "\n";
    for ($i=0; $i<$lenth; $i++) {
        echo bin2hex($name[$i]) . ' ';
    }
    echo "\n";
    for ($i=0; $i<$lenth; $i++) {
        echo decbin(ord($name[$i])) . ' ';
    }
    echo "\n\n";
}