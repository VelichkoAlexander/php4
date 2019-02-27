<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 20:11
 */

trait TraitAdditionalDriver
{
    private $AdditionalDriverTax = 100;

    public function addAdditionalDriverTax()
    {
        $this->price = $this->price + $this->AdditionalDriverTax;

    }

}