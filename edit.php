<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from users WHERE ID = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);



?>

<form action="update.php" method="post">

    <label>ID:</label>
    <input type="text" name="ID" value="<?php echo $row['ID'];?>" />


    <label>First Name:</label>
    <input type="text" name="firstName" value="<?php echo $row['first_name'];?>" />

    <label>Last Name:</label>
    <input type="text" name="lastName" value="<?php echo $row['last_name'];?>" />

    <button type="submit">Submit</button>

</form>
<a href="list.php">Back to Home</a>

