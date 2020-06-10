<?php

if(getenv('GIT_PATH_DOMAINS') !== false) {
    define('GIT_PATH_DOMAINS', getenv('GIT_PATH_DOMAINS'));
} else {
    define('GIT_PATH_DOMAINS', '/data/junkMail/domains/');
}