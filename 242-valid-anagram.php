<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram(string $s, string $t) : bool 
    {
        $stringArrayS = [];
        
        for ($i = 0; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i], $stringArrayS)) {
                $stringArrayS[$s[$i]]++;             
            } else {
                $stringArrayS[$s[$i]] = 1;                
            }
        }
        for ($i = 0; $i < strlen($t); $i++) {
            if (!array_key_exists($t[$i], $stringArrayS))
                return false;

            if (array_key_exists($t[$i], $stringArrayS)) {
                $stringArrayS[$t[$i]]--;

                if ($stringArrayS[$t[$i]] === 0)
                    unset($stringArrayS[$t[$i]]);
            }
        }
        
        return array_sum($stringArrayS) === 0;
    }
}