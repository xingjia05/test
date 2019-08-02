<?php
include_once '/Users/xjzhang/Documents/website/test/phptest/lock/App/ILock.php';
class SqlLock implements ILock {

    private $_mysql;

    public function __construct($option) {
        $this->_mysql = mysqli_connect('127.0.0.1', 'root', '123456');
    }

    public function getLock($key, $timeOut=self::EXPIRE) {
        $sql = 'select GET_LOCK("' . $key . '",' . $timeOut .')';
        $ret = $this->_mysql->query($sql);
        return $ret;
    }

    public function releaseLock($key) {
        $sql = 'select RELEASE_LOCK("' . $key . '")';
        return $this->_mysql->query($sql);
    }
}
