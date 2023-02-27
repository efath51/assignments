<?php
$str = ['c', 'b', 'a', 'd', 'e'];
$sortedstr = sortstrByLength($str);
print_r($sortedstr);

function sortstrByLength(array $str): array {
    usort($str, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $str;
}