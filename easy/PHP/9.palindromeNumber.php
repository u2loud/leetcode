<?php
class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        return $x == strrev(strval($x));
    }
}

$s = new Solution;
var_dump($s->isPalindrome(121));
var_dump($s->isPalindrome(-121));
var_dump($s->isPalindrome(10));
