<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 19:37
 */

trait TraitGPS
{

    private $gpsPricePerHour = 15;

    public function generatePrice()
    {
        parent::generatePrice();
        $this->price = $this->price + (ceil($this->time / 60)) * $this->gpsPricePerHour;
    }

}

