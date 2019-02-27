<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 16:36
 */

abstract class AbstractAbstractTax implements InterfaceAbstractTax
{
    const MIN_AGE = 18;
    const MAX_AGE = 65;
    protected $taxName;
    protected $age;
    protected $factor = 1;
    protected $distance;
    protected $time;
    protected $pricePerKilometer;
    protected $pricePerMinute;
    protected $price;

    public function showTax()
    {
        echo 'Вы едете по: ' . $this->taxName . '.  Ваша цена: ' . $this->price .PHP_EOL;
    }

    public function checkDriverAge($age)
    {
        if ($age < AbstractAbstractTax::MIN_AGE) {
            echo 'Ваш возраст должен быть больше ' . AbstractAbstractTax::MIN_AGE;
            die;
        }
        if ($age > AbstractAbstractTax::MAX_AGE) {
            echo 'Ваш возраст должен быть меньше ' . AbstractAbstractTax::MAX_AGE;
            die;
        }

    }

    public function __construct($distance, $time, $age)
    {
        $this->checkDriverAge($age);
        if ($age >= 18 && $age <= 21) {
            $this->factor = 1.1;
        }
        $this->age = $age;
        $this->distance = $distance;
        if (gettype($time) === 'string') {
            $this->time = $time;
        } else {
            $this->time = $time * 60;
        }
    }

    public function generatePrice()
    {
        $this->price =
            ceil(($this->distance * $this->pricePerKilometer + $this->time * $this->pricePerMinute) * $this->factor);
        return $this;
    }

}