<?php

/**
 * Insert a string at a certain position in a text
 * 
 * Usage:
 *  $string = 'Whos at the door?'
 *  echo $string; // Output: Whos at the door
 *  $newString = str_insert($string, "'", 3);
 *  echo $newString; // Output: Who's at the door
 * 
 * @param string $string The original string
 * @param string $insert Insert this
 * @param integer $position The position to insert
 *
 * @return string
 */
function str_insert($string, $insert, $position)
{
    return substr($string, 0, $position) . $insert . substr($string, $position);
}