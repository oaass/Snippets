<?php

/**
 * Check if a value is in a range
 *
 * Usage:
 * if (in_range(5, [1,10]))        - true
 * if (in_range(1, [5,10]))        - false
 * if (in_range('c', ['a', 'f']))  - true
 * if (in_range('a', ['b', 'f']))  - false
 *
 * @param mixed $value
 * @param array $range
 * @return boolean
 */
function in_range($value, array $range)
{
    list($start, $end) = $range;
    return (($value >= $start) && ($value <= $end));
}