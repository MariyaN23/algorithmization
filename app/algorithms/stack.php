<?php
function reversedString($str)
{
    $length = strlen($str);
    if (!$length) {
        return "String is empty";
    }
    $reversed = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}