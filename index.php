<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 16:25
 */
require_once 'src/InterfaceAbstractTax.php';
require_once 'src/TraitGPS.php';
require_once 'src/TraitAdditionalDriver.php';
require_once 'src/AbstractAbstractTax.php';
require_once 'src/BaseTax.php';
require_once 'src/PerHour.php';
require_once 'src/PerDay.php';
require_once 'src/StudentTax.php';


$baseTax = new BaseTax(5, 60, 20);
$perHour = new PerHour(5, 1, 20);
$perDay = new PerDay(5, '0:24:30', 20);
$studentTax = new StudentTax(5, 2, 25);

//$baseTax->getPrice();
//$perHour->getPrice();
//$perDay->getPrice();
$studentTax->getPrice()->showTax();