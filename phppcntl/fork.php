<?php
print_r(getmypid());
echo "posix_getpid()=" . posix_getpid() . ", posix_getppid()=" . posix_getppid() . "\n";

if (1) {
    $pid = pcntl_fork();
    if ($pid == -1) die("could not fork");
    if ($pid) {
        echo "pid=" . $pid . ", posix_getpid()=" . posix_getpid() . ", posix_getppid()=" . posix_getppid() . "\n";
    } else {
        echo "pid=" . $pid . ", posix_getpid()=" . posix_getpid() . ", posix_getppid()=" . posix_getppid() . "\n";
    }
}
echo "out::pid=" . $pid . ", posix_getpid()=" . posix_getpid() . ", posix_getppid()=" . posix_getppid() . "\n";
