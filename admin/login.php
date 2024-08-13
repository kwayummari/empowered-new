<?php
session_start();
include 'connection/index.php';
if (isset($_POST['submit'])) {
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="select * from user where username='$username' and password='$password'";
  $result=mysqli_query($connect,$query);
  $count=mysqli_fetch_assoc($result);

  if($count) {
    $_SESSION['id'] = $count['id'];
    $_SESSION['role'] = $count['role'];
    $_SESSION['name'] = $username;  
  if ($count['role'] == 'admin') {
      header("location: home.php");
  }
} else {
  echo "Wrong Username or Passsword";
}
}
 ?>