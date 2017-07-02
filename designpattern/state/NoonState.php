<?php
namespace designpattern\state;
class NoonState extends State {
    public function writeProgram($work) {
        if ($work->time < 13) {
            printf("now time is :%s \n noon I have a rest\n", $work->time);
        } else {
            $work->setState(new AfternoonState());
            $work->writeProgram();
        }
    }   
}
