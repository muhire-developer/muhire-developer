
<html lang="en">
<head>
    <script>
       
            
    function preventBack() {
            window.history.forward();
        }
        setTimeout(preventBack, 0);
        window.onunload = function () { null };
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="post"class ="login-container">
        <h1>login form</h1>
        <label for="">username:</label>
        <input type="text" name="username"><br><br>
        <label for="">password:</label>
        <input type="password" name="password"><br><br>
        <button name="submit">login</button>
    </form>
    
</body>
</html>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","epms");

if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $sql="SELECT * FROM `user` WHERE `username`='$user' AND `password`='$pass'";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) >0){
        $_SESSION['username']=$user;
        $_SESSION['password']=$pass;
        header("location:page.php");

        } else{
            echo"<script>alert('invalid credentials')</script>";
        }
        



    }

?>
 <style>
        body {
            margin: 0;
            padding: 0;
            background: ;
            height: 100vh;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: ;
            padding: 40px 32px 32px 32px;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.18);
            width: 350px;
            max-width: 90vw;
        }
        .login-container h1 {
            text-align: center;
            color: #0074D9;
            margin-bottom: 28px;
            font-size: 2rem;
        }
        .login-container label {
            display: block;
            margin-bottom: 6px;
            color: #333;
            font-weight: 600;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            transition: border 0.1s;
        }
        .login-container input:focus {
            border: 1.5px solid #0074D9;
            outline: none;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background: #0074D9;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .login-container button:hover {
            background: #005fa3;
        }
    </style>