<?php
namespace designpattern\expression;

require_once '/Users/xjzhang/Documents/website/test/Autoloader.php';

$context = new Context();
$context->context = 'O 2 E 0.5 G 0.5 A 3 E 0.5 G 0.5 D 3 E 0.5 G 0.5 A 0.5 O 3 C 1 O 2 A 0.5 G 1 C 0.5 E 0.5 D 3 ';

$interpret = null;

try {
    while(!empty($context->context)){
        $str = mb_substr($context->context, 0, 1);
        switch($str){
            case "O":
                $interpret = new MusicScale();
                break;
            case "C":
            case "D":
            case "E":
            case "F":
            case "G":
            case "A":
            case "B":
            case "P":
                $interpret = new MusicNote();
                break;
        }
        echo $interpret->interpret($context);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
