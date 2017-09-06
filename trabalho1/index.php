<?php
/**
 * @author João Bolsson (jvmarques@inf.ufsm.br)
 * @version 2017, 03 Sep.
 */

$elements = [20, 40, 43, 50, 55, 60, 70, 100, 150, 160];

$x = 143;

/**
 * S: [20, 40, 43, 50, 55, 60, 70, 100, 150, 160]
 * Pior caso: quando os dois números, os quais a soma é x, estão no meio do array.
 *  x = 115, S[4] + S[5] = 115 (9 repetições)
 *
 * Pior caso pode ser também, quando os dois elementos estão em uma das extremidades do array
 *  x = 60 (S[0] + S[1]) ou x = 310 (S[8] + S[9])
 *
 * Pior caso pode ser também quando não existem elementos, os quais a soma é x.
 *
 * Caso médio: ?
 *
 * Melhor caso: quando os dois números, os quais a soma é x, estão um em cada extremidade do array
 *  x = 180 S[0] + S[9] = 180 (1 repetição)
 *
 *
 * Pior caso: O(n)
 * Caso médio: entre 1 e O(n)
 * Melhor caso: 1
 */


var_dump(sumExists($x, $elements, 0, count($elements) - 1));

/**
 * @param int $x Sum to find.
 * @param array $elements Sorted array.
 * @param int $index First index to look.
 * @param int $end Last index to look.
 * @return bool If $elements contains two numbers whose sum is $x - true, else - false.
 */
function sumExists(int $x, array $elements, int $index, int $end): bool {
    if ($elements[$index] + $elements[$end] == $x) {
        return true;
    } else if ($end - $index == 1) {
        return false;
    }

    if ($elements[$index] + $elements[$end] > $x) {
        return sumExists($x, $elements, $index, --$end);
    } else {
        return sumExists($x, $elements, ++$index, $end);
    }
}

