<?php

$name = $_POST['name1'];
$email  = $_POST['email1'];
$password = $_POST['password1'];
$message = $_POST['message1'];
$conn= mysqli_connect("localhost","root","","aruna");

$sql = "INSERT INTO contact (name,email,password,message)values('$name','$email','$password','$message')";
$r=mysqli_query($conn,$sql);

if($r){
    echo 'successfully submit';
}
else{
    echo 'Not sucessfully submit';
}
?>