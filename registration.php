<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
    <form action="posreg.php" method="post">
    <h2>Registration Portal</h2>
    <br>
    <label for="">Name</label>
    <input type="text" name="Uname" id="">
    <br><br>
    <label for="">Phone</label>
    <input type="text" name="phone" id="">
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