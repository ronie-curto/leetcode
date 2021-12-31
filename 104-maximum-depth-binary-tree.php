<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root, int $counter = 0) : int
    {        
        if (is_null($root->val))
            return $counter;
        
        $counter++;
                
        return max($this->maxDepth($root->left, $counter), $this->maxDepth($root->right, $counter));
    }
}