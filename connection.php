<?php
//calling submit by name from html
if(isset($_POST['submit'])){
//calling the values by name from html (name, message,number, email)
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];
  //using the values used in my database (same username and password)
  $host = "localhost";
  $username = "bootstrapdb_user";
  $password = "abc123";
  //the name of my database
  $dbname = "bootstrapdb";
  //connecting to my database
  $con = mysqli_connect($host, $username, $password, $dbname);
  if (!$con){
    die("Connection failed!" . mysqli_connect_error());
  }
  //inserting the values from the user into the database (contactme is the name of my table)
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
