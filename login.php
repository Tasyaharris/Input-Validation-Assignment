<?php
session_start();

    include("connection.php");
    include("function.php");

    //$user_data = check_login($con);
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //posted something
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            //read from database
            

            $query = "select * from users where username = '$username' limit 1 ";
            $result = mysqli_query($conn, $query);
            
            if($result){
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['id'] = $user_data['id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            
            echo "WRONG USERNAME OR PASSWORD";
        }else
        {
            echo "WRONG USERNAME OR PASSWORD";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>

    <form method="POST" action="form.php">
        <div style="font-size: 20px; margin:10px;">Login</div>
        
        <label for="">Username</label>
        <input type="text" name="username">
        <br><br>
        <label for="">Password</label>
        <input type="password" name="password">
        <br><br>

        <input type="submit" value="Login">
        <br><br>

        <a href="signup.php"> Click Here to Signup </a> 
        <br><br>



    </form>

</body>
</html>