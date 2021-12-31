<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($list1, $list2) {
        $newNumber = [];        
        $carryOverSum = 0;
        
        while (!is_null($list1->val) || !is_null($list2->val)) {
            $currentSum = $carryOverSum;
            $carryOverSum = 0;

            if (!is_null($list1->val))
                $currentSum += $list1->val;

            if (!is_null($list2->val))
                $currentSum += $list2->val;

            if ($currentSum >= 10) {
                $newNumber[] = $currentSum % 10;
                $carryOverSum++;
            } else {
                $newNumber[] = $currentSum;
            }
            
            $list1 = $list1->next;
            $list2 = $list2->next;            
        }
        
        if ($carryOverSum > 0)
            $newNumber[] = $carryOverSum;
                
        $response = null;
        for ($i = count($newNumber) - 1; $i >= 0; $i--)
            $response = new ListNode($newNumber[$i], $response);


        return $response;
    }
}