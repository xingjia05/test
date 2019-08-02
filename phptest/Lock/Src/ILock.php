<?php
interface ILock {
    const EXPIRE = 5;
    
    public function getLock($key, $timeOut = self::EXPIRE);
    public function releaseLock($ket);
}
