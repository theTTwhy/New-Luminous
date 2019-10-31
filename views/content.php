<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

switch (true) {
    case stristr($url,'/contact'):
        echo "contact";
        break;
    default:
        echo "Home";
}