<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 16:42
 */

class BaseTax extends AbstractAbstractTax
{
    use TraitGPS;
    protected $taxName = 'Тариф базовый';
    protected $pricePerKilometer = 10;
    protected $pricePerMinute = 3;

    public function getPrice () {
        $this->generatePrice();
        return $this;
    }

}