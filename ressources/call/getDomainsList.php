<?php

require_once '../config.inc.php';
include_once '../functions.inc.php';


$fileInfo = $client->api('repo')->contents()->show('MyTheValentinus', 'junkMail', 'domains');

$array = array();

foreach ($fileInfo as $file){
    array_push($array, $file['name']);
}

echo jsonJeTeCode($array);
