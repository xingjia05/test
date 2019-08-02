<?php
//header('Content-type: text/html; charset=gbk');
/*
 * pdo模版功能测试
 * 如果需要以不同参数多次重复相同的查询，那么该过程将大大降低应用程序的速度
 */



echo "sql注入\n";
$db = mysqli_init();
$db->real_connect('127.0.0.1', 'root', '123456', 'test');
//$name = chr(0xbf) . chr(0x27) . ' OR name = name or ' . chr(0x27);
$name = '"a" or 1=1';
$sql = "SELECT * FROM test_pdo WHERE name = {$name}";
print_r($sql);
$result = $db->query($sql);
var_dump($result);die;
echo "\n";

