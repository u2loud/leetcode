<?php
class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $lArr = array(
            '(' => ')',
            '[' => ']',
            '{' => '}'
        );
        $rArr = array_flip($lArr);
        $i = 0;
        $arr = [];
        do {
            if ($rArr[$s[$i]]) {
                if (empty($arr) || $s[$i] != $arr[count($arr) - 1]) {
                    return false;
                } else {
                    array_pop($arr);
                }
            } else {
                array_push($arr, $lArr[$s[$i]]);
            };
            $i++;
        } while ($i < strlen($s));
        return empty($arr);
    }
}

$s = new Solution;
echo "return = " . $s->isValid('()') . PHP_EOL;
echo "return = " . $s->isValid('()[]{}') . PHP_EOL;
echo "return = " . $s->isValid('(]') . PHP_EOL;
echo "return = " . $s->isValid('{[()]}') . PHP_EOL;
echo "return = " . $s->isValid(')]}') . PHP_EOL;
echo "return = " . $s->isValid('[[[[[[[[[[') . PHP_EOL;
echo "return = " . $s->isValid('[}}') . PHP_EOL;
