<?php

require_once "../vendor/autoload.php";
// require "/../src/Hello.php";

use App\Hello;

$salut = new Hello();

echo $salut->getHello();
