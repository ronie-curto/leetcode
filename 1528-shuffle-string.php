<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString(string $s, array $indices) : string 
    {
        $finalString = array_fill(0, count($indices) - 1, '');
        
        for ($i = 0; $i < count($indices); $i++)
            $finalString[$indices[$i]] = $s[$i];
        
        return implode('', $finalString);
    }
}