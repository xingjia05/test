<?php
namespace designpattern\afactory;

class SqlServerUser extends User {
    public function addUser() {
        print_r("sqlserver add new user \n");
    }

    public function getUser() {
        print_r("sqlserver get user \n");
    }
}
