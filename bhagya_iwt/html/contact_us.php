<?php

    require 'connect.php';
    if(isset($_POST['submit']))
    {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO contact(fname, lname, email, message) VALUES ('$fname', '$lname', '$email', '$message')";
        if($con->query($sql))
        {
            header("Location: dataStoreContactUs.php");
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }