<?php

$x = rand(0,100);
echo "Число: " . $x .PHP_EOL;

$a = 1;
$b = 1;

while (true) {
    if ($a>$x) {
        echo "задуманное число НЕ входит в числовой ряд";
        break;
    }
    else {
        if ($a==$x) {
            echo "задуманное число входит в числовой ряд";
            break;
        }
        else {
            $c=$a;
            $a=$a + $b;
            $b=$c;
        }
    }
}

?>
