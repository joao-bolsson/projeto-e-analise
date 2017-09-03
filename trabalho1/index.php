<?php
/**
 * @author João Bolsson (jvmarques@inf.ufsm.br)
 * @version 2017, 03 Sep.
 */

$elements = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$x = 5;

var_dump(sumExists($x, $elements));

/**
 * @param int $x Sum to find.
 * @param array $elements Elements to look.
 * @return bool If exists two elements that the sum is $x - true, else - false.
 */
function sumExists(int $x, array $elements): bool {
    $len = count($elements);

    for ($i = 0; $i < $len; $i++) {
        $num = $elements[$i];
        for ($j = $i + 1; $j < $len; $j++) {
            $otherNum = $elements[$j];
            if ($num + $otherNum == $x) {
                return true;
            }
        }
    }
    return false;
}

