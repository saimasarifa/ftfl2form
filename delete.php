<?php

$id = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "DELETE FROM `students`.`users` WHERE `users`.`ID` = $id";

mysqli_query($link, $query);

header('location:list.php');
?>