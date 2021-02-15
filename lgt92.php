<?php

$json = file_get_contents('php://input');



$data = json_decode($json, true);



$id=$data["dev_id"];

$lat=$data["payload_fields"]["latitude"];

$lon=$data["payload_fields"]["longitude"];

$page = file_get_contents("http://myserveradress.com:5055/?id=$id&lat=$lat&lon=$lon");

?>
