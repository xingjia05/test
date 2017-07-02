<?php
namespace designpattern\state;

class EveningState extends State {
    public function writeProgram($work) {
        if ($work->workFinished) {
            printf("now time is :%s\n, and my work is finished", $work->time);
        } else {
            printf("i am tire");
        }
    }
}
