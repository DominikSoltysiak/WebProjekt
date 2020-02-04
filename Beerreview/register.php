<?php
  include 'index.html';



    $conn = new mysqli('127.0.0.1','root','','users_beerreview');

    if(!$conn) {
    echo 'Not connected to server!';
}

    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO users(username,email,password) VALUES('$name','$email','$password')";
    mysqli_query($conn,$sql);



 ?>
