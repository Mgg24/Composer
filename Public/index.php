<?php

require __DIR__ . '/../src/Hello.php';
use App\Hello;

$hello = NEW Hello();
echo $hello->talk();