<?php

class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones(string $jewels, string $stones) : int 
    {
        $jewelsArray = [];
        $cont = 0;
        
        for ($i = 0; $i < strlen($jewels); $i++)
            $jewelsArray[$jewels[$i]] = 1;
        
        for ($i = 0; $i < strlen($stones); $i++)
            if (array_key_exists($stones[$i], $jewelsArray))
                $cont++;
        
        return $cont;
    }
}