<?php
namespace designpattern\afactory;

class SqlServerDepartment extends Department {
    public function addDepartment() {
        print_r("sqlserver add new department \n");
    }

    public function getDepartment() {
        print_r("sqlserver get department \n");
    }
}
