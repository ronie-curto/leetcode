<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse(int $x) : int
    {
        $reversedNumber = '0';
        $upperBound = bcsub(bcpow('2', '31'), '1');
        $lowerBound = bcpow('-2', '31');
        
        if(bccomp(strval($x), $upperBound) === 1 || bccomp(strval($x), $lowerBound) === -1)
            return 0;
                
        while (bccomp(strval($x), '0') !== 0) {            
            $reversedNumber = bcadd(bcmul($reversedNumber, '10'), bcmod(strval($x), '10'));
            $x = bcdiv(strval($x), '10');
        }
        
        if(bccomp($reversedNumber, $upperBound) === 1 || bccomp($reversedNumber, $lowerBound) === -1)
            return 0;

        return $reversedNumber;
    }
}