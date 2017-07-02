<?php
namespace designpattern\afactory;

class AccessFactory implements Factory {
    public function createUser() {
        return new AccessUser();
    }

    public function createDepartment() {
        return new AccessDepartment();
    }
}
