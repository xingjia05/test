<?php
use PHPUnit\Framework\TestCase;  
  
class yunkeTest extends TestCase  
{  
    public function testPushAndPop()  
    {  
        $stack = [1];  
        $this->assertEquals(0, count($stack));  
        array_push($stack, 'foo');  
        $this->assertEquals('foo', $stack[count($stack) - 2]);  
        $this->assertEquals(1, count($stack));  
        $this->assertEquals('foo', array_pop($stack));  
        $this->assertEquals(0, count($stack));  
     }  
 }  
?>
