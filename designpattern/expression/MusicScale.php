<?php
namespace designpattern\expression;

class MusicScale extends IExpression {
    public function excute($key, $val) {
        $scale = '';
        switch ($val) {
            case '1':
                $scale = '低音';
                break;
            case '2':
                $scale = '中音';
                break;
            case '3':
                $scale = '高音';
                break;
        }
        return $scale;
    }
}
