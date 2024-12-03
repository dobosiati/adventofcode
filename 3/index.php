<?php

$sum = 0;

$fh = fopen('input.txt','r');
while ($line = fgets($fh)) {
    preg_match_all('/mul\(([0-9]+),([0-9]+)\)/', $line, $matches, PREG_SET_ORDER );

    foreach ($matches as $match) {
        $sum += ($match[1] * $match[2]);
    }
}
fclose($fh);

echo $sum;