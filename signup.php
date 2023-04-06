<?php
session_start();

    include("connection.php");
    include("function.php");

    //$username_error = $pass_error= " ";

    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password))
        {
            //validate username 
            if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"])))
            {
                echo "Username can only contain letters, numbers, and underscores.";
            } //validate password
            elseif(strlen(trim($password)) < 6){
                echo "Password must have atleast 6 characters.";
            }// save to database
             else{

                $id = random_num(20);
                $username = $username;
                $password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                $query = "INSERT INTO users (id, username, password) value ('$id', '$username', '$password')";
                mysqli_query($conn, $query);

                header("Location: login.php");
                die;

                }
            }// if the input box is empty
            else
            {
            echo "Please fill in username and password";
            }
        }
    

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
   
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>

    <form method="POST" action="">
        <div style="font-size: 20px; margin:10px;">Signup</div>
        
        <label for="">Username</label>
        <input type="text" name="username" id="text">
       
        <br><br>
        <label>Password</label>
        <input type="password" name="password" id= "text">
        <br><br>

        <input type="submit" value="Signup">
        <br><br>

        <a href="login.php"> Click Here to Login </a> 
        <br><br>



    </form>

</body>
</html>