<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from contact_information WHERE id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>
<p>
    <a href="list_contact.php">Back to table view</a>

