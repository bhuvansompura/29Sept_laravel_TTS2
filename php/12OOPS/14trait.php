<?php


// class A{}
// class B{}
// // class C extends A,B {} // wrong
// // class C extends A extends B  {} // wrong
// // class C  extends B  {} // only without b extends A single//
// // class C  extends B  {} // multi level with B extrect A




trait customtrait{
   function simplemethodcustomtrait()
    {
        return "something customtrait123 ";
    }
}

trait customtrait12{
    function simplemethodcustomtrai2()
     {
         return "something customtrait12";
     }
 }
 
trait customtrait123{
    function simplemethodcustomtrait123()
     {
         return "something customtrait123";
     }
 }

 class customclassFrotrait{
    use customtrait;
    use customtrait12;
    use customtrait123;
    // use customtrait123,customtrait,customtrait12// this is right
    public function __construct() {
        echo "<br>";
        print_r($this->simplemethodcustomtrait());
        echo "<br>";
        print_r($this->simplemethodcustomtrait());
        echo "<br>";
        print_r($this->simplemethodcustomtrait());
        echo "<br>";
    }
 }

$customclassFrotrait = new customclassFrotrait;

?>