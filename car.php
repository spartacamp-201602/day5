<?php

class Car
{
    public $gasoline = 30;

    public function go()
    {
        echo '車が1キロ走りました。';
        $this->gasoline--; // $gasoline が 1L 減る
        echo '残りガソリン:'.$this->gasoline.'L';
    }
}

$myCar = new Car();
$myCar->go();
