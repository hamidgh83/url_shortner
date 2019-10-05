<?php

require_once __DIR__.'/../vendor/autoload.php';

use Url\Shortner;

$shotrner = new Shortner;

$id = readline("Enter a number: ");
$encodedStr = $shotrner->encode($id);
echo "Your encoded number is: " . $encodedStr;
echo "\n\n";

$str = readline("Enter a string: ");
echo "The corresponding value for the string is: " . $shotrner->decode($str);

echo "\n\n";