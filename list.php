<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from users;";

$result = mysqli_query($link, $query);


?>

<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.html">Create New</a> </li>
</ul>

<table border="1" width="70%">
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Action</td>
        </tr>
<?php
        foreach($result as $row){
?>

    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td>
             <a href="view.php?ID=<?php echo $row['ID']?>">View/Show</a> |

                <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a> |

                <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> |


        </td>
    </tr>

<?php
        }
?>

</table>



