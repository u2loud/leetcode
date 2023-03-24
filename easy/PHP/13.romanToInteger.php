<?php
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $romanArr = array(
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        );
        $specialArr = array(
            'IV' => 4,
            'IX' => 9,
            'XL' => 40,
            'XC' => 90,
            'CD' => 400,
            'CM' => 900
        );
        $k = 0;
        $sum = 0;
        do {
            $v = $s[$k];
            $str = $v . $s[$k + 1];
            if ($specialArr[$str]) {
                $sum += $specialArr[$str];
                $k += 2;
            } else {
                $sum += $romanArr[$v];
                $k += 1;
            }
        } while ($k != strlen($s));
        return $sum;
    }
}

$s = new Solution;
var_dump($s->romanToInt('III'));
var_dump($s->romanToInt('IV'));
var_dump($s->romanToInt('IX'));
var_dump($s->romanToInt('LVIII'));
var_dump($s->romanToInt('MCMXCIV'));
