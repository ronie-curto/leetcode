<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix(array $strs) : string
    {
        $commomPrefix = $strs[0];
        $initialLength = strlen($commomPrefix);
        
        for ($i = 1; $i < count($strs); $i++) {
            $targetCompare = substr($strs[$i], 0, $initialLength);


            while ($commomPrefix != $targetCompare && $initialLength > 0) {
                $initialLength--;

                $commomPrefix = substr($commomPrefix, 0, $initialLength);
                $targetCompare = substr($targetCompare, 0, $initialLength);
            }
            
            if ($initialLength === 0) {
                $commomPrefix = '';
                break;            
            }
        }
        
        return $commomPrefix;
    }
}