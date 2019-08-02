<?php
namespace Lock;
//include_once '/Users/xjzhang/Documents/website/test/phptest/lock/App/SqlLock.php';
class LockSys {
    const LOCK_TYPE_DB = 'SqlLock';
    
    private $_lock = null;
    private static $_supportLock = ['SqlLock'];

    public function __construct($type, $option = []) {
        if (!empty($type)) {
           // $this->createLock($type, $option);
        }
    }

    public function createLock($type, $option=[]) {
        if (!in_array($type, self::$_supportLock)) {
            throw new EXCEPTION('not support lock of ' . $type);
        }
        
        $this->_lock = new $type($option);
    }

    public function getLock($key, $timeOut) {
        if (false == $this->_lock instanceof ILock) {
            throw new EXCEPTION('false == $this->_lock instanceof ILock');
        }
        $this->_lock->getLock($key, $timeOut);
    }

    public function releaseLock($key) {
        if (false == $this->_lock instanceof ILock) {
            throw new EXCEPTION('false == $this->_lock instanceof ILock');
        }
        $this->_lock->releaseLock($key);
    }
}
