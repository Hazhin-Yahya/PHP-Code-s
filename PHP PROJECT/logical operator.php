<?php



$a = true;
$b = false;

// AND operator (&&)
if ($a && $b) {
    echo "Both are true\n";
} else {
    echo "One or both are false\n";
}
echo"<br>";
// OR operator (||)
if ($a || $b) {
    echo "At least one is true\n";
} else {
    echo "Both are false\n";
}
echo"<br>";
// NOT operator (!)
if (!$b) {
    echo "b is false\n";
}
echo "<br";
// Using 'and' and 'or' (lower precedence)
if ($a and $b) {
    echo "Both are true (using 'and')\n";
} else {
    echo "One or both are false (using 'and')\n";
}
echo "<br";
if ($a or $b) {
    echo "At least one is true (using 'or')\n";
} else {
    echo "Both are false (using 'or')\n";
}


















?>