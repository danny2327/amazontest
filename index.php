<?php
require 'vendor/autoload.php';
$factory = new RandomLib\Factory;
$generator = $factory->getMediumStrengthGenerator();
echo 'Sup.  It is working, sort of, I guess. <br>';
echo 'Here is a random number for some fucking reason: ' . $generator->generateInt(5, 15) . ' <br>';


?>