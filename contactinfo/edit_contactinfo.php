<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from contactinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);



?>

<form action="update_contactinfo.php" method="post">
    <h1> contact info edit form</h1>

    <label>ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>

        <label>present address:</label>
        <input type="text" name="present_address" value="<?php echo $row['present_address'];?>" /><p>

        <label>Distric:</label>
        <input type="text" name="distric" value="<?php echo $row["distric"];?>" /><p>
        <label>mobile number:</label>
        <input type="text" name="mobile" value="<?php echo $row["mobile"];?>" /><p>
        <label>Emergency contact:</label>
        <input type="text" name="emergency_contact" value="<?php echo $row["emergency_contact"];?>" /><p>
        <label>email :</label>
        <input type="text" name="email" value="<?php echo $row["email"];?>" /><p>




        <button type="submit">Submit</button>

</form>

<a href="list_contactinfo.php">Back to Home</a>

