<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit(string $s) : int 
    {
        $splitCount = 0;
        $currentCount = 0;
        
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === 'L')
                $currentCount++;

            if ($s[$i] === 'R')
                $currentCount--;

            if ($currentCount === 0)
                $splitCount++;
        }
        
        return $splitCount;
    }
}