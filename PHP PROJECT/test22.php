<?php

for ($i = -5; $i <= 5; $i++) {
    if ($i > 0) {
        echo "$i is a positive number<br>";
    } elseif ($i < 0) {
        echo "$i is a negative number<br>";
    } else {
        echo "$i is zero<br>";
    }
}


$speed = 70; // Example speed value

if ($speed <= 0) {
    echo "The vehicle is stationary.<br>";
} elseif ($speed > 0 && $speed <= 30) {
    echo "The vehicle is moving slowly.<br>";
} elseif ($speed > 30 && $speed <= 60) {
    echo "The vehicle is moving at a moderate speed.<br>";
} elseif ($speed > 60 && $speed <= 100) {
    echo "The vehicle is moving fast.<br>";
} else {
    echo "The vehicle is moving at a very high speed.<br>";
}



$i = 1;
while ($i <= 25) {
    echo "$i<br>";
    $i += 3; // Increment by 3
}






$string = "PHP: Hypertext Preprocessor";
$length = strlen($string);
echo "The length of the string '$string' is $length.";
?>





































f
?>
        