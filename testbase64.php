<?php
$a = 'ZXlKemRXSWlPaUl4SWl3aWFYTkdjbTl0VG1WM1RHOW5hVzRpT2lKMGNuVmxJaXdpWVhWMGFHVnVkR2xqWVhScGIyNUVZWFJsSWpvaU1qQXhPQzB4TVMweE5WUXhORG93TURvek5pNDROVFVyTURnNk1EQmJRWE5wWVZ3dlUyaGhibWRvWVdsZElpd2lkWE5sY2s1dklqb2lNakl3SWl3aWMzVmpZMlZ6YzJaMWJFRjFkR2hsYm5ScFkyRjBhVzl1U0dGdVpHeGxjbk1pT2lKVmMyVnlibUZ0WlZCaGMzTjNiM0prVkhsd1pVRjFkR2hsYm5ScFkyRjBhVzl1U0dGdVpHeGxjaUlzSW1semN5STZJbWgwZEhCek9sd3ZYQzkxZFdGd0xXUmxkaTVoZG1acFpXeGtMbU52YlZ3dlkyRnpJaXdpYlc5aWFXeGxJam9pS3pnMk1UZzJNVEV3T0RFNE16TWlMQ0owZVhCbElqb2ljR0Z6YzNka0lpd2lZM0psWkdWdWRHbGhiRlI1Y0dVaU9pSlZjMlZ5Ym1GdFpWQmhjM04zYjNKa1ZIbHdaVU55WldSbGJuUnBZV3dpTENKaGRXUWlPaUpvZEhSd2N6cGNMMXd2WTI5dWMyOXNaUzVoZG1acFpXeGtMbU52YlNJc0ltRjFkR2hsYm5ScFkyRjBhVzl1VFdWMGFHOWtJam9pVlhObGNtNWhiV1ZRWVhOemQyOXlaRlI1Y0dWQmRYUm9aVzUwYVdOaGRHbHZia2hoYm1Sc1pYSWlMQ0pzYjI1blZHVnliVUYxZEdobGJuUnBZMkYwYVc5dVVtVnhkV1Z6ZEZSdmEyVnVWWE5sWkNJNkltWmhiSE5sSWl3aWFXUWlPaUl4SWl3aVpYaHdJam94TlRReU9EWTJORFUzTENKcFlYUWlPakUxTkRJeU5qRTJOVGNzSW1wMGFTSTZJbE5VTFRJdFdXSjVjRzVGVm1ocmFVOVVlRlZ2U1doMVpHdDNiMVF4UVc5ekxXaHBjeTFqWVhNdGRHVnpkQ0lzSW1WdFlXbHNJam9pWm5sc2FVQm9hV3hzYVc1emFXZG9kQzVqYjIwaUxDSjFjMlZ5Ym1GdFpTSTZJdSsvdmUrL3ZlKy92ZSsvdmUrL3ZlKy92ZSsvdmUrL3ZlKy92ZSsvdmUrL3ZlKy92ZSsvdmUrL3ZlKy92U0o5';

$b = base64_decode($a);
$c = base64_decode($b);
$d = json_decode($c, true);
$name = $d['username'];

//$encode = mb_detect_encoding($name, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
//print_r($encode);
//print_r($name);
// 
//$name = mb_convert_encoding($name, 'GBK', $encode);
//$encode = mb_detect_encoding($name, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
//print_r($encode);
//print_r($name);
 
function StrToBin($str){
    $arr = preg_split('/(?<!^)(?!$)/u', $str);
print_r($arr);    
foreach($arr as &$v){
        $temp = unpack('H*', $v);
        $v = base_convert($temp[1], 16, 2);
        while($v<8)$v='0'.$v;
print_r($v);print_r('  ');
        unset($temp);
    }
    return join('',$arr);
}

$a = StrToBin($name);
print_r($a);

function BinToStr($str){
    $arr = explode(' ', $str);
    foreach($arr as &$v){
        $v = pack("H".strlen(base_convert($v, 2, 16)), base_convert($v, 2, 16));
    }
    return join('', $arr);
}


print_r(BinToStr($a));die;


