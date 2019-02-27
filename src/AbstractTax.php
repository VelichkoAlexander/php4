<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 16:36
 */

abstract class AbstractTax
{
    const MIN_AGE = 18;
    const MAX_AGE = 65;
    protected $taxName;
    protected $factor = 1;
    protected $distance;
    protected $time;
    protected $pricePerKilometer;
    protected $pricePerMinute;
    protected $price;

    public function showTax()
    {
        echo 'Вы едете по тарифу: ' . $this->taxName . 'Ваша цена: ' . $this->price;
    }

    public function checkDriverAge($age)
    {
        if ($age < AbstractTax::MIN_AGE) {
            echo 'Ваш возраст должен быть больше ' . AbstractTax::MIN_AGE;
            die;
        }
        if ($age > AbstractTax::MAX_AGE) {
            echo 'Ваш возраст должен быть меньше ' . AbstractTax::MAX_AGE;
            die;
        }

    }

    public function __construct($distance, $time, $age)
    {
        $this->checkDriverAge($age);
        if ($age >= 18 && $age <= 21) {
            $this->factor = 1.1;
        }
        $this->distance = $distance;
        $this->time = $time;
    }

}