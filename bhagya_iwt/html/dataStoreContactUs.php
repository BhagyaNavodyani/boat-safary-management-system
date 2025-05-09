<!DOCTYPE html>
<html>
<head>
     <title>Data Store</title>
     <link rel="stylesheet" href="css/dataStoreContactUs.css">
</head>
<body>
    <table>
        <tr>
            <th>F_name</th>
            <th>L_name</th>
            <th>Email</th>
            <th>Message</th>
            <th></th>
        </tr>

        <?php
            require 'connect.php';

            $sql = "SELECT * FROM contact";

            $result = $con->query($sql);

            if($result->num_rows>0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo '
                    <tr>
                        <td>'.$row['fname'].'</td>
                        <td>'.$row['lname'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['message'].'</td>
                        <td><button class="UpdateBtn"><a href="contactEdit.php?id='.$row['id'].'">update</a></button>
                            <button class="DeleteBtn" ><a href="contactDelete.php?id='.$row['id'].'">Delete</a></button>
                        </td>
                    </tr>
                    ';
                }
            }
            ?>
    </table>
    <br>
</body>
</html>