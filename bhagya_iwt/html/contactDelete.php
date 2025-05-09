<?php
require 'connect.php';
    $id  = $_GET['id'];
    $sql = "DELETE FROM contact WHERE id = $id";
    if($con->query($sql))
    {
        header('Location: dataStoreContactUs.php');
    }
    ?>
