<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset(['username'])){
    $user=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where User='".$user."'AND Pass='".$password. "' 
    limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result==1)){
        echo"success";
        exit();
    }
    else{
        echo"tyou arev  failed";
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="css/log.css" >
    <title>login</title>
</head>
<body>
    <style>
        body {
          background-image: url('image/bg.jpg');
         
        }
        </style>
        
    <form method="POST" action="#" class="box">
    <h1>Login</h1>
   
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" class="login">
    
</form>
</body>
</html>