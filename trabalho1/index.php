<?php
/**
 * @author João Bolsson (jvmarques@inf.ufsm.br)
 * @version 2017, 03 Sep.
 */

$elements = [10, 20, 40, 60, 100];

$x = 140;

var_dump(sumExists($x, $elements));
var_dump(test($x, $elements, 0, 1));

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

function test(int $x, array $elements, int $prev, int $next): bool {
    echo "test: " . $elements[$prev] . " + " . $elements[$next] . "\n";
    if ($elements[$prev] + $elements[$next] == $x) {
        return true;
    } else if ($next == count($elements) - 1) {
        // foi até o final do array, volta
        return false;
    } else if (test($x, $elements, $prev, ++$next) || test($x, $elements, ++$prev, $next)) {
        return true;
    }
    return false;
}

