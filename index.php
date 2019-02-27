<?php
/**
 * Created by PhpStorm.
 * User: fessa
 * Date: 27.02.2019
 * Time: 16:25
 */

require_once 'src/AbstractTax.php';
require_once 'src/BaseTax.php';


$newtarif = new BaseTax(5,60,20);

$newtarif->generatePrice()->showTax();
