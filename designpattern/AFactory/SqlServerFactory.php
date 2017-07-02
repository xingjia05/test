<?php
namespace designpattern\afactory;

class SqlserverFactory implements Factory {
    public function createUser() {
        return new SqlServerUser();
    }

    public function createDepartment() {
        return new SqlServerDepartment();
    }
}
