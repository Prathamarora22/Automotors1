[9:42 am, 18/12/2022] Aditi Dogra: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <style>
        input{
            padding: 7px;
        }

        label{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="Poslogin.php" method="post">
    <h2>Login Portal</h2>
    <br><br>
    <label for="">Email ID</label>
    <input type="text" name="email" id="">
    <br><br>
    <label for="">Password</label>
    <input type="password" name="pass" id="">
    <br><br>
    <input type="submit">
    </form>
</body>
</html>
[9:42 am, 18/12/2022] Aditi Dogra: Back End (Login Form)

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];
   
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $database = "school";
    # create a connection
    $con = mysqli_connect($servername,$username,$dbpassword,$database);
    
    # die if connection was unsuccessful
    if(!$con) {
        die("Sorry we failed to connect" . mysqli_connect_error($con));
    }
    else{
        echo "Connection Established<br><br>";
    }
    
    # Login Algo
    $sql = "SELECT * from student where Email = '$email' AND Credential = '$password'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num) {
        echo "Welcome 😊🎊 you are loggined successfully";
    }
    else {
        echo "Invalid email or Password ❌";
    }
}
?>