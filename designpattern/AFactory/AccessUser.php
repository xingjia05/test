<?php
namespace designpattern\afactory;

class AccessUser extends User {

    public function  addUser() {
        print_r("Access new user \n");
    }

    public function getUser() {
        print_r("Access get user \n");
    }
}
