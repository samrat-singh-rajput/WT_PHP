<?php

date_default_timezone_set("Asia/Kolkata");
$time=date("H.i.s");
echo $time."<br>";

if($time>="00.00.00" && $time<="11.59.59")
{
    echo "Good Morning Samrat";
}
elseif($time>="12.00.00" && $time<="15.59.59")
{
    echo "Good Afternoon Samrat";
}

elseif($time>="16.00.00" && $time<="20.59.59")
{
    echo "Good Evening Samrat";
}

else
{
    echo "Good Night Samrat";
}   
?>