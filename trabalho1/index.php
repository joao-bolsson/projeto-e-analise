<?php
/**
 * @author João Bolsson (jvmarques@inf.ufsm.br)
 * @version 2017, 03 Sep.
 */

$elements = [10, 20, 40, 45, 50, 55, 60, 70, 100, 150, 160];

$x = 155;

var_dump(test2($x, $elements, 0, count($elements) - 1));

function test2(int $x, array $elements, int $index, int $end): bool {
    echo "index: " . $index . " | end: " . $end . "\n";
    if ($elements[$index] + $elements[$end] == $x) {
        return true;
    } else if ($end - $index == 1) {
        return false;
    }

    if ($elements[$index] + $elements[$end] > $x) {
        return test2($x, $elements, $index, --$end);
    } else {
        return test2($x, $elements, ++$index, $end);
    }
}

