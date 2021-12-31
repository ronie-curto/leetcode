<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s) : bool 
    {
        $stack = [];
        $index = 0;
        $stringArray = str_split($s);
        $openBracketsMatch = [
            '(' => ')',
            '[' => ']',
            '{' => '}'
        ];
        $closeBracketsMatch = [
            ')' => '(',
            ']' => '[',
            '}' => '{'
        ];
                
        for ($i = 0; $i < count($stringArray); $i++) {
            if ($index === 0 && array_key_exists($stringArray[$i], $closeBracketsMatch))
                return false;

            //opening new bracket - add to stack
            if (array_key_exists($stringArray[$i], $openBracketsMatch)) {
                $stack[$index] = $stringArray[$i];
                $index++;
            }
            
            if (array_key_exists($stringArray[$i], $closeBracketsMatch)) {
                //check if closing bracket doesnt match - return false right away
                if ($stack[$index - 1] !== $closeBracketsMatch[$stringArray[$i]])
                    return false;
            
                $index--;
            }
        }
        
        return $index === 0;
    }
}