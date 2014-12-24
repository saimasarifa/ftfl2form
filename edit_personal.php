<?php

$id = $_GET['ID'];
//$lastname = $_GET['last_name'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE  `personal_information` SET full_name ='saima' WHERE `personal_information`.`id` =$id";
//$query ="UPDATE  `students`.`users` SET last_name=' ' WHERE `users`.`ID` = $id";
//$query = "update users WHERE ID= $id";

$result=mysqli_query($link, $query);


//mysql_fetch_array($result);
?>
<ul>
    <li><a href="addin_personal.html">edit</a> </li>
</ul>
<a href="list_personal.php">Back to Home</a>


