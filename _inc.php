<?php

/* Configure le limiteur de cache à 'private' */

session_cache_limiter('public');
$cache_limiter = session_cache_limiter();

/* Configure le délai d'expiration à 30 minutes */
session_cache_expire(60);
$cache_expire = session_cache_expire();

/* Démarre la session */

session_start();


$file = __FILE__;
$last_modified_time = filemtime($file);
$etag ='W/"' . md5($last_modified_time) . '"';


header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $last_modified_time) . " GMT", true);
header("Etag: $etag", true);


if(
    (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) === $last_modified_time) ||
    (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $etag === trim($_SERVER['HTTP_IF_NONE_MATCH']))
){
    header('HTTP/1.1 304 Not Modified');
    exit();
}

function dd($var)
{
    var_dump($var);
    die();
}

require "App/Form.php";
require "App/Validator.php";
