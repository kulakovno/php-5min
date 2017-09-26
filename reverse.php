<?php
function reverse($string, &$result = '')
{
    $char = substr($string, -1, 1);
    $string = substr($string, 0, strlen($string) - 1);
    return $char ? $result . $char . reverse($string, $result) : $result;
}

$string = '12345ABCD';
$reversed = reverse($string);
echo $reversed . PHP_EOL;

