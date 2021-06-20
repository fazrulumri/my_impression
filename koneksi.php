<?php

$dbhost = "localhost";
$dbname = "db_uts_pbwl";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . "", $dbuser, $dbpass);