<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 17:37
 */

class PerHour extends AbstractAbstractTax
{
    use TraitGPS, TraitAdditionalDriver;
    protected $taxName = 'Тариф почасовой';
    protected $pricePerKilometer = 0;
    protected $pricePerMinute = 3.33;

    public function getPrice () {
        $this->time = 60 + ceil($this->time);
        $this->generatePrice();
        $this->addAdditionalDriverTax();
        return $this;
    }

}