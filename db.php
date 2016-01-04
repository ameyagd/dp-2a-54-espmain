<?php

// we connect to example.com and port 3307
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

//echo 'Connected successfully';
$database = mysql_select_db('espmain') or die( "Unable to select database");
// mysql_close($link);
?>