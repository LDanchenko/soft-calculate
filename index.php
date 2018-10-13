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
$res = $sum/$sumY;
echo 'RESULT = ' . $res . PHP_EOL;

$nokomf = Rules::trapec($res, 0,0,0.4,0.5);
echo 'NEKOMFORT  = ' . $nokomf.PHP_EOL;
$komf = Rules::trapec($res, 0.4, 0.5, 1, 1);
//$komf = 0;
echo 'KOMFORT  = ' . $komf.PHP_EOL;
if($komf > $nokomf){
    echo  "Маршрут комфортный";
}
if ($nokomf > $komf) {
    echo "Маршрут некомфортный";
}
if ($nokomf == $komf){
    $rand = ["Маршрут комфортный", "Маршрут некомфортный"];
    $rand_keys = array_rand($rand, 2);
    print_r($rand[$rand_keys[0]]);
}