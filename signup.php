<?php


$uname = $_POST['uname1'];
$email  = $_POST['email'];
$upswd1 = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];
$coursename= $_POST['coursename'];
$conn = mysqli_connect ("localhost","root","","aruna");

  $sql = "INSERT INTO login (uname,email,upswd1,upswd2,coursename)values('$uname','$email','$upswd1','$upswd2','$coursename')";
  $r=mysqli_query($conn,$sql);
  if($r){
    echo "successfully submit";
  }
  else{
    echo "not added";
  }
  ?>



