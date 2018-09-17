<?php

require('config.php');

extract($_POST);

$sql = "INSERT into contact(name,people,date,message) VALUES('" . $name . "','" . $people . "','" . $date . "','" .  $message . "','" . date('Y-m-d') . "')";

$success = $mysqli->query($sql);

if (!$success) {

    die("Couldn't enter data: ".$mysqli->error);

}

echo "Thank You For Contacting Us ";

$conn->close();

?>