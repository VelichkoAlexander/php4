<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 18:34
 */

class PerDay extends AbstractAbstractTax
{
    use TraitGPS, TraitAdditionalDriver;
    protected $taxName = 'Тариф суточный';
    protected $pricePerKilometer = 1;
    protected $pricePerMinute = 1000;

    public function getPrice()
    {
        $time = explode(':', $this->time);
        $time = $time[0] * 24 * 60 + $time[1] * 60 + $time[2];
        $this->time = (ceil(($time - 29) / 1440)) ;
        $this->generatePrice();
        $this->addAdditionalDriverTax();
        return $this;
    }

}