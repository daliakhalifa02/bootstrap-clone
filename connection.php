<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];
  $host = "localhost";
  $username = "bootstrapdb_user";
  $password = "abc123";
  $dbname = "bootstrapdb";
  $con = mysqli_connect($host, $username, $password, $dbname);
  if (!$con){
    die("Connection failed!" . mysqli_connect_error());
  }
  $sql = "INSERT INTO contactme (id, name, email, number, message) VALUES ('', '$name', '$email', '$number', '$message')";
  $rs = mysqli_query($con, $sql); 
  if($rs){
    echo "Message has been sent successfully!";
  }
  else{
    echo "Error, Message didn't send! Something's Wrong."; 
  }
}
?>
