<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 20:26
 */

interface InterfaceAbstractTax
{
    public function showTax();
    public function checkDriverAge($age);
    public function generatePrice();
    public function getPrice();
}