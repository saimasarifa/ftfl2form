<?php


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from contactinfo;";

$result = mysqli_query($link, $query);


?>

<ul>

    <li><a href="../personalinfo/create_personalinfo.html">Create New personal information</a> </li>
    <li><a href="create_contactinfo.html">Create New contact</a> </li>
</ul>

<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>present address</td>
        <td>distric</td>
        <td>mobile</td>
        <td>emergency contact</td>
        <td>email</td>

    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row["distric"]?></td>
            <td><?php echo $row["mobile"]?></td>
            <td><?php echo $row['emergency_contact']?></td>
            <td><?php echo $row["email"]?></td>

            <td>
                <a href="view_contactinfo.php?id=<?php echo $row['id']?>">View/Show</a> |

                <a href="edit_contactinfo.php?id=<?php echo $row['id']?>">Edit</a> |

                <a href="delete_contactinfo.php?id=<?php echo $row['id']?>">Delete</a> |


            </td>
        </tr>

    <?php
    }
    ?>

</table>



