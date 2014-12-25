<?php
$id = $_POST['ID']
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];

$link = mysqli_connect("localhost",
                        "root",
                        "shimu",
                        "students");

$query = "INSERT INTO `students`.`users` (`ID`,
`first_name` ,
`last_name`
)
VALUES ('$id'
    '$firstName', '$lastName'
)";

mysqli_query($link, $query);

header('location:list.php');