<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target) : array
    {
        if (count($nums) < 2)
            return [];

        $valuesFound = [];

        for ($i = 0; $i < count($nums); $i++) {
            $diference = $target - $nums[$i];

            if (array_key_exists($diference, $valuesFound))
                return [$valuesFound[$diference], $i];

            $valuesFound[$nums[$i]] = $i;
        }

        return [];
    }
}