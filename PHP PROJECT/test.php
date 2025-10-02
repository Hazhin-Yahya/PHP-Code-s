<html>
    <body>
        <?php 
/*echo is used to print text
what goes around comes around*/


echo "hazhin yahya" ;
echo "<br>";
echo "skyline hazhin";
echo "<br>";
//hazhin yahya sabir awla qadir palany-AKA/the best rizzler 
$txt="hello world ";
$txt="hazhin yahya";
$num =16;
echo $txt."  ".$num.$txt ;
echo "<br>";
echo  strlen("god of war") ;
echo "<br>";
//string position function 
echo strpos ("net dept.","dept.");
//^^^^^string position la zhmara sfr dast pedakay//
//operators//
$x= 25;
echo"addition=" .($x+25);
echo "<br>";
$x= 25;
echo"subtraction=" .($x-20);
echo "<br>";
$x=50;
echo "multipl=" .($x*2);
echo "<br>";
$x=100;
echo "division=". ($x/2);
echo "<br>";
$x=75;
echo "increament=".($x+3);
echo "<br>";
$x=150;
echo"decreament=" .($x-100);
echo"<br>";

//addition

$x=80;
$y=80;
echo $x+=$y;
echo "<br>";
//subtraction

$x=200;
$y=50;
echo $x-=$y;
echo "<br>";
//multiplication

$x=20;
$y=20;
echo $x*$y;

//division
echo "<br>";
$x=100;
$y=20;
echo $x/$y;



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
$d=date("D"); 
if ($d=="Fri") 
 echo "Have a nice weekend!"; 
else 
 echo "Have a nice day!"; 
echo"<br>";
echo "hazhin yahya";
echo "<br>";
// else if (agar bo rozhakani hafta bakar bet )//

$D = date("D");

if ($D=="Sun") 
    echo "happy sunday"; 


elseif ($D=="Mon")
    echo "happy monday ";

elseif ($D=="Tue")
    echo "happy teusday";



elseif($D=="Wed")
    echo "happy wensday";


elseif($D=="Thu")
    echo "happy thursday";

else echo "happy friday ";
echo "<br>";

// else if (agar bo greater than/ less than bakar bet )//

$age = ("age");

if ($age> "24") 
    echo "gentle man "; 


elseif ($age > "16" &&  $age<"23")
    echo "young ";

elseif ($age < "16")
    echo "child";

else
 echo "did not enter the world right now ";


?>

</body>
</html>            