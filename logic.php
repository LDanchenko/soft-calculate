<?php
namespace App;
class Logic
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


    //$x -то числочто подает пользователь




    public function getDistance(){
        $dis= $this->distance;

        if ((0<= $dis) and ($dis<= 300)){
            $distance [] = "short";
        }
        if ((200<= $dis) and ($dis<= 500)){
            $distance [] = "normal";
        }
        if (400<= $dis) {
            $distance [] = "long";
        }

        return $distance;
    }

    public function getCost(){
        $c= $this->cost;
        if ((0<= $c) and ($c<= 200)){
            $cost[] = 'low';
        }
        if ((100<= $c) and ($c<= 600)){
            $cost[] = 'normal';
        }
        if (500<= $c) {
            $cost[] = 'high';
        }

        return $cost;
    }

    public function getTraffic(){
        $t= $this->traffic;
        if ((0<= $t) and ($t<= 5)){
            $traffic[] = 'low';
        }
        if ((2<= $t) and ($t<= 8)){
            $traffic[] = 'normal';
        }
        if (6<= $t) {
            $traffic[] = 'high';
        }


        return $traffic;
    }

    public function result()
    {
        $distance = $this->getDistance();
        $traffic = $this->getTraffic();
        $cost = $this ->getCost();
        $resultArray = array();
        $count = 0;
        foreach ($distance as $dist) {
            foreach ($traffic as $traf) {
                foreach ($cost as $cs) {
                    $rule = new Rules($dist, $cs, $traf);
                  $array =   $rule ->base($this->distance,  $this ->cost, $this->traffic);
                    array_push($resultArray,  $array);

                }
            }
        }


return $resultArray;
    }
}
