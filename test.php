
aa11@11.com
aa21@11.com
aa31@11.com
aa41@11.com
aa51@11.com
aa61@11.com
aa71@11.com
aa81@11.com


<?php
$ii = 0;
$a = $ii ?: 10;
print_r($a);die;


$a = [
    'b' => 2,
    'a' => 1
];

$b = [
    'a' => 1,
    'b' => 2
];

//$a = [2,1];
//$b = [1,2];

if ($a == $b) {
    echo 'a is equal to b';
}

if ($a === $b) {
   echo 'a is complete equal to b';
}
