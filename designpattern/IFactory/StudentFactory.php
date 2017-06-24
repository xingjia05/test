<?php
namespace designpattern\IFactory;

class StudentFactory implements IFactory {
    public function createLeiFeng() {
        return new Student();
    }
}
