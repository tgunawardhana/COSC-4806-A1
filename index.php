<?php
  session_start();
  if ($_SESSION['authenticated'] != 1){
    header("location: /login.php");
  }
?>
    
<!DOCTYPE html>
<html>
  <head>
    <title>COSC 4806</title>
  </head>
  <body>
  
    <h1>Assignment 1</h1>

    <p>Welcome, <?= $_SESSION['username'] ?>!</p>
    
    <p> <a href="/login.php">Click here to login</a> </p>
  
  </body>

  <footer>
    <p> <a href="/logout.php">Logout</a> </p>
  </footer>
</html>