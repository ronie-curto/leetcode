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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $sortedFinalArray = [];
        
        for ($i = 0; $i < count($lists); $i++)
            while (!is_null($lists[$i]->val)) {
                $sortedFinalArray[] = $lists[$i]->val;
                $lists[$i] = $lists[$i]->next;
            }
        
        sort($sortedFinalArray);
        
        $response = null;
        while (count($sortedFinalArray) > 0)
            $response = new ListNode(array_pop($sortedFinalArray), $response);
        
        return $response;
    }
}