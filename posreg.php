<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = $_POST['Uname'];
    $Phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
   
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $database = "registration";
    # create a connection
    $con = mysqli_connect($servername,$username,$dbpassword,$database);
    
    # die if connection was unsuccessful
    if(!$con) {
        die("Sorry we failed to connect" . mysqli_connect_error($con));
    }
    else{
        echo "Connection Established<br><br>";
    }
    
    # create a table in the DB
    $sql = "INSERT INTO portal values('$Name','$Phone','$email','$password')";
    $result = mysqli_query($con,$sql);
    
    if($result) {
        echo "Row inserted in table successfully.";
    }
    else {
        echo "Row not inserted in table succesfully because of this error ---> " . mysqli_error($con);
    }
}
?>