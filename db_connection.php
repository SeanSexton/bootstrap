<?php
function OpenCon()
{
  $dbhost = "127.0.0.1";
  $dbuser = "root";
  $dbpass = "Silverm00n";
  $db = "portfolio";


  $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);

  return $conn;
}


