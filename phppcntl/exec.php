<?php
//Enter run-as user below (argument needed to be passed when the script is called), otherwise it will run as the caller user process.

$username = $_SERVER['argv'][1];

$user = posix_getpwnam($username);

posix_setuid($user['uid']);
posix_setgid($user['gid']);
pcntl_exec('/usr/bin/last');

