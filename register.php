<?php

    $con=mysqli_connect("localhost","root","","project"); //variable to connect to database
    
    if (!$con) //tests connection
    {
      echo 'Not connected to server!';
    }

	$fName = $_POST['firstName']; //variables to get info from the form for the database
	$lName = $_POST['lastName'];
    $email = $_POST['email'];
	$password = $_POST['psw'];

    $sql = "INSERT INTO login (firstName,lastName,email,password) VALUES ('$fName','$lName','$email','$password')"; //variable to insert the info into the database

    if(!mysqli_query($con,$sql)) //tests if inserted
    {
      echo 'Registration Failed';
    }

    else //refreshes the page to put in another entry
    {
      echo 'Registered, redirecting to login page...';
    }

    header("refresh:2; url=login.html")

?>