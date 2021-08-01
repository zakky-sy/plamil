<?php
  include_once 'db_connection.php';
  $nama = mysqli_real_escape_string($conn, $_REQUEST['nama']);
  $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
  $pwd = mysqli_real_escape_string($conn, $_REQUEST['pwd']);
  $sql = "INSERT INTO user (email, nama, password) VALUES ('$email', '$nama', '$pwd')";
  if(mysqli_query($conn, $sql)){
      echo "Records added successfully.";
      $login = "blue";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      $login = "red";
  }
   
  // Close connection
  mysqli_close($conn);
  header("Location:index.php");
?>