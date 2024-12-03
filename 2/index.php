<?php
$numberOfSafeReports = 0;

$fh = fopen('input.txt','r');
while ($line = fgets($fh)) {
    $reportDescending = $reportAscending = $report = array_map('intval', explode(" ", $line));;
    sort($reportAscending);
    rsort($reportDescending);

    if ($report === $reportAscending || $report === $reportDescending) {
        $valid = true;
        $validationValue = 0;
        foreach ($report as $key => $value) {
            $difference = abs($value - $validationValue);
            if ($key !== 0 && ($difference < 1 || $difference > 3)) {
                $valid = false;
                break;
            }

            $validationValue = $value;
        }

        if ($valid) {
            $numberOfSafeReports++;
        }
    }
}
fclose($fh);

echo $numberOfSafeReports;