<?php

$a1=array("a"=>"black","b"=>"red","c"=>"yellow","d"=>"green");
//$a2=array("a"=>"black","b"=>"red","k"=>"yellow","d"=>"orange");
$a2=array("1"=>"black","2"=>"red","3"=>"yellow","4"=>"orange");

 
echo "<pre>";

print_r(array_diff($a1,$a2));
print_r(array_diff_key($a1,$a2));
print_r(array_diff_assoc($a1,$a2));



echo "</pre>";

?>