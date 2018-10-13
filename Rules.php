<?php

namespace App;
class Rules
{
    protected $distance;
    protected $cost;
    protected $traffic;

    public function __construct($distance, $cost, $traffic)
    {
        $this->distance = $distance;
        $this->cost = $cost;
        $this->traffic = $traffic;
    }

    public static function trapec($x, $a,$b, $c,$d){
        $res = 0;
        if ($x <= $a) {
            $res = 0;
        }
        if (($a <= $x) and ($x <= $b)) {
            $res = ($x-$a) / ($b- $a);
        }
        if (($b <= $x) and ($x <= $c)) {
            $res = 1;
        }
        if (($c <= $x) and ($x <= $d)) {
            $res = ($d-$x) / ($d- $c);
        }
        if ($d<=$x){
            $res=0;
        }
        return $res;
    }

public function comfortArray($min, $a, $b, $c, $d ){
       $duration = 0.1;
        $array = array();
       for ($x = 0; $x<=1; $x+=$duration){
            $y = self::trapec($x, $a,$b,$c, $d);
            if ($y <=$min){
                array_push($array,$y);
            }
            else {
                array_push($array, $min);
            }
       }
       return $array;
}

    public  function base($distance,  $cost, $traffic){
        if ($this->distance=='short'and $this->cost=='low'and $this->traffic=='low'){
            echo 'short, low, low, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 0,0,2,4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5, 1,1 );
            print_r($array);
        }

        if ($this->distance=='short'and $this->cost=='normal'and $this->traffic=='low'){
            echo 'short, normal, low, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 100,200,500,600);
            $tr = self::trapec($traffic, 0,0,2,4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5, 1,1 );
            print_r($array);
        }

        if ($this->distance=='short'and $this->cost=='high'and $this->traffic=='low'){
            echo 'short, high, low, nekomfort'.PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 500,600,800,900);
            $tr = self::trapec($traffic, 0,0,2,4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='short'and $this->cost=='low'and $this->traffic=='normal'){
            echo 'short, low, normal, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 2,4,6,8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5, 1, 1 );
            print_r($array);
        }

        if ($this->distance=='short'and $this->cost=='low'and $this->traffic=='high'){
            echo 'short, low, high, nekomfort ' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 6,8,10,12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='short'and $this->cost=='normal'and $this->traffic=='normal'){
            echo 'short, normal, normal, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 100,200,500,600);
            $tr = self::trapec($traffic, 2,4,6,8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5, 1, 1 );
            print_r($array);
        }
        if ($this->distance=='short'and $this->cost=='high'and $this->traffic=='high'){
            echo 'short, high, high, nekomfort ' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 500,600,800,900);
            $tr = self::trapec($traffic, 6,8,10,12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='short'and $this->cost=='normal'and $this->traffic=='high'){
            echo 'short, normal, high, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 100,200,500,600);
            $tr = self::trapec($traffic, 6,8,10,12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='short'and $this->cost=='high'and $this->traffic=='normal'){
            echo 'short, high, normal, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 0, 0, 200, 300);
            $cs = self::trapec($cost, 500,600,800,900);
            $tr = self::trapec($traffic, 2,4,6,8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='low'and $this->traffic=='low'){
            echo 'normal, low, low, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 0,0,2,4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min,  0.4, 0.5 , 1,1 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='low'and $this->traffic=='normal'){
            echo 'normal, low, normal, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 2,4, 6, 8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5, 1, 1 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='low'and $this->traffic=='high'){
            echo 'normal, low, high, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 6,8,10,12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='normal'and $this->traffic=='low'){
            echo 'normal, nowmal, low, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 100,200,500,600);
            $tr = self::trapec($traffic, 0,0,2,4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min,  0.4, 0.5, 1, 1 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='normal'and $this->traffic=='normal'){
            echo 'normal, nowmal, normal, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 100,200,500,600);
            $tr = self::trapec($traffic, 2,4, 6, 8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5, 1, 1 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='normal'and $this->traffic=='high'){
            echo 'normal, normal, high, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 100,200,500,600);
            $tr = self::trapec($traffic, 6, 8, 10, 12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='high'and $this->traffic=='low'){
            echo 'normal, high, low, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 500,600,800,900);
            $tr = self::trapec($traffic, 0, 0, 2, 4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='high'and $this->traffic=='normal'){
            echo 'normal, high, nowmal, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 500,600,800,900);
            $tr = self::trapec($traffic, 2, 4, 6, 8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='normal'and $this->cost=='high'and $this->traffic=='high'){
            echo 'normal, high, high, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 200, 300,400 ,500);
            $cs = self::trapec($cost, 500,600,800,900);
            $tr = self::trapec($traffic, 6, 8, 10, 12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='low'and $this->traffic=='low'){
            echo 'long, low, low, komfort' .PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 0, 0, 2, 4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5 , 1, 1);
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='low'and $this->traffic=='normal'){
            echo 'long, low, normal, komfort ' .PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic,  2, 4, 6, 8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0.4, 0.5, 1, 1 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='low'and $this->traffic=='high'){
            echo 'long, low, high, nekomfort '.PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 0,0,100,200);
            $tr = self::trapec($traffic, 6 , 8, 10, 12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='normal'and $this->traffic=='low'){
            echo 'long, normal, low, komfort '.PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 100,200, 500, 600);
            $tr = self::trapec($traffic, 0, 0, 2, 4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min,  0.4, 0.5, 1, 1 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='normal'and $this->traffic=='normal'){
            echo 'long, normal, normal, nekomfort '.PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 100,200, 500, 600);
            $tr = self::trapec($traffic,  2, 4, 6, 8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min,  0, 0, 0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='normal'and $this->traffic=='high'){
            echo 'long, normal, high, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 100,200, 500, 600);
            $tr = self::trapec($traffic,  6, 8, 10, 12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0,0,  0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='high'and $this->traffic=='low'){
            echo 'long, high,low, nekomfort \n' .PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 500, 600,800, 900);
            $tr = self::trapec($traffic,  0, 0, 2, 4);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0,0,  0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='high'and $this->traffic=='normal'){
            echo 'long, high, normal, nekomfort' .PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 500, 600,800, 900);
            $tr = self::trapec($traffic,   2, 4,6, 8);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0,0,  0.4, 0.5 );
            print_r($array);
        }
        if ($this->distance=='long'and $this->cost=='high'and $this->traffic=='high'){
            echo 'long, high,high, nekomfort '.PHP_EOL;
            $dist = self::trapec($distance, 400, 500,700 ,800);
            $cs = self::trapec($cost, 500, 600,800, 900);
            $tr = self::trapec($traffic,  6, 8, 10,12);
            echo ' ' .$dist .PHP_EOL;
            echo ' ' . $cs . PHP_EOL;
            echo  ' ' . $tr  .PHP_EOL;
            $min = min($tr, $dist, $cs);
            echo 'min = ' . $min.PHP_EOL;
            $array = self::comfortArray($min, 0,0,  0.4, 0.5 );
            print_r($array);
        }
        return $array;

    }

}
