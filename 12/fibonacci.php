<?php
$first = 0;
$second = 1;

echo $first . " " . $second . " ";

$count = 2; 

while ($count < 10) {
    $next = $first + $second;

    echo $next . " ";

    $first = $second;
    $second = $next;

    $count++;
}