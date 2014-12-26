<?php

$id = $_POST['id'];
$presentaddress = $_POST['present_address'];
$distric =$_POST['distric'];
$mobile =$_POST['mobile'];
$emergencycontact =$_POST['emergency_contact'];
$email = $_POST['email'];



$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "UPDATE `students`.`contactinfo` SET `present_address` = '".$presentaddress."' ,`distric` = '".$distric."',
`mobile` = '".$mobile."',`emergency_contact` = '".$emergencycontact."',`email` = '".$email."'
 WHERE `contactinfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list_contactinfo.php');