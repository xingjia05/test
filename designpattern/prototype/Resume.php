<?php
namespace designpattern\prototype;

class Resume extends Prototype {

    public function __construct() {
        $this->workExperience = new WorkExperience();
    }

    public function cloneObj() {
        $this->workExperience = new WorkExperience();
    }

    public function setWorkExperience($company, $address) {
        $this->workExperience->company = $company;
        $this->workExperience->address = $address;
    }

    public function show() {
        printf("name:%s \n age:%s \n company:%s \n address:%s \n", $this->name, $this->age, $this->workExperience->company, $this->workExperience->address);
    }
}
