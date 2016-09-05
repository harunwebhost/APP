<?php 
$ip = '203.129.219.82';
$location = file_get_contents('http://freegeoip.net/json/'.$ip);
$data=json_decode($location);
echo $data->city;