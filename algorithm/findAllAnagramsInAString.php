<?php
class Solution {
    public function findAnagrams($s, $p) {
        $ret = [];
        $freqS = [];
        $freqP = [];
        $l = 0;
        for($i = 0; $i < strlen($p); $i++) {
            $freqP[$p[$i]]++;
            $freqS[$s[$i]]++;
        }
        if ($freqP == $freqS) {
            $ret[] = $l;
	    }
        while($i < strlen($s)) {
            $freqS[$s[++$i]]++;
            $freqS[$s[$l++]]--;
            if ($freqS[$s[$l-1]] == 0) {unset($freqS[$s[$l-1]]);}
            if ($freqS == $freqP) {
                $ret[] = $l;
            }
        }
        print_r($ret);die;
    }
}

$s = 'acbaebabacd';
$p = 'abc';

$solutionObj = new Solution();
$solutionObj->findAnagrams($s, $p);
