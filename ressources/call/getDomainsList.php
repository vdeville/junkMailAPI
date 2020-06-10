<?php

require_once '../config.inc.php';

$domains = [];

$domainsList = scandir(GIT_PATH_DOMAINS);

foreach ($domainsList as $file) {
    if (!is_dir($file)) {
        array_push($domains, $file);
    }
}

header('Content-Type: application/json');

echo json_encode($domains, JSON_FORCE_OBJECT);
