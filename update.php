<?php

$id = $_POST['ID'];
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`users` SET `first_name` = '".$firstName."',
`last_name` = '".$lastName ."' WHERE `users`.`ID` = $id;";

mysqli_query($link, $query);

header('location:list.php');