<?php

//simple counter to test sessions. should increment on each page reload.
session_start();
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;

echo $count;

$_SESSION['count'] = ++$count;

echo "<br/>";
echo sprintf("I run on port %s", $_SERVER['SERVER_PORT']);
