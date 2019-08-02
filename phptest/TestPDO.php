<?php

/*
 * pdo模版功能测试
 * 如果需要以不同参数多次重复相同的查询，那么该过程将大大降低应用程序的速度
 */

//echo "bindParam \n";
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "123456");
////$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//$pdo->query('SET NAMES utf8');
//$st = $pdo->prepare("SELECT * FROM test_pdo where name = :name AND age = :age");
//$data = array('name' => 'a', 'age' => '1');
////foreach ($data as $k => $v) {
////    $st->bindParam($k, $v);
////}
//foreach ($data as $k => $v) {
//    $st->bindValue($k, $v);
//}
//$st->execute();
//$a = $st->fetchAll();
//print_r($a);
//echo "\n";
//die;

//echo "sql注入\n";
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "123456");
//$name = '"a" or 1=1';
//echo "----sql注入unuse bindParam\n";
//$st = $pdo->prepare("SELECT * FROM test_pdo where name = " . $name);
//$st->execute();
//$a = $st->fetchAll();
//print_r($a);
//echo "\n";
//die;

//echo "----sql注入use bindParam\n";
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "123456");
////$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//$pdo->query('SET NAMES utf8');
//$st = $pdo->prepare("SELECT * FROM test_pdo where name = :name");
//$name = '"a"' . ' or 1=1 \*';
//$name = '"a" or 1=1';
//$st->bindParam('name', $name);
//$st->execute();
//$a = $st->fetchAll();
//print_r($a);
//echo "\n";
//die;


//echo "test PDO 的参数绑定\n";
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "123456");
//echo "----使用bindParam\n";
//$st = $pdo->prepare("SELECT * FROM test_pdo where name = :name");
//$name = 'a';
//$st->bindParam('name', $name);
//$st->execute();
//$a = $st->fetchAll();
//print_r($a);
//echo "----不使用bindParam\n";
//$name = 'a';
//$st = $pdo->prepare("SELECT * FROM test_pdo where name = " . $name);
//$st->execute();
//$a = $st->fetchAll();
//print_r($st->errorInfo());
//echo "\n";
//die;


//echo "使用pdo进行100次同sql查询\n";
//$begain = microtime(true);
//$begainCache = memory_get_usage();
//echo "\n---------begain time------------" . $begain;
//echo "\n---------begain cache------------" . $begainCache;
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8", "root", "123456");
//$i = 1;
//$st = $pdo->prepare("SELECT * FROM test_pdo where name = :name");
//while ($i < 10000) {
//    $name = 'a';
//    $st->bindParam('name', $name);
//    $st->execute();
//    $a = $st->fetchAll();
//    $i++;
//}
//$end = microtime(true);
//$endCache = memory_get_usage();
//echo "\n---------end time---------------" . $end;
//echo "\n---------end cache---------------" . $endCache;
//echo "\n---------total time-------------" . ($end - $begain);
//echo "\n---------total cahce-------------" . ($endCache - $begainCache);
//
//
//echo "\n\n不使用pdo进行100次同sql查询\n";
//$begain = microtime(true);
//$begainCache = memory_get_usage();
//echo "\n---------begain time------------" . $begain;
//echo "\n---------begain cache------------" . $begainCache;
//$db = mysqli_init();
//$db->real_connect('127.0.0.1', 'root', '123456', 'test');
//$i = 1;
//while ($i < 10000) {
//    $name = 'a';
//    $sql = "SELECT * FROM test_pdo where name = '{$name}'";
//    $ret = $db->query($sql);
//    $ret->fetch_all();
//    $i++;
//}
//$end = microtime(true);
//$endCache = memory_get_usage();
//echo "\n---------end time---------------" . $end;
//echo "\n---------end cache---------------" . $endCache;
//echo "\n---------total time-------------" . ($end - $begain);
//echo "\n---------total cahce-------------" . ($endCache - $begainCache);

//
//echo "使用pdo进行n次同sql查询\n";
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=employees;charset=utf8", "root", "123456");
//$begain = microtime(true);
//$begainCache = memory_get_usage();
//echo "\n---------begain time------------" . $begain;
//echo "\n---------begain cache------------" . $begainCache;
//$id  = '10001';
//$st = $pdo->prepare("SELECT * FROM employees where emp_no = :emp_no");
//while ($id < 20000) {
//    $st->bindParam('emp_no', $id);
//    $st->execute();
//    $a = $st->fetchAll();
//    $id++;
//}
//$end = microtime(true);
//$endCache = memory_get_usage();
//echo "\n---------end time---------------" . $end;
//echo "\n---------end cache---------------" . $endCache;
//echo "\n---------total time-------------" . ($end - $begain);
//echo "\n---------total cahce-------------" . ($endCache - $begainCache);

//echo "\n使用pdo进行n次同sql查询\n";
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=employees;charset=utf8", "root", "123456");
//$begain = microtime(true);
//$begainCache = memory_get_usage();
//echo "\n---------begain time------------" . $begain;
//echo "\n---------begain cache------------" . $begainCache;
//$id  = '20001';
//while ($id < 30000) {
//    $st = $pdo->prepare("SELECT * FROM employees where emp_no = :emp_no");
//    $st->bindParam('emp_no', $id);
//    $st->execute();
//    $a = $st->fetchAll();
//    $id++;
//}
//$end = microtime(true);
//$endCache = memory_get_usage();
//echo "\n---------end time---------------:" . $end;
//echo "\n---------end cache---------------:" . $endCache;
//echo "\n---------total time-------------:" . ($end - $begain);
//echo "\n---------total cahce-------------:" . ($endCache - $begainCache);

//echo "\n\n不使用pdo进行n次同sql查询\n";
//$begain = microtime(true);
//$begainCache = memory_get_usage();
//echo "\n---------begain time------------" . $begain;
//echo "\n---------begain cache------------" . $begainCache;
//$db = mysqli_init();
//$db->real_connect('127.0.0.1', 'root', '123456', 'employees');
//$id = '30001';
//while ($id < 40000) {
//    $sql = "SELECT * FROM employees where emp_no = '{$id}'";
//    $ret = $db->query($sql);
//    $a = $ret->fetch_all();
//    $id++;
//}
//$end = microtime(true);
//$endCache = memory_get_usage();
//echo "\n---------end time---------------:" . $end;
//echo "\n---------end cache---------------:" . $endCache;
//echo "\n---------total time-------------:" . ($end - $begain);
//echo "\n---------total cahce-------------:" . ($endCache - $begainCache);

