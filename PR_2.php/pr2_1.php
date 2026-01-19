<?php
    $ex1=20;
    $ex2="anuj";

    echo $ex1."<br>";
    echo $ex2."<br>";
    echo $ex1."  ".$ex2."<br>";
    echo $ex1,$ex2;
//2
    $ex3=20;
    $ex4="anuj";

    print $ex3."<br>";
    print $ex4."<br>";
    print $ex3."  ".$ex4."<br>";

//3

    //echo phpinfo();

//4

 define("name","Anuj");
 echo name."<br>";

//5

    $a=10;
    $b="anuj";
    $c=20.5;
    var_dump($a)."<br>";
    var_dump($b)."<br>";
    var_dump($c)."<br>";
//6
    echo "<br>";
    date_default_timezone_set("Asia/Kolkata");
    echo date("d-m-y H.i.s")."<br>";
    echo date("h.i.s")."<br>";
    echo date("F d, Y l D h.i.s A a")."<br>";  //F-full month, l-full day, D-short day, A-AM/PM, a-am/pm    



    echo "<br>";
    $d=strtotime("10:30pm April 15 2014");
    echo date("d-m-y h.i.s A",$d)."<br>";

    $d1=strtotime("tomorrow");
    echo date("d-m-y h.i.s A",$d1)."<br>";

    $d2=strtotime("next Saturday");
    echo date("d-m-y h.i.s A",$d2)."<br>";

    $d3=strtotime("+3 Months");
    echo date("d-m-y h.i.s A",$d3)."<br>";

//7
    echo time()."<br>";



    


    

?>