<?php
namespace App;

require_once('logic.php');
require_once ('Rules.php');

$test= new Logic(220, 180, 3);
$result = ($test->result());
echo PHP_EOL . PHP_EOL;

$count = count($result);
echo 'c' . $count;
for ($i=0; $i<count($result[1]); $i++) {
   $max[$i] = $result[0][$i];
    for ($c=0; $c<$count; $c++ ) {
        echo 'aaa ' . $i . 'bbb ' . $result[$c][$i] . PHP_EOL;
        if ($max[$i] <= $result[$c][$i]) {
            $max[$i] = $result[$c][$i];
        }
    }
}
print_r($max);

$sum = 0;
$sumY = 0;
for ($i=0; $i<=count($max); $i++){
    $j = ($i/10) * $max[$i];
    $sum += $j;
    $sumY += $max[$i];
}

echo 'RESULT = ' . ($sum/$sumY);