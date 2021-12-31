<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt(string $string) : int
    {
        $converter = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        
        $stringArray = str_split($string);
        $finalNumber = 0;
        
        $i = 0;
        while ($i < count($stringArray)) {
            if (array_key_exists($i + 1, $stringArray) && $converter[$stringArray[$i + 1]] > $converter[$stringArray[$i]]) {
                $finalNumber += $converter[$stringArray[$i + 1]] - $converter[$stringArray[$i]];
                $i++;
            } else {
                $finalNumber += $converter[$stringArray[$i]];
            }
                
            $i++;
        }
                
        return $finalNumber;
    }
}