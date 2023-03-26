<?php
class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $first = $strs[0];
        if (!$strs[0]) return "";
        $common = $str = "";
        foreach (str_split($first) as  $v) {
            $common .= $v;
            for ($i = 0; $i < count($strs); $i++) {
                if (substr($strs[$i], 0, strlen($common)) != $common) return $str;
            }
            $str = $common;
        }
        return $str;
    }
}

$s = new Solution;
var_dump($s->longestCommonPrefix(["flower", "flow", "flight"]));
var_dump($s->longestCommonPrefix(["dog", "racecar", "car"]));
var_dump($s->longestCommonPrefix(["", "b"]));
var_dump($s->longestCommonPrefix(["ab", "a"]));
var_dump($s->longestCommonPrefix(["a", "ac"]));
