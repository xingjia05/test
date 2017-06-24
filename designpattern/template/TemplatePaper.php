<?php
namespace designpattern\template;

abstract class TemplatePaper {
    public function questionOne() {
        printf("who are you?\n A.boy B.girl\n");
        $answer = $this->answerOne();
        printf("answer is %s", $answer);
    }

    public function questionTwo() {
        printf("your age?\n A.11 B.12\n");
        $answer = $this->answerTwo();
        printf("answer is %s", $answer);
    }
}
