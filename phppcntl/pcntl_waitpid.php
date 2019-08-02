<?php
declare(ticks = 1);
function zp_handler($signal) {
    $id = pcntl_waitpid(-1, $status, WNOHANG);
    if (pcntl_wifexited($status)) 
    {
        printf("Removed Chlid id: %d \n",$id);
        printf("Chlid status: %d \n",pcntl_wexitstatus($status));
    }
}

//pcntl_signal_dispatch();
pcntl_signal(SIGCHLD, "zp_handler");
//pcntl_signal_dispatch();
//

$pid = pcntl_fork();
if ($pid == 0)
{
    print "#1 Hi, I'm child process".posix_getpid().PHP_EOL;
    sleep(3);
    return 10;
}
else 
{
    print "#1parent process id:".posix_getpid().PHP_EOL;
    $pid = pcntl_fork();
    if ($pid == 0)
    {   print "#2 Hi, I'm child process".posix_getpid().PHP_EOL;
        sleep(10);
        exit(20);
    } 
    else 
    {
        print "#2parent process id:".posix_getpid().PHP_EOL;
        for ($i=0; $i <10 ; $i++) { 
            print "wait..".PHP_EOL;
            sleep(10);
        }
    }
}
