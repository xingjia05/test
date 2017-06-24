<?php
namespace designpattern\IFactory;

class VolunteerFactory implements IFactory {
    public function createLeiFeng(){
        return new Volunteer();
    }
}
