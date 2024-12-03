<?php
$leftListInOrder = [];
$rightListInOrder = [];

$fh = fopen('input.txt','r');
while ($line = fgets($fh)) {
    $row = explode("   ", $line);
    $leftListInOrder[] = (int)$row[0];
    $rightListInOrder[] = (int)$row[1];
}
fclose($fh);

sort($leftListInOrder);
sort($rightListInOrder);

$distanceSum = 0;
for ($i = 0; $i < count($leftListInOrder); $i++) {
    $distanceSum += abs($leftListInOrder[$i] - $rightListInOrder[$i]);
}

echo $distanceSum;