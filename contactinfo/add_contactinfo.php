<?php



$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`contactinfo`( `id`,
`present_address`,
`distric`,
`mobile`,
`emergency_contact`,
`email`

)
VALUES ('".$_POST['id']."','".$_POST['present_address']."','".$_POST['distric']."','".$_POST['mobile']."'
,'".$_POST['emergencycontact']."','".$_POST['email']."');";

mysqli_query($link, $query);

header('location:list_contactinfo.php');