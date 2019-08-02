<?php
class A {
 function  myfunction($v)
{
        if ($v==="Dog")
                  {
                            return "Fido";
                              }
        return $v;
}

function test() {

$a=array("Horse","Dog","Cat");
print_r(array_map("self::myfunction",$a));
}
}

$a = new A();
$a->test();
