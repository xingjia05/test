<?php
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    print_r('ssssss');
    print_r($errno);
    print_r($errstr);
    print_r($errfile);
    print_r($errline);
}

$old_error_handler = set_error_handler("myErrorHandler");

trigger_error('oooooo', E_USER_WARNING);
restore_error_handler();
trigger_error('oooooo', E_USER_WARNING);
