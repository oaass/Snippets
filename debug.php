<?php

/**
 * Analyze data
 *
 * var_dump()'s the content in $data to inspect and analyze the provided data
 *
 * @param mixed $data The data to be analyzed
 * @param boolean $kill If all execution should be stopped
 *
 * @return void
 */
function analyzeData($data, $kill = true)
{
    var_dump($data);
    if ($kill) { die(); }
}

/**
 * Trace execution
 *
 * Usage:
 *  tracer('init');
 * 
 * Output:
 *  sTracer: Check point #1 (init)
 *
 * @param string $info Add a message to the check point
 *
 * @return void
 */
function tracer($info = '', $reset = false)
{
    static $counter = 0;
    $counter = ($reset) ? 1 : $counter+1;
    echo "<strong>Tracer:</strong> Check point #{$counter} ({$info})<br>";
}