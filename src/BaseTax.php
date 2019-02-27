<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 16:42
 */

class BaseTax extends AbstractTax
{
    protected $taxName = 'Тариф базовый';
    protected $pricePerKilometer = 10;
    protected $pricePerMinute = 3;

    public function generatePrice()
    {
        $this->price =
            ($this->distance * $this->pricePerKilometer + $this->time * $this->pricePerMinute) * $this->factor;
        return $this;
    }

}