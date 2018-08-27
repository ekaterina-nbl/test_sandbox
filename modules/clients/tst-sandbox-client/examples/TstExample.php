<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Tst\Calc\Calculator;
$calc = new  Calculator();
echo($calc->add(1, 2));