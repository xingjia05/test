<?php
$str = "apiSecret=s7gja37dajng8k7u&apiStr=1&apiId=54189075&timestamp=1546498984&apiSecret=s7gja37dajng8k7u";
$sign = strtoupper(md5($str));
print_r($sign);
?>
