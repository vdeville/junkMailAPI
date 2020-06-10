<?php

if(getenv("GIT_PATH_DOMAINS") !== false) {
    define('GIT_PATH_DOMAINS', getcwd() . '../junkMail/domains/');
} else {
    define('GIT_PATH_DOMAINS', getenv('GIT_PATH_DOMAINS'));
}