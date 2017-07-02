<?php
namespace designpattern\state;

class AfternoonState extends State {
    public function writeProgram($work) {
        if ($work->time > 17) {
            printf("now time is :%s \n afternoon my state is just so so \n", $work->time);
        } else {
            $work->setState(new EveningState());
            $work->writeProgram();
        }
    }
}
