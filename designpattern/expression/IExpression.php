<?php
namespace designpattern\expression; 

class IExpression {
    
    public function __construct() {
    }
    
    public function interpret($context) {
        if (strlen($context->context) == 0) {
            return false;
        }
        $key = mb_substr($context->context, 0, 1);
        $context->context = mb_substr($context->context, 2);
        $val = mb_substr($context->context, 0, mb_strpos($context->context, ' '));
        $context->context = mb_substr($context->context, mb_strpos($context->context, ' ')+1);
        return $this->excute($key, $val);

    }

    public function excute($key, $val) {
        
        
    }
}
