<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 20/01/15
 * Time: 20:39
 */

//for devweb ubuntu...
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'strathclyde1');
DEFINE ('DB_NAME', 'infinity');

// Make the connection:
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($link, DB_NAME) or die(mysqli_connect_error());

// Omit the closing PHP tag to avoid 'headers already sent' errors!