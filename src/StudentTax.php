<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 19:27
 */

class StudentTax extends AbstractAbstractTax
{
    use TraitGPS;
    protected $taxName = 'Тариф студенческий';
    protected $pricePerKilometer = 4;
    protected $pricePerMinute = 1;

    public function getPrice()
    {
        if ($this->age > 25) {
            echo 'На этом тарифе вам должно быть не более 25 лет';
            die;
        }
        $this->generatePrice();
        return $this;
    }

}