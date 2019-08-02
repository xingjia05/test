<?php
header('Content-type: text/html; charset=gbk');
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=gbk","root","123456");
////$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
////$pdo->query('SET NAMES utf8');
//$name = iconv('utf8','gbk','����');
//$name = chr(0xbf) . chr(0x27) . " OR 1=1 /*";
//print_r($name);
//$st = $pdo->prepare("SELECT * FROM test_gbk where name = '$name'");
////$st = $pdo->prepare("SELECT * FROM test_gbk where name = :name");
////$st->bindParam('name', $name);
//$st->execute();
//
//$a = $st->fetchAll();
//print_r($st);
////print_r($st->errorInfo());
////print_r($st->errorCode());
//var_dump($a);die;


$mysql = array();
$db = mysqli_init();
$db->real_connect('127.0.0.1', 'root', '123456', 'test');
/* SQLע��ʾ�� */
//$name = chr(0xbf) . chr(0x27) . ' OR name = name /*';
$name = " '张三' or 1=1";
//print_r($name);
//$name = iconv('utf8', 'GBK', $name);
//$name = addslashes($name);
//$name = mysqli_real_escape_string($db, $name);
//print_r($name);

$sql = "SELECT * FROM test_gbk where name = {$name}";
print_r($sql);
$ret = $db->query($sql);
var_dump($ret);
$result = $ret->fetch_fields();
var_dump($result);
die;


//header('Content-type: text/html; charset=gbk');
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=gbk","root","123456");
////$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
////$pdo->query('SET NAMES utf8');
//$name = iconv('utf8','gbk','张三');
//$name = chr(0xbf) . chr(0x27) . " OR 1=1 /*";
//print_r($name);
//$st = $pdo->prepare("SELECT * FROM test_gbk where name = '$name'");
////$st = $pdo->prepare("SELECT * FROM test_gbk where name = :name");
////$st->bindParam('name', $name);
//$st->execute();
//
//$a = $st->fetchAll();
//print_r($st);
////print_r($st->errorInfo());
////print_r($st->errorCode());
//var_dump($a);die;


//$mysql = array();
//$db = mysqli_init();
//$db->real_connect('127.0.0.1', 'root', '123456', 'test');
///* SQL注入示例 */
//$name = chr(0xbf) . chr(0x27) . ' OR name = name /*';
//print_r($name);die;
//$name = addslashes($name);
//print_r($name);
////$name = iconv('utf8','gbk', $name);
//$sql = "SELECT * FROM test_gbk where name = '{$name}'";
//print_r($sql);
//$result = $db->query($sql);
//var_dump($result);die;

function convert($size) {
    $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
    return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
}