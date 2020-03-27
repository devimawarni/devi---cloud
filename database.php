<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbusername = 'devimawarni';
$dbpassword = 'mawarni4';
$dbname = 'ubayadb';

$c = new mysqli($dbhost, $dbusername, $dbpassword, $dbnama);
if ($c->connect_error) {
  echo "unable to connect, please try again";
  die();
}
?>
