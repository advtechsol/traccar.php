<?php

$json = file_get_contents('php://input');

$data = json_decode($json, true);

$id=$data["imei"];

$hexvalue=$data["data"];

$hexdata=hex2bin($hexvalue);

//echo $hexdata.'<br>' ;

$items = explode(",", $hexdata); //carve up the csv string

$time = $items[0];
$lat = $items[1];
$lng = $items[2];
$alt = $items[3];
$course = $items[5];
$bat = $items[7];

/*
echo "Time: ".$time.'<br>';
echo "Latitude: ".$lat.'<br>';
echo "Longitude: ".$lng.'<br>';
echo "Altitude: ".$alt.'<br>';
echo "Course: ".$course.'<br>';
echo "Battery: ".$bat.'<br>';
*/

$page = file_get_contents("http://<serveraddress>:5055/?id=$id&lat=$lat&lon=$lng&course=$course&battery=$bat");


?>
