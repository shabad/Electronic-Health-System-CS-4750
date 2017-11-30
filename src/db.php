<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','Shabad@97','ehs');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>
