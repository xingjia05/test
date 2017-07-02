<?php
namespace designpattern\afactory;

class AccessDepartment extends Department {
    public function addDepartment() {
        print_r(" Access add new department \n");
    }

    public function getDepartment() {
        print_r(" Access get department  \n");
    }
}
