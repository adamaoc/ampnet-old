<?php
// $data = file_get_contents($path.'/data/api.json');
$data = file_get_contents('http://app.ecwid.com/api/v1/2557029/random_products?count=8');
$data = json_decode($data);

