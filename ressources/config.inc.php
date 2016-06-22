<?php

require_once 'app/php-github-api/vendor/autoload.php';


$client = new \Github\HttpClient\CachedHttpClient();
$client->setCache(
// Built in one, or any cache implementing this interface:
// Github\HttpClient\Cache\CacheInterface
    new \Github\HttpClient\Cache\FilesystemCache('/tmp/github-api-cache')
);

$client = new \Github\Client($client);

//$client->authenticate($usernameOrToken, $password, $method);