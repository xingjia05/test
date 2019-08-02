<?php
namespace Phptest\Object\Serialize;

require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

//$person = new Person();
//$person->name = 'zxj';
//$person->age = 1;
//
//$str = serialize($person);
//$filename = '/Users/xjzhang/Documents/w/test/phptest/object/data/person.data';
//file_put_contents($filename, $str);

$str = file_get_contents('/Users/xjzhang/Documents/website/test/phptest/object/data/person.data');
$person = unserialize($str);
print_r($person);die;