
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="post"class ="login-container">
        <h1>signup form</h1>
      
        <input type="text" name="firstname" placeholder="firstname" required><br><br>
        <input type="text" name="lastname" placeholder="lastname" required><br><br>
        <input type="text" name="username" placeholder="username" required><br><br>
        <input type="password" name="password" placeholder="password " required><br><br>
        <button name="submit">sign up</button>
    </form>
    
</body>
<?php
$conn=mysqli_connect("localhost","root","","epms");
if(isset($_POST['submit'])){
    $fir=$_POST['firstname'];
    $las=$_POST['lastname'];
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $sql="INSERT INTO `user`(`id`, `firstname`, `lastname`, `username`, `password`) VALUES ('','$fir','$las','$user','$pass')";
    $res=mysqli_query($conn,$sql);
header("location:login.php");
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