<?php
namespace designpattern\state;

class ForenoonState extends State {
    public function writeProgram($work) {
        if ($work->time < 12) {
            printf("now time is :%s \n forenoon I feel great", $work->time);
        } else {
            $work->setState(new NoonState());
            $work->writeProgram();
        }
    }
}
