<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        // 暴力解法：双重循环
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
    }
}

$s = new Solution;
var_dump($s->twoSum([2, 7, 11, 15], 9));
var_dump($s->twoSum([3, 2, 4], 6));
var_dump($s->twoSum([3, 3], 6));
