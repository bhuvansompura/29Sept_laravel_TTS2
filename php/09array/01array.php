<?php

//index array

$arr=["hello","1","true",'A'];


for ($i=0; $i < sizeof($arr); $i++) { 
    echo $arr[$i];
    echo "<br>";


}
echo"<br>";


foreach ($arr as $key => $value) {
    echo $value;
    echo "<br>";
    
}
   //associative array


   $arr=array("tom"=>40,"ben"=>50,"john"=>60);


   foreach ($arr as $key => $value) {
    echo "$key => $value";
    echo "<br>";

    //tom => 40
       //ben => 50
       //john => 60

   }
   

    // multidimantion array

$arr=array("10th"=>array("students"=>array("jay"=>array("maths"=>"50","eng"=>"80","hindi"=>"70"),
                  "peater parker"=>array("maths"=>"90","eng"=>"80","hindi"=>"70"),
                  "john wick"=>array("maths"=>"70","eng"=>"56","hindi"=>"60"))),
                
                  "11th"=>array("students"=>array("jay"=>array("maths"=>"50","eng"=>"80","hindi"=>"70"),
                  "peater parker"=>array("maths"=>"90","eng"=>"80","hindi"=>"70"),
                  "john wick"=>array("maths"=>"70","eng"=>"56","hindi"=>"60"))),


                  
                  "12th"=>array("students"=>array("jay"=>array("maths"=>"50","eng"=>"80","hindi"=>"70"),
                  "peater parker"=>array("maths"=>"90","eng"=>"80","hindi"=>"70"),
                  "john wick"=>array("maths"=>"70","eng"=>"56","hindi"=>"60"))));

                   

                   
                  echo "<pre>";
                  print_r($arr);


?>