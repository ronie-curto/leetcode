<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays(array $nums1, array $nums2) : int
    {
        $newArray = [];

        $iterator1 = 0;
        $iterator2 = 0;
        $currentCont = 0;
        $firstValue = null;
        $secondValue = null;

        $cont = count($nums1) + count($nums2);
        if ($cont % 2 == 0) {
            $initialPosition = ($cont / 2) - 1;
            $finalPosition = $cont / 2;
        } else {
            $initialPosition = floor($cont / 2);
            $finalPosition = $initialPosition;
        }
            


        while (($iterator1 < count($nums1) || $iterator2 < count($nums2)) && (is_null($firstValue) || is_null($secondValue))) {
            if ($iterator1 < count($nums1) && $iterator2 < count($nums2)) {
                if ($nums1[$iterator1] <= $nums2[$iterator2]) {
                    $latestUsedValue = $nums1[$iterator1];
                    $iterator1++;
                } else {
                    $latestUsedValue = $nums2[$iterator2];
                    $iterator2++;
                }
            } else if ($iterator1 < count($nums1) && $iterator2 >= count($nums2)) {
                $latestUsedValue = $nums1[$iterator1];
                $iterator1++;
            } else if ($iterator1 >= count($nums1) && $iterator2 < count($nums2)) {
                $latestUsedValue = $nums2[$iterator2];
                $iterator2++;
            }
            
            if ($currentCont == $initialPosition)
                $firstValue = $latestUsedValue;

            if ($currentCont == $finalPosition)
                $secondValue = $latestUsedValue;

            $currentCont++;
        }
        
        return ($firstValue + $secondValue) / 2;
    }
}