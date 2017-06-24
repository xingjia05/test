<?php
namespace designpattern\simplefactory;
class OperationFactory {
    
    public static function getOperation($operation) {
        switch ($operation) {
            case '+':
                return new OperationPlus();
            case '-':
                return new OperationSub();
            default:
                return null;
        }
    }
}
