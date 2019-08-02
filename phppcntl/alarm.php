<?php
declare(ticks = 1); //每执行一次低级语句会检查一次该进程是否有未处理过的信号,效率太低

//利用计时器发送一个SIGALRM信号
function signal_handler($signal){
    print "Caught SIGALRM\n";
    pcntl_alarm(5);
}

pcntl_signal(SIGALRM, "signal_handler");
//5秒后发送信号
pcntl_alarm(5);

while (1){
//    pcntl_signal_dispatch();
    sleep(1);
}
