<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome(int $x) : bool
    {
        if ($x < 0 || $x % 10 === 0)
            return false;
        
        if ($x < 10)
            return true;
                
        return $x == $this->reverseNumber($x);
    }
    
    function reverseNumber(int $numberToReverse) : int
    {
        $reverseNumber = 0;

        while ($numberToReverse > 0) {
            $reverseNumber = $reverseNumber * 10 + $numberToReverse % 10;
            $numberToReverse = floor($numberToReverse / 10);
        }

        return $reverseNumber;
    }
}