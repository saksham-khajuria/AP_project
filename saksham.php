<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];

    $connection = new mysqli('localhost','root','','Saksham_Project');
    if($connection->connect_error){
        die('Connection Failed');
    }
    else{
        $stmt = $connection->prepare("Insert into registration(fname,lname,mobile,email,password,gender) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss",$fname,$lname,$mobile,$email,$password,$gender);
        $stmt->execute();
        echo "DATA Stored in MySQL successfully!!";
        $stmt->close();
        $connection->close();
    }
?>
</body>
</html>
