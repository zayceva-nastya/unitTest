<?php

include "../vendor/autoload.php";

use App\Str;

$str = new Str();

echo $str->compare("Hello","Hellfo")*1;