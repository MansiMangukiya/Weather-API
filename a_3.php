<?php

$zip=$_GET["zip"];
if (!preg_match('/^\d{5}$/',$zip))
{
    alert("Invalid zipcode. Please try again!");
    
}



sleep (5);
$url = "http://api.openweathermap.org/data/2.5/weather?zip=$zip,us&units=metric&appid=67d9b5d0929070596ff5a9d931fde259";
$fp = fopen ( $url , "r" );
$content = "";
while ($more = fread ($fp, 3000)) 
{ 
    $contents .= $more; 
}
echo $contents ;

?>
