<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "DELETE FROM `students`.`personal_information` WHERE `personal_information`.`id` = $id";

mysqli_query($link, $query);

header('location:list_personal.php');
?>
