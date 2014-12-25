<?php

$id = $_GET['ID'];
//$lastname = $_GET['last_name'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE  `students`.`personal_information` WHERE `personal_information`.`id` =$id";
//$query ="UPDATE  `students`.`users` SET last_name=' ' WHERE `users`.`ID` = $id";
//$query = "update users WHERE ID= $id";

$result=mysqli_query($link, $query);


mysql_fetch_assoc($result);
?>
<ul>
    <li><a href="addin_personal.php">edit</a> </li>
</ul>
<a href="list_personal.php">Back to Home</a>


