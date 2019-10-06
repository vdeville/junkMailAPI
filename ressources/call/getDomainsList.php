<?php

require_once '../config.inc.php';
include_once '../functions.inc.php';

$domains = array();

$domainsList = scandir(GIT_PATH_DOMAINS);

foreach ($domainsList as $file){
    if(!is_dir($file)){
        array_push($domains, $file);
    }
}

header('Content-Type: application/json');

echo jsonJeTeCode($domains);
