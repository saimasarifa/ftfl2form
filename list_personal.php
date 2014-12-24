<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from personal_information;";

$result = mysqli_query($link, $query);


?>

<ul>
    <li><a href="http://free-pdf-reader.en.softonic.com/download">Download PDF reader</a> </li></p>
    <li><a href="https://wordpress.com/wp-login.php?">Wordpress login</a> </li><p></p>
    <li><a href="create_personal.html">Create New</a> </li>
</ul>

<table border="1" width="100%">
    <tr>
        <td>ID</td><p>
        <td>Name</td>
        <td>Father's name</td>
        <td>Mother's name</td>
        <td>Religion </td>
        <td>Date_of_birth</td>
        <td>Gender</td>
        <td>Nationality</td>
        <td>National_ID</td>
        <td> </br> Action</td>

    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row["father's_name"]?></td>
            <td><?php echo $row["mother's_name"]?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['date_of_birth']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['national_id']?></td>

            <td>
                <a href="view_personal.php?id=<?php echo $row['id']?>">View/Show</a> |

                <a href="edit_personal.php?ID=<?php echo $row['id']?>">Edit</a> |


                <a href="delete_personal.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>

    <?php
    }
    ?>

</table>
