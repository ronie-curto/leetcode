<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea(array $height) : int
    {
        $leftIndex = $maxArea = 0;
        $rightIndex = count($height) - 1;
            
        while ($leftIndex < $rightIndex) {
            $maxArea = max($maxArea, ($rightIndex - $leftIndex) * min($height[$leftIndex], $height[$rightIndex]));
            
            if ($height[$leftIndex] < $height[$rightIndex]) {
                $leftIndex++;
            } else {
                $rightIndex--;
            }            
        }
        
        return $maxArea;
    }
}