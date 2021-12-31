<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome(string $s) : bool 
    {
        $cleanString = strtolower(preg_replace('/[\W_]/', '', $s));
        return strrev($cleanString) == $cleanString;
    }
}