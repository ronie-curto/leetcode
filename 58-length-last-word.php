<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord(string $s) : int
    {
        $separatedStrings = explode(' ', $s);
        
        for ($i = count($separatedStrings) - 1; $i >= 0; $i--)
            if (strlen($separatedStrings[$i]) > 0)
                return strlen($separatedStrings[$i]);

        return 0;
    }
}