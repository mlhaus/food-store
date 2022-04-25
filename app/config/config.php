<?php
define("APPROOT", dirname(dirname(__FILE__)));
$host = substr($_SERVER['HTTP_HOST'], 0, 5);
if (in_array($host, array('local', '127.0', '192.1'))) {
    $local = TRUE;
} else {
    $local = FALSE;
}
if ($local) {
    $debug = true;
    define('URLROOT', 'http://localhost/food-store');
} else {
    $debug = false;
    define('URLROOT', 'https://march26.sg-host.com');
}
define("CURRENTYEAR", date("Y"));
define("SITENAME", "Marc Hauschildt");
define("FACEBOOK_URL", "https://www.facebook.com");
define("TWITTER_URL", "https://www.twitter.com");
define("INSTAGRAM_URL", "https://www.instagram.com");

if ($local) {
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PORT", "3307");
    define("DB_PASS", "password");
    define("DB_NAME", "shareposts");
} else {
    define("DB_HOST", "localhost");
    define("DB_USER", "unbwvicrnfxy6");
    define("DB_PORT", "3306");
    define("DB_PASS", "j7pxzahd4urm");
    define("DB_NAME", "dbpnjl26ghr7qj");
}