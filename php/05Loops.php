<?php
 
for ($a=0; $a < 100; $a++) { 
      echo $a."   ";
} 


$variable = ["1","12",123,1234,12345,123456];

foreach ($variable as $key => $value) {
    echo  "$value<br>";
}

$b =0;
while ($b <= 100) {
    echo $b."    ";
    $b++;
}

$dowhile = 10;
do {
    echo "$dowhile <=";
} while ($dowhile >= 10);

echo " <br> ";


do {
    ECHO "$a >";
} while ($a > 20);
echo "<br>";
?>
