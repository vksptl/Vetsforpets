<?php 
date_default_timezone_set('Asia/Calcutta');


define("DB_SERVER", "localhost");
define("DB_DATABASE", "vetsforpets1");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

// Create connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//mysqli_set_charset($link, 'utf8');

