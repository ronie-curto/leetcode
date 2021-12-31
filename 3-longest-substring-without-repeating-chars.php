<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring(string $s) : int
    {
        if (strlen($s) == 0)
            return 0;

        if (strlen($s) == 1)
            return 1;

        
        $stringArray = str_split($s);
        $n = count($stringArray);
        $maxCount = 0;
        $lettersFound = [];
        
        $headSubstringPosition = 0;
        
        for ($i = 0; $i < $n; $i++) {
            if (array_key_exists($stringArray[$i], $lettersFound))
                $headSubstringPosition = max($lettersFound[$stringArray[$i]], $headSubstringPosition);
            
            $maxCount = max($maxCount, $i - $headSubstringPosition + 1);
            $lettersFound[$stringArray[$i]] = $i + 1;            
        }
        
        return $maxCount;
    }
}